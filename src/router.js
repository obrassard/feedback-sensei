const express = require('express');
const Mailer = require('./mailer');
const router = express.Router();

require('dotenv').config();
const uri = process.env.MONGO_CONNECTION_STRING;
const MongoClient = require('mongodb').MongoClient;

const i18n = require('./i18n')

// Routes 
router.get('/', (req, res) => {
    const mongo = new MongoClient(uri, { useNewUrlParser: true });
    mongo.connect(err => {
        const db = mongo.db("feedback-sensei").collection("apps");
        db.find({visible: true}).project({name:1, appid: 1, _id:0}).toArray((err, result) => {
            if (err) throw err;
            
            res.render('index', {
                availableApps : result,
                i18n : i18n
            });

            mongo.close();
        });
    });
});

router.get('/:appid', (req, res) => {
    const appid = req.params.appid;
    const mongo = new MongoClient(uri, { useNewUrlParser: true });
    mongo.connect(err => {
        const db = mongo.db("feedback-sensei").collection("apps");
        db.findOne({visible: true, appid: appid}, (err, result) => {
            if (err) throw err;
            if (result == null){
                res.redirect('/');
            } else {
                res.render('app-details', {
                    app : result,
                    i18n : i18n
                });           
            }
            mongo.close();
        });
    });
});

router.post('/feedback', (req, res) => {
    const mongo = new MongoClient(uri, { useNewUrlParser: true });
    mongo.connect(err => {
        const db = mongo.db("feedback-sensei").collection("reports");
        req.body.submitDate = new Date();
        db.insertOne(req.body, (err) => {
            
            let result = 'success';
            
            if (err) {
                console.log(err);
                result = 'error';
            }

            res.render('result', {
                appid : req.body.appid,
                result : result,
                i18n : i18n
            })

            if (result = 'success'){
                let mailer = new Mailer();
                mailer.sendFeedbackNotification(req.body)
            }
            
            mongo.close();
        });
    });
});

module.exports = router;
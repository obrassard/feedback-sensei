const express = require('express');
const Mailer = require('./mailer');
const router = express.Router();

require('dotenv').config();
const uri = process.env.MONGO_CONNECTION_STRING;
const MongoClient = require('mongodb').MongoClient;


// Routes 
router.get('/', (req, res) => {
    console.log(uri);
    const mongo = new MongoClient(uri, { useNewUrlParser: true });
    mongo.connect(err => {
        const db = mongo.db("feedback-sensei").collection("apps");
        db.find({visible: true}).project({name:1, appid: 1, _id:0}).toArray((err, result) => {
            if (err) throw err;
            
            res.render('index', {
                apps : result
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
                    app : result
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
        db.insertOne(req.body, (err, res) => {
            
            let result = 'success';
            
            if (err) {
                console.log(err);
                result = 'error';
            }

            res.render('result', {
                appid : req.body.appid,
                result : result
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
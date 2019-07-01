const express = require('express');
const bodyParser = require('body-parser');
const MongoClient = require('mongodb').MongoClient;

require('dotenv').config();
const uri = process.env.MONGO_CONNECTION_STRING;
const app_port = process.env.PORT;

var app = express();
app.use(express.static('public'));

// Config view engine
app.set('views', __dirname + '/views');
app.set('view engine', 'twig');
app.set('twig options', { 
    strict_variables: false
});

// Config bodyparser
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Routes 
app.get('/', function(req, res){
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

app.get('/:appid', function(req, res){
    const appid = req.params.appid;
    const mongo = new MongoClient(uri, { useNewUrlParser: true });
    mongo.connect(err => {
        const db = mongo.db("feedback-sensei").collection("apps");
        db.findOne({visible: true, appid: appid}, function(err, result) {
            if (err) throw err;
            if (result == null){
                res.redirect('/');
            } else {
                console.log(result);
                res.render('app-details', {
                    app : result
                });           
            }
            mongo.close();
        });
    });
});

app.post('/feedback', function(req, res){
    const mongo = new MongoClient(uri, { useNewUrlParser: true });
    mongo.connect(err => {
        const db = mongo.db("feedback-sensei").collection("reports");
        req.body.submitDate = new Date();
        db.insertOne(req.body, function(err, response) {
            let result = 'success';
            if (err) {
                result = 'error';
            }

            res.render('result', {
                appid : req.body.appid,
                result : 'error'
            })

            mongo.close();
        });
    });
    console.log(req.body)
});

app.listen(app_port);
console.log(`Apps listening on port http://localhost:${app_port}`)
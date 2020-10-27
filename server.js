const express = require('express');
const bodyParser = require('body-parser');
var router = require('./src/router');

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

app.use('/', router)

const app_port = process.env.PORT || 8080;
app.listen(app_port);
console.log(`Apps listening on port http://localhost:${app_port}`)
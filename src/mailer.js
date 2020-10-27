//Config Sendgrid
require('dotenv').config();
const sendgrid = require('@sendgrid/mail');
sendgrid.setApiKey(process.env.SENDGRID_API_KEY);

class Mailer {

    sendFeedbackNotification(body) {

        let html = `<strong>Hello! You recieved a new feedback for the app ${body.appid}.</strong><br>
        Here's all the details :<br>
        <table>`;

        for (var key in body) {
            html += `<tr><td><strong>${key}</strong></td><td>${body[key]}</td></tr>`
        }

        html += '</table>';

        //Send mail
        const msg = {
            to: process.env.NOTIFICATION_EMAIL,
            from: {
                email: 'feedback@obrassard.ca',
                name: 'Feedback Sensei'
            },
            subject: `New feedback - ${body.appid}`,
            html: html
        };

        sendgrid.send(msg);
        console.log('Email sent');
    }
}

module.exports = Mailer;
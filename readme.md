# Feedback Sensei

Easily customizable feedback assistant for all of your apps !


## Requirements

- A MongoDB Server
- Node.JS v8+

## Getting started

1. In MongoDB you must create a `feedback-sensei` database with two collections : `apps` & `reports`

2. Add a test app in the 'apps' collection (see [`docs/example-app.json`](https://github.com/obrassard/feedback-sensei/blob/master/docs/example-app.json) for an example !)

3. Create a [SendGrid](https://sendgrid.com/docs/) API Key in order to send feedback notifications.

3. Create a `.env` file based on [`.env.example`](https://github.com/obrassard/feedback-sensei/blob/master/.env.example)
and fill your `MONGO_CONNECTION_STRING`, `SENDGRID_API_KEY` and `NOTIFICATION_EMAIL`, which should be your email address.

4. Install packages and run the server

```sh
npm install
npm run start
```

5. Open http://localhost:8080

6. Enjoy ! :sparkles:

***

[![screenshot](https://github.com/obrassard/feedback-sensei/blob/master/docs/screenshot.png)](https://feedback.obrassard.ca)

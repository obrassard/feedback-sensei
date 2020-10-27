
const lang = process.env.APP_LANGUAGE;

let file;
switch (lang) {
    case 'fr':
    case 'en':
        file = `../i18n/${lang}.json`;
        break;
    default :
        throw new Error('Invalid APP_LANGUAGE')
}

const ressources = require(file)
module.exports = ressources;
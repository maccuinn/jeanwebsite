#Setup:

## Google Cloud SDK

https://cloud.google.com/appengine/docs/standard/php/download

Download and install the Google Cloud SDK: https://cloud.google.com/sdk/docs/

Maybe this is the part where you have to log into the google account to access the app engine?

Should be able to access this page: https://console.cloud.google.com/appengine?project=ingeniuscreations-ca&serviceId=default&duration=PT1H

`gcloud components install app-engine-php`

## Npm install dependencies

`npm install`

## Run scss

If the scss files are updated, use `npm run scss` or `npm run scss:watch` to recreate styles/styles.css
This happens automatically the first time during `npm install`

## Deploy the app

`npm run deploy`

## Profit

yes, it's done now. already. it was that easy.

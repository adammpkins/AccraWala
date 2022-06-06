![AccraWala](https://preview.accrawala.com/img/aw-logo.jpg)
# AccraWala

This project was written in Laravel 8 using Vue3 and InertiaJS. For mapping, it utilizes the Leaflet JS library for OpenStreetMap mapping.

# Installation
First, install the application and its composer dependencies.

    composer install

Initialize and run the docker container

    sail up

Next, if this is the first installation, install the NPM dependencies.

    sail npm install

Next, build the application assets

    sail npm run dev

Or to build them as changes are made


    sail npm run watch


# Development

TODO: Add development contribution documentation.

# Deployment
This project is deployed using Laravel Forge and hosted using DigitalOcean. Quick deploy is currently enabled to deploy the application on the master branch. 

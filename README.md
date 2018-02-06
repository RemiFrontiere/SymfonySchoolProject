SchoolSymfony
==============

## Install dependencies
>composer install
or
>php composer.phar install

## Start
>bin/console server:run

## Get environment variable available for this bundle
>bin/console config:dump-reference [NomBundle] (sans Bundle)

### Exemple:
>bin/console config:dump-reference framework

>bin/console config:dump-reference webserver

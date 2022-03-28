<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel api

1.open console in dir project end run command in console

docker-compose up --build -d


2.copy config connect to database - env file

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=33061
DB_DATABASE=app
DB_USERNAME=app
DB_PASSWORD=secret

WARNING: please check docker container next command in console:
docker ps

if isset running containers - ALL OK!
else - docker - not run



3. run in command line in project:
docker-compose exec php-cli bash


4. RUN NEXT COMMAND IN docker CONTAINER:
composer install
5.
composer dump-autoload
6.
php artisan migrate:refresh --seed


open http://localhost:8080/api/ - link in browser

WARNING: permissions
if isset problem with permissions in project = run next command in console in project:
sudo chmod 744 -R ./*


WARNING: npm
if need install npm need enter in docker container - node ;
docker-compose exec node sh

in container run commands
npm install




Down docker - container
docker-compose down


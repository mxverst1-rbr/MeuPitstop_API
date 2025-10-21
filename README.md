Para rodar o projeto a primeira vez

- PHP 8
- composer 2.7.2
- node 20.19.5
- Docker desktop

renomeia a .env.example pra .env

docker-compose up -d 

composer install 
Caso o composer install não rode vai no seu php.ini, pra localizar ele digita php --ini no terminal e depois tira o ; do extension=php_fileinfo, do extension=php_pdo_pgsql e extension=php_pgsql.dll

php artisan migrate
php artisan serve

Para rodar depois da primeira vez:
php artisan serve
docker-compose up -d 

Para inicializar o projeto usei

composer global require laravel/installer

laravel new example-app

none
0
pgsql
yes
yes

modifiquei a .env, criei o docker-compose

docker compose up -d

php artisan install:api






Para inicializar o projeto usei

- PHP 8
- composer 2.7.2
- node 20.19.5

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


para rodar: php artisan serve
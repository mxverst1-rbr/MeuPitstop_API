API construído com PHP

## Como rodar o projeto (API)

### Programas necessários
- [PHP 8](https://www.php.net/downloads.php)
- [Composer 2.x](https://getcomposer.org/download/)
- [npm](https://www.npmjs.com/) (vem junto com o Node.js)
- [Node.js](https://nodejs.org/) (versão 20.x recomendada)
- [Visual Studio Code](https://code.visualstudio.com/) (editor de código usado)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) (para rodar containers do banco de dados)
- Git (para versionamento e clonar repositórios)


## 1° Execução do projeto
- renomeia a .env.example para → **.env**
- Inicie os containers Docker rode → **docker-compose up -d** 
- Instale as dependências do Composer rode → **composer install** 

⚠️**O.B.S: Caso o comando acima apresente erro, ajuste seu arquivo php.ini. Para localizar o arquivo, execute: "php --ini" no terminal. Em seguida, remova o (;) do início das seguintes linhas: extension=php_fileinfo, extension=php_pdo_pgsql e extension=php_pgsql.dll**

- Execute as migrações e inicie o servidor Laravel rode → **php artisan migrate** e **php artisan serve**

## Execuções posteriores
Após a primeira configuração, basta rodar:
- **php artisan serve** e **docker-compose up -d**

## Criação e configuração inicial do projeto (para referência)
Durante o desenvolvimento, o projeto foi inicializado com os seguintes comandos:
- **composer global require laravel/installer** e **laravel new example-app**

Configurações escolhidas:
- Banco de dados: PostgreSQL (pgsql)
- Outras opções: none 0 pgsql yes yes

Após isso:
- O arquivo .env foi configurado manualmente.
- O arquivo docker-compose.yml foi criado.

Containers iniciados com:
- **docker-compose up -d**

API instalada com:
- **php artisan install:api** 	

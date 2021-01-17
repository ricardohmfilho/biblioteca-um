# Biblioteca

## Backend

Desenvolvido com Apache/2.4.39, PHP 7.3.7, Laravel 7.26.0, MariaDB 10.3.16 e Composer.

### Instalação

~~~shell
$ git clone https://github.com/ricardohmfilho/biblioteca-um.git

$ cd biblioteca-um/backend

$ composer install
~~~

#### arquivo .env

- Renomear o arquivo `.env.example` para `.env` e configurar os campos de conexão do banco de dados: `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD`
- No linux, estas duas informações foram reconhecidas quando colocadas entre aspas duplas: `DB_USERNAME="username"` e `DB_PASSWORD="pass"`
- Se alguma alteração nesse arquivo for feita, rodar os comandos `php artisan config:clear`
e `php artisan cache:clear`

### Migrate

Depois de configurado o banco, rodar o comando de migração para subir a estrutura do banco de dados.

~~~shell
$ php artisan migrate
~~~

### Seed

Agora rode os seeds para preencher os dados nas tabelas.

~~~shell
$ php artisan db:seed
~~~

### Passport

Habilitar o passport

~~~shell
$ php artisan passport:install

$ php artisan passport:keys
~~~

### Diagrama do banco de dados

### Iniciar aplicação

~~~shell
$ php artisan serve
~~~

### Limpeza de cache (se necessário)

~~~shell
$ php artisan cache:clear

$ php artisan config:clear

$ composer dump-autoload
~~~

## Documentação das rotas da API

~~~shell
$ php artisan route:list
~~~

## Frontend

#### Informações básicas

Desenvolvido com Angular 10 e Bootstrap 4.

No navegador basta acessar a raíz do projeto `biblioteca-um` e acessar a pasta `/frontend`. O código do projeto está na pasta `/frontend/code` (exceto `node_modules`).

Lembrando que o servidor do laravel precisa estar ativo.
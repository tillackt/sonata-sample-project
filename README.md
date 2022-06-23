## Sonata Admin 4.x Sample Project with Media Bundle 4.x and User Bundle 5.x and Symfony 6.x

### Requirements
* [PHP 8](https://www.php.net/releases/8.0/en.php)
* [Symfony Cli](https://symfony.com/download)
* [Docker](https://www.docker.com/)

### Installation
1. `symfony composer install`
2. `docker-compose up -d`
3. `symfony console doctrine:schema:create`   
3. `symfony serve`
4. `symfony console sonata:user:create admin admin@example.com password --super-admin`

The project URL is shown by executing the command `symfony serve`. (example: http://127.0.0.1:8000/admin)

Log in with user 'admin' and password 'password'.

This demo provides
* [sonata-project/sonata-admin-bundle](https://github.com/sonata-project/SonataAdminBundle)
* [sonata-projet/media-bundle](https://github.com/sonata-project/SonataMediaBundle)
* [sonata-projet/sonata-user-bundle](https://github.com/sonata-project/SonataUserBundle)
* [silasjoisten/sonata-multiupload-bundle](https://github.com/silasjoisten/sonata-multiupload-bundle)

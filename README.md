# O que fazer pra rodar o projeto?
## Preciso de PHP 8
## WampServer
## Composer

# Na primeira vez que vou usar, temos que fazer o comando: composer install
Ele instala todas as dependencias necessárias pra rodar o laravel

# Criando o banco de dados - temos que mudar no arquivo .env para esses parametros:
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=teste
DB_USERNAME=root
DB_PASSWORD=

## O comando para criar as tabelas automaticamente pelo terminal é: php artisan migrate

# Pra gente lembrar, estamos utilizando o MVC, portanto temos que ter classes de model, controller e as views.
As views ficam na pasta resources, onde temos as views genericas em \components
E o conteudo dessas views na pasta com o nome de cada classe.
Além de ter uma pasta css e outra js sabemos o pq. 




Padrão para criar uma nova página:

1- Criar a ROTA dela (\routes\web.php)
2- Criar função na CONTROLLER do objeto  (nesse caso é \app\Controllers\MachinesController.php)




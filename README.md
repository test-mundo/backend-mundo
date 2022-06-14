## Clonar el proyecto y luego verificar tener las siguientes herramientas instaladas, (Las versiones utilizadas de cada herramienta están a continuación)

# Versiones de herramientas 
- XAMPP 8.1.6
- PHP 8.0.20 
- Laravel Framework 9.17.0 
- Composer version 2.3.7

# Pasos a seguir para ejecutar la base de datos y cargarla

Dentro de la carpeta del proyecto, abrir la terminal y ejecutar comando 

- composer install

- El siguiente paso, es abrir el proyecto desde visual Studio Code y cambiar el nombre del archivo .env.example y renombrarlo por .env

- Posteriormente al paso anterior, abrir PHPMYADMIN y crear una base de datos vacía llamada laravel 

Luego, dentro de la carpeta del proyecto ejecutamos los siguientes comandos.

- php artisan migrate 
- php artisan db:seed
- php artisan serve 













![alt text](./graphics/argos-logo.png "Argos SSO")

### Prerequisitos
 
* Apache web server 
* mod_rewrite enabled
* PHP 7.3.26
* Composer
* MySQL 5+
* Libreria GD 
* Multibyte String support (for internationalization)
* Libreria XML

## Instalacion

* Clonar este repositorio
* Crear una base de datos en limpio
* Con la consola de comandos (CLI), ir a la carpeta root del sistema y ejecutar el comando ``` composer install ```
* Cambiar los parametros de la base de datos en el archivo ``` .env ``` (Si no existe un archivo .env, copiar el archivo .env.example)
* Cambiar los permisos de la carpeta ``` storage ```
* Usar el CLI y ejecutar el siguiente comando: ``` php artisan key:generate ```
* Luego, con el CLI ejecutar el siguiente comando: ```  php artisan view:clear ``` y tambien el comando ``` php artisan cache:clear ```
* Para generar el esquema de la base de datos del sistema, ejecute el comando: ``` php artisan migrate ``` 

## Paquetes requeridos

<p align="center"><img src="https://laravel.com/assets/img/components/logo-passport.svg"></p>

<p align="center"><img src="https://raw.githubusercontent.com/guzzle/guzzle/master/.github/logo.png"></p>

<p align="center"><img src="./graphics/cors.png"></p>


## Informacion Adicional

Creado con:

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<b>Version 8.25.0</b>
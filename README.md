<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalación

El presente proyecto es el backend de una API desarrollado en el Framework Laravel. Para instalarlo seguimos los siguientes pasos:
1. Creamos una carpeta donde se almacenará el proyecto.
2. Nos novemos a la carpeta creada y ejecutamos "git init".
3. Digitamos "git remote add origin <<ruta del repositorio>>".
4. Digitamos git pull origin master.
5. Instalamos librerias "composer install".
6. Creamos una copia del archivo .env "cp .env.example .env".
7. Modificamos .env con los datos de acceso a la base de datos.
8. php artisan key:generate
9. php artisan migrate

## Ejecución

Las rutas del CRUD del proyecto se indican a continuación, fuerons probadas con el programa Postman.

1 - Mostrar todos los registros de la API
Ruta principal: http://localhost/apiRM/Rickandmorty/public/api/characters - (GET)

2 - Crear un registro
Ruta: http://localhost/apiRM/Rickandmorty/public/api/characters - (POST)
Ejemplo de data a enviar
{
    "name": "Daniel",
    "status": "Alive",
    "species": "Human",
    "type": "Homo-sapiens",
    "gender": "Male",
    "origin": "Earth",
    "location": "Bogota",
    "image": "www.google.com",
    "episode": "Episode 1, Episode 2",
    "url": "www.google.com"
}

3 - Mostrar un registro (Nos devuelve info de un personaje, tenemos que enviar el id)
Ruta: http://localhost/apiRM/Rickandmorty/public/api/characters/681 - (GET)

4 - Actualizar un registro (Debemos enviar la información con la data a actualizar):
Ruta: http://localhost/apiRM/Rickandmorty/public/api/characters/681 - (PUT)

{
    "name": "Daniel Suescún",
    "status": "Alive",
    "species": "Human",
    "type": "Homo-sapiens",
    "gender": "Male",
    "origin": "Earth",
    "location": "Bogota",
    "image": "www.google.com",
    "episode": "Episode 1, Episode 2",
    "url": "www.google.com"
}

5 - Eliminar un registro
Ruta: http://localhost/apiRM/Rickandmorty/public/api/characters/681

## Desarrollador

- Daniel Eduardo Suescún Angarita
- github: danielsues99

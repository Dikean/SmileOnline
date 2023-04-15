Para hacer este proyecto de laravel se utilizo laragon

**# 1 paso descragar laragon **
- Visita la página web oficial de Laragon: https://laragon.org/download/index.html
- descargar esta version: Download Laragon - Full (173 MB)

**# 2 despues de instalo haz los siguentes pasos**
- Descarga o clona el proyecto desde Github a la carpeta www de Laragon.
- Abre Laragon y asegúrate de que el servidor Apache y MySQL estén activados sino dale en **Iniciar todo** que esta en la **Parte Inferior izquierda**.
- Abre una terminal en la carpeta del proyecto dentro de la carpeta www de Laragon o alli mismo donde dice **Terminal** al lado del **root**.
- Ejecuta el comando **composer install** para instalar las dependencias de Laravel.
- Si el proyecto utiliza algún gestor de paquetes de front-end como npm o Yarn, debes ejecutar el comando **npm install** o **yarn install** para instalar las dependencias de front-end.

**# 3 migraciones **
- Ejecuta el comando **php artisan migrate** para correr las migraciones de Laravel y crear las tablas necesarias en la base de datos.
- Te pedira crear la tabla dale yes

**# 4 crear seeders **
Ejecuta los siguentes comandos en la terminal para los seeders
- **php artisan db:seed Databaseseeder**

**# 5 Ver los status de nuestras tablas **
- **php artisan migrate:status**

**# 6 Hcer los rollback **
- **php artisan migrate:rollback**

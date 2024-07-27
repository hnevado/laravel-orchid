<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p>Laravel Orchid es una solución potente y fácil de usar para crear paneles de administración. En este ejemplo creamos un pequeño CRUD de productos con solo unas pequeñas modificaciones. Los pasos serían:</p>

<ol>
 <li>Agregar dependencia: composer require orchid/platform</li>
 <li>Instalar el paquete: php artisan orchid:install</li>
 <li>Crear un usuario administrador: php artisan orchid:admin tuUsuario tuEmail@admin.com password</li>
 <li>Crear y configurar el modelo y la migración: php artisan make:model Product -m</li>
 <li>Crear y configurar el resource: php artisan orchid:resource ProductResource</li>
</ol>

<p><img src="https://github.com/hnevado/laravel-orchid/blob/master/public/img/orchid.png"></p>


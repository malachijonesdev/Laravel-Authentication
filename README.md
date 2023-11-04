<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Jetstream

Laravel Jetstream is a beautifully designed application starter kit for Laravel and provides the perfect starting point for your next Laravel application. Jetstream provides the implementation for your application's login, registration, email verification, two-factor authentication, session management, API via Laravel Sanctum, and optional team management features.

- [Official document](https://jetstream.laravel.com/).

## Installation Guide

1: Install [Xampp](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe), [SQLyog](https://en.softonic.com/download/sqlyog/windows/post-download) and [Composer](https://getcomposer.org/Composer-Setup.exe) on your local machine

2: Create a database:`sprlogin` using SQLyog after running Xampp

3: Download the source code and change `.env.example` to `.env`

4: Install Laravel composer
```
composer install
```

5: Install npm package
```
npm install
```

5: Run front-end

```
npm run dev
```

7: Run Laravel backend

```
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000) to view it in your browser.

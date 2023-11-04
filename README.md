<p align="center"><a href="https://jetstream.laravel.com" target="_blank"><img src="https://jetstream.laravel.com/logo-dark.svg" width="400" alt="Laravel Logo"></a></p>

## About Jetstream

Laravel Jetstream is a beautifully designed application starter kit for Laravel and provides the perfect starting point for your next Laravel application. Jetstream provides the implementation for your application's login, registration, email verification, two-factor authentication, session management, API via Laravel Sanctum, and optional team management features.

## Installation Guide

1: Install [Xampp](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe), [SQLyog](https://en.softonic.com/download/sqlyog/windows/post-download) and [Composer](https://getcomposer.org/Composer-Setup.exe) on your local machine

2: Create a database:`sprlogin` using SQLyog after running Xampp

3: Download the source code and change `.env.example` to `.env`

4: Install Laravel composer
```
composer install
```

5: Migrate your database
```
php artisan migrate
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

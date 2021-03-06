<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Free Covid API Setup

* Pre-Requirements include:
```
Laravel latest version
Composer latest version
```

```
Clone repo BackEnd_ECP
CD into BackEnd_ECP
```
### Install composer dependencies


Option #1
ONLY if you have installed composer already
```
composer update 
```
Option #2
```
composer install
```
### .ENV Setup

* Due to the fact this project is public you must ask one of the projects Owners to get the 
    necessary .env file -> See Organisation ADMIN & OWNERS!!
    This option will grant acces to the database hosted by AWS

* You can also create your own .env and then copy to it the .env.example provided in the repo.
    Take note to add:
    - PASSPORT_PERSONAL_ACCESS_CLIENT_ID=
    - PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET=

* This will be given to you after running php artisan passport:install

### Installing passport and using keys


Once you have created your .env run this command
```
php artisan passport:install
```

* If you have created your own .env file ADD the CLIENT_ID & THE CLIENT_SECRET given to you after 
  the passport:install to your .env file. (refer to prvious step)

# !! IMPORTANT Skip ready to launch if you created your own .env file with your own database!!


### Ready to launch

The API is now setup and ready to run!!
Just run the following command to see:
```
php artisan serve 
```
-> this will run the app on your localhost!
## !! ONLY FOLLOW THESE STEPS IF YOU CREATED YOUR OWN .ENV FILE!!
### Database Migrations

After installing composer dependencies, add your database credentials in `.env` file and then run migrations.

```
php artisan migrate
```
### Database Seeding

After migratating your database tables, its time to seed some default data!! For now we want to seed the basic tables by force.

```
php artisan db:seed --force
```

Now, in the terminal run `artisan serve` command. It will run the application at `http://127.0.0.1:8000`

```
php artisan serve
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# BackEnd_ECP 2021

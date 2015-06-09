## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Instructions on deploying this project on wamp

## Installation

- install wamp from `http://www.wampserver.com/en/`

- install Composer from `https://getcomposer.org/`

- Type `composer global require "laravel/installer=~1.1"` in command line interface

- Add `~/.composer/vendor/bin` to your PATH environment variable. In Windows 8 this position should be like `C:\Users\YOUR_USER_NAME\AppData\Roaming\Composer\vendor\bin;`. If you cannot find it, search for the `Composer` directory in your system drive.

## Configuration

Note: you should change `PATH\TO` or `ALIAS_NAME` to suit your need.

- Edit `PATH\TO\wamp\bin\apache\apache2.4.9\conf\httpd.conf`, search for `<Directory />`, change `"Require all denied"` to `"Require all granted"` (without the quotes)

- After you run wamp server, click the status icon of it, choose `Apache` -> `Apache Modules` -> Check `rewrite_module`

## Test installation

- Type `laravel new blog` in command line to make a new laravel app called blog. It will be added to your current working directory.

- Add an WAMP alias to the public folder. Click your wamp status icon and choose `Apache` -> `Alias Directories` -> `Add an alias`, then follow the instructions to add your `/PATH/TO/BLOG/public/` directory as an alias with name `ALIAS`

- Edit `PATH\TO\BLOG\public\.htaccess`, add a line with `RewriteBase /ALIAS`

- Now you should be able to access `http://localhost/ALIAS/`, note the last "/" should not be omitted. Also `http://localhost/ALIAS/home`, note you should not add a "/" at the last position.

- Database is not yet working, so you can't register or login. This part will be included later.

## Reference

http://www.golaravel.com/laravel/docs/5.0/

https://www.flynsarmy.com/2015/02/creating-a-basic-todo-application-in-laravel-5-part-1/

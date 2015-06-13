### Instructions for deploying this project on WAMP

## Installation

- install WAMP from `http://www.wampserver.com/en/`

- install Composer from `https://getcomposer.org/`

- install Laravel framework
```
$> composer global require "laravel/installer=~1.1"
```

- Add `~/.composer/vendor/bin` to your PATH environment variable to let you use laravel from the command line.

  In Windows 8 this directory should be something like
  `C:\Users\YOUR_USER_NAME\AppData\Roaming\Composer\vendor\bin`
  (replace "YOUR_USER_NAME" with your actual user name)

  If you cannot find it, search for the `Composer` directory in your system drive.

## Configuration

- Edit `PATH\TO\WAMP\bin\apache\apache2.4.9\conf\httpd.conf`, search for `<Directory />`, change `"Require all denied"` to `"Require all granted"` (without the quotes)

  Note, `"PATH\TO\WAMP"` should be replaced with your WAMP installation path.

- After you start WAMP server, click the status icon of it, choose `Apache` -> `Apache Modules` -> Check `rewrite_module`

## Test installation

- make a new laravel app called APP_NAME

  (replace APP_NAME with a name for your app, use the same name for later occurrences of APP_NAME too)
```
$> laravel new APP_NAME
```

  It will be added to your current working directory.

- To add an WAMP alias to the public folder, click your WAMP status icon and choose `Apache` -> `Alias Directories` -> `Add an alias`, then follow the instructions to add your `/PATH/TO/APP_NAME/public/` directory as an alias with name `ALIAS_NAME`

  (replace "ALIAS_NAME" with a actual name to suit your need, use the same name for later occurrences of "ALIAS_NAME" too)

- Edit `PATH\TO\APP_NAME\public\.htaccess`, add a line with `RewriteBase /ALIAS_NAME`

- Now you should be able to access `http://localhost/ALIAS_NAME/` and `http://localhost/ALIAS_NAME/home`

  Note the last "/" of the first address should not be omitted.

- To access the page with `http://localhost/ALIAS_NAME`, edit `PATH\TO\WAMP\alias\ALIAS_NAME.conf`
  Change the first line from something like:
  ```
  Alias /ALIAS_NAME/ "PATH/TO/APP_NAME/"
  ```
  to
  ```
  Alias /ALIAS_NAME "PATH/TO/APP_NAME/"
  ```
  Now, accessing from `http://localhost/ALIAS_NAME` should be okay.

## Deploying this project

- Follow https://help.github.com/articles/set-up-git/ to learn using git and github.com

- Clone this project from github
```
$> git clone https://github.com/Bobgy/audit.git
```

- Laravel uses a `.env` file at `PATH\TO\APP_NAME\` to store some environment related configuration, configure it for yourself

  (copy from `.env.example` if `.env` doesn't already exist)

- Copy `PATH\TO\APP_NAME\vendor` to `PATH\TO\audit\`

- Visit `localhost\phpmyadmin`, add a database called `audit`, then execute the sql file `PATH\TO\audit\databse\migrations\system_admin_sedb.sql`

- Goto `PATH\TO\audit` and create database tables by the following commands
```
$> php artisan migrate
$> php artisan db:seed
```

- Create a new alias called "audit" for `PATH\TO\audit\public`, do the same fixes as explained in "Test Installation"

- Now the project should be working on `localhost/audit`

- To log in, add an entry in phpmyadmin's database "audit", table "manager_info" for yourself

## Reference

- http://www.golaravel.com/laravel/docs/5.0/

- https://www.flynsarmy.com/2015/02/creating-a-basic-todo-application-in-laravel-5-part-1/

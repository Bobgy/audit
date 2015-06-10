### Instructions on deploying this project on WAMP

## Installation

- install WAMP from `http://www.wampserver.com/en/`

- install Composer from `https://getcomposer.org/`

- Type `composer global require "laravel/installer=~1.1"` in command line interface to install Laravel framework.

- Add `~/.composer/vendor/bin` to your PATH environment variable to let you use laravel from the command line.
In Windows 8 this directory should be something like `C:\Users\YOUR_USER_NAME\AppData\Roaming\Composer\vendor\bin;`, replace "YOUR_USER_NAME" with your actual user name.
If you cannot find it, search for the `Composer` directory in your system drive.

## Configuration

Note: you should change `PATH\TO` or `ALIAS_NAME` to suit your need.

- Edit `PATH\TO\WAMP\bin\apache\apache2.4.9\conf\httpd.conf`, search for `<Directory />`, change `"Require all denied"` to `"Require all granted"` (without the quotes)
Note. `"PATH\TO\WAMP"` should be replaced with your WAMP installation path.

- After you start WAMP server, click the status icon of it, choose `Apache` -> `Apache Modules` -> Check `rewrite_module`

## Test installation

- Type `laravel new APP_NAME` in command line to make a new laravel app called APP_NAME (replace APP_NAME with a name for your app). It will be added to your current working directory.

- Add an WAMP alias to the public folder. Click your wamp status icon and choose `Apache` -> `Alias Directories` -> `Add an alias`, then follow the instructions to add your `/PATH/TO/APP_NAME/public/` directory as an alias with name `ALIAS_NAME` (replace "ALIAS_NAME" with a actual name to suit your need)

- Edit `PATH\TO\APP_NAME\public\.htaccess`, add a line with `RewriteBase /ALIAS_NAME` (replace "ALIAS_NAME" with what you used)

- Now you should be able to access `http://localhost/ALIAS_NAME/` and `http://localhost/ALIAS/home`
Note the last "/" of the first address should not be omitted.

- To access the page with `http://localhost/ALIAS_NAME`, edit `PATH\TO\WAMP\alias\ALIAS_NAME.conf`
  Change the first line from something like:
  ```
  Alias /ALIAS_NAME/ "PATH/TO/BLOG/"
  ```
  to
  ```
  Alias /ALIAS_NAME "PATH/TO/BLOG/"
  ```
  Now, accessing from `http://localhost/ALIAS_NAME` should work.


- Database is not yet working, you should create your own `.env` file at `PATH\TO\APP_NAME\`, copy from `.env.example` and modify it.

## Reference

http://www.golaravel.com/laravel/docs/5.0/

https://www.flynsarmy.com/2015/02/creating-a-basic-todo-application-in-laravel-5-part-1/

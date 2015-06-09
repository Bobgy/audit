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

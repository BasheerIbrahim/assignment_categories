# CodeIgniter 4 Application

##  Getting started
- Clone the repository
- cp env file to .env, uncomment the following lines and make the changes to connect to db:
    ```
    gdatabase.default.hostname = 127.0.0.1
    database.default.database = assignment_categories
    database.default.port = 3306
    database.default.username = root
    database.default.password = secrit
  ```
- create db with the same name
- run migration (for the tables) and seeds:
    ``` 
    php spark migrate 
    php spark db:seed CategorySeeder
    ```


## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.


## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

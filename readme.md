# LaraCurrency Backend app with API Authentication
### [NgCurrency frontend angular 5](https://github.com/amroeldewiny/convert-currency-ng-app)
 
Convert Currency simple app working with laravel and angular <br />
The app build with laravel 5.6 and angualr 5 to create simple authentication app

## Why we use Laravel api

With the rise of mobile development and JavaScript frameworks, using a RESTful API is the best option to build a single interface between your data and your client.

Laravel is a PHP framework developed with PHP developer productivity in mind. Written and maintained by Taylor Otwell, the framework is very opinionated and strives to save developer time by favoring convention over configuration. The framework also aims to evolve with the web and has already incorporated several new features and ideas in the web development world—such as job queues, API authentication out of the box, real-time communication, and much more.


## Before anything else be sure to have server running like
1- wamp<br />
2-xampp<br />
3- mamp<br />
4 - homestead vagrant box<br />
5- or eny vagrant box <br />

## Important steps

1- After pulling go to hots file in c:/windows/system32/drivers/etc/hosts and add 192.168.10.10  laraCurrency.test <br />
2- cd to project folder --- folder name laraCurrency <br />
3- rename .env.example to .env <br />
4- in .env rename database to laraCurrency <br />
5 - in git bash composer update <br />
6 - php artisan migrate <br />
7- maybe you have to run php artisan passport:install <br />
8- run your server <br />


# For more information about laravel and how to install it visit
[laravel Documentation](https://laravel.com/docs/5.6)

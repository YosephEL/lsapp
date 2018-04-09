# Info-Gebana RabbitMQ integration project 

This demo program used for Info-Gebana mobile app integration project  on RabbitMQ Message queue and Laravel Framework. 
## How to use the program

step 1
-Download and Install composer to use this program from
 www.getcomposer.org
-Install laravel Framework Via composer 
    - composer create-project --prefer-dist laravel/integrtiongma "blog" or "project name"
  After you insalling laravel project 
    - go to comoser.json file
        Add 
            -         "php-amqplib/php-amqplib": ">=2.6.1"
            -         "enqueue/amqp-bunny": "^0.8",
Step 2 for using the laravel framework 
 in the integrationgma folder 
  Type and hit "composer update"

### More Steps

What things you need to install the software and how to install them
Global Requires 
Step-1
Download the levavel installer into a machine
	Composer global require “laravel/installer=~1.1”
Via Composer, type 
Comoser create-project laravel/messagingq
Development Environments requires, 
-	Nginx, PHP 5.6, MySQL, RabbitMQ, 

```
Give examples
```
Download and Install composer to use this program 
from www.getcomposer.org on the machine, 
then -Install laravel Framework Via composer 
- composer create-project --prefer-dist laravel/integrationgma  or "project name" After you insall laravel project - go to comoser.json file Add - "php-amqplib/php-amqplib": ">=2.6.1" - "enqueue/amqp-bunny": "^0.8", 

1. Create Controller for the index page 
Create a messaging folder under \resources\views directory, 
Create index.blade.php file under the messaing folder 
Open the root directory use CLI and type
php artisan make:controller messageController

create a Routing function 
under \app\Http\Controllers directory 
open  messageController php file 

public function index()

    {
        //
        return view('messaging.index');
    }
    
If you hit the /index rout in your web browser, you will see index page 
Create Send and Receive php file under messaging 

Create ORM in routes folder web.php file


 Route::resource('messaging','MessageController');


### Installing

A step by step series of examples that tell you have to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system


### And coding style tests

Source code testing, 
```
Give an example
```
open the url and review. 
## Deployment

In progress
## Built With
Laravel and RabbitMQ

## Contributing by 
Laravel and RabbitMQ
Please read
## Versioning
Free version 
## Authors

Y.Lechebo 
## License

free licence 

## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc 
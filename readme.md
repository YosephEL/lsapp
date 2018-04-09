# Info-Gebana RabbitMQ integration project 

This demo program used for Info-Gebana mobile app integration project  on RabbitMQ Message queue and Laravel Framework. 
## How to use the program

Stapes for new development 
-Download and Install composer to use this program from www.getcomposer.org on the machine 
-Install laravel Framework 
    Via composer 
    - composer create-project --prefer-dist laravel/laravel "blog" or "project name"
  After you insall laravel project 
    - go to comoser.json file
        Add 
            -         "php-amqplib/php-amqplib": ">=2.6.1"
            -         "enqueue/amqp-bunny": "^0.8",
Steps for using the exist github repository.
    Clone from github 
        - if you have composer in your machine 
   go to the directory folder and type "composer update"

### Prerequisites

What things you need to install the software and how to install them
Global Requires 
Step-1
Download the levavel installer into a machine
	Composer global require “laravel/installer=~1.1”
Via Composer, type 
Comoser create-project laravel/messagingq
Development Environments requires, 
-	Nginx, PHP 5.6, MySQL, Radis,

```
Give examples
```
Download and Install composer to use this program from www.getcomposer.org on the machine -Install laravel Framework Via composer - composer create-project --prefer-dist laravel/integrationgma  or "project name" After you insall laravel project - go to comoser.json file Add - "php-amqplib/php-amqplib": ">=2.6.1" - "enqueue/amqp-bunny": "^0.8", 
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

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

## Contributing

Please read
## Versioning

## Authors

## License


## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc


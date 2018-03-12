<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Jobs\SendReminderEmail;
use Carbon\Carbon;

// routing the welcome page
Route::get('/', 'PageController@index');
Route::get('/pages/about', 'PageController@about');
Route::get('/services', 'PageController@services');

Route::get('/pages/contact', 'PageController@contact');



Route::resource('posts','PostsController');

//Route::resource('producers','Pr_ProducersController');

Route::resource('gebinfo','Pr_ProducersController');






//Routing the hello world text
Route::get('/hello', function () {

   return view('welcome');
    // return 'Hello world';
});
// Routing the about page
Route::get('/about', function () {

 return view('about');

});
// Routing the about page
Route::get('/index', function () {

    return view('index');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/password', function () {

    $job = (new SendReminderEmail())
        ->delay(Carbon::now()->addSecond(10));

    dispatch($job);
    return 'Hallo, Your Reset request sent check your email ';
    });

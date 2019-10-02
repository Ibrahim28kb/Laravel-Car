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

// Route::get('/','HomeController@homepage');
// Route::get('/{name}','HomeController@setName');
// Route::get('/welcome/{name?}','HomeController@setName');

// Route::get('/master','HomeController@homepage');

Route::get('/about','AboutController@about');
Route::get('/about/who-we-are','AboutController@whoWeAre');

Route::get('/contact','ContactController@contact');
Route::get('/contact/send-message','ContactController@sendMessage');

Route::get('/category','CarsController@brands');
Route::get(' /car-classes/{category_id}','CarsController@classes');
Route::get(' /order/{car_ID}/{name}','CarsController@order');



/*Route::post('/', function () {
    echo 'Post request';
});

Route::delete('/', function () {
    echo 'Delete request';
});

Route::put('/', function () {
    echo 'Put request';
});

Route::patch('/', function () {
    echo 'Patch request';
});*/

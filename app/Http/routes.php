<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>['auth']], function(){



    Route::resource('poll','pollController');
    Route::resource('newsfeed','newsFeedController');
     
    
    Route::resource('attendence','attendenceController');
    
    Route::resource('attend/single/{id}','attendenceController@show_attendence_json');
    
    Route::get('shownewsfeed','newsfeedjson@show_all_news_feed');


});

//Route::get('/login', function(){
//    return view('login');
//});
//Route::post('login','userController@postLogin');







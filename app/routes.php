<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['uses' => 'projectsController@index', 'as' => 'project.home']);

Route::get('/formEdit', ['uses' => 'projectsController@edit', 'as' => 'project.editForm']);

Route::post('/formUpdate', ['uses' => 'projectsController@update', 'as' => 'project.updateForm']);

/* */


/* Login / Logout / Profile routes */
/*
Route::get('/', ['as' => 'home', function()
{
    return 'Home page!!';
}]);
*/
Route::get('profile', function()
{
    return "Welcome. Your email adress is " . Auth::user()->email;
})->before('auth');




Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy']]);
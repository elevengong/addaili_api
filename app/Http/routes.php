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

//---------------------api------------------------

Route::any('/stat/{uid}/{type}','frontend\IndexController@getJsCode')->where(['uid' => '[0-9]+'])->where(['type' => '[0-9]+']);
Route::any('/deal','frontend\IndexController@deal');

Route::any('/','frontend\IndexController@index');

//Route::group(['middleware' => ['cors']],function () {
//
//
//});





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

Route::get("/", "IndexController@getIndex");
Route::post("/devtools", "IndexController@postIndex");
Route::post("/devtoolsfaker", "IndexController@postFakerIndex");

//Route::post("/devtools", "BlockController@postBlocks");
//Route::post("/devtools/blocks", "BlockController@postBlocks");
//Route::post('/devtools/randomusers', 'RandomUserController@postRandomUser');
//Route::post("devtools.randomusers", "RandomUserController@postRandomUser");
//Route::controller("example", "ExampleController");

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


?>

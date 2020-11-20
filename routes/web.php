<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/', 'App\Http\Controllers\PageController@mainPage');

});

Route::group(['middleware' => ['web', 'auth', 'teacher']], function () {

    Route::get('/prideti-uzduoti', 'App\Http\Controllers\PageController@addTask');

    Route::post('/store-task', 'App\Http\Controllers\TaskController@storeTask');

    Route::get('/uzduociu-valdymas', 'App\Http\Controllers\PageController@taskControl');

    Route::get('/uzduociu-valdymas/destroy-task/{id}', 'App\Http\Controllers\TaskController@destroyTask');

    Route::get('/uzduociu-valdymas/redaguoti-uzduoti/{id}', 'App\Http\Controllers\PageController@editTask');

    Route::post('/uzduociu-valdymas/redaguoti-uzduoti/update-task/{id}', 'App\Http\Controllers\TaskController@updateTask');

});
Route::group(['middleware' => ['web', 'auth', 'student']], function () {

    Route::get('/mano-uzduotys', 'App\Http\Controllers\PageController@myTasks');

    Route::get('mano-uzduotys/complete-task/{id}', 'App\Http\Controllers\TaskController@completeTask');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

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

Route::get('/apps', ['uses' => 'App\Http\Controllers\AppController@index']);

Route::get('/apps/detail/{app_id}', ['uses' => 'App\Http\Controllers\AppController@detail'])->name('detail');

Route::get('/apps/{category_id}', ['uses' => 'App\Http\Controllers\AppController@categoryFilter'])->name('filter');

Route::get('/', function () {
    return redirect(RouteServiceProvider::HOME);
});

Auth::routes();

Route::get('/me/apps', [App\Http\Controllers\UsersController::class, 'index'])->name('my/apps');

Route::get('/me/apps/add', [App\Http\Controllers\DevAppController::class, 'add'])->name('add');

Route::post('/me/apps/update', [App\Http\Controllers\DevAppController::class, 'update'])->name('update');

Route::get('/me/apps/update/{app_id}', [App\Http\Controllers\DevAppController::class, 'view'])->name('view');

Route::get('/me/apps/del/{app_id}', [App\Http\Controllers\DevAppController::class, 'delete'])->name('delete');

Route::get('/me/apps/prices/{app_id}', [App\Http\Controllers\DevAppController::class, 'prices'])->name('prices');
    
Route::get('/me/apps/{category_id}', [App\Http\Controllers\ClientAppController::class,'categoryFilter'])->name('client/filter');

Route::post('/api/buy', [App\Http\Controllers\ClientAppController::class,'apiBuy'])->name('/api/buy');

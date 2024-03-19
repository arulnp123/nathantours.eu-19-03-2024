<?php

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

Route::get('/', function () {
  return view('admin/auth/login');
});
Auth::routes();

//STAFF
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/addpopulartours', [App\Http\Controllers\Populartourscontroller::class, 'addpopulartours'])->name('addpopulartours');
Route::get('/admin/viewpopulartours', [App\Http\Controllers\Populartourscontroller::class, 'viewpopulartours'])->name('viewpopulartours');
Route::get('/admin/add_users', [App\Http\Controllers\UsersController::class, 'add_users'])->name('add_users');
Route::get('/admin/view_users', [App\Http\Controllers\UsersController::class, 'view_users'])->name('view_users');
Route::get('/admin/saveusers', [App\Http\Controllers\UsersController::class, 'saveusers'])->name('saveusers');
Route::get('/admin/addhottours', [App\Http\Controllers\HottoursController::class, 'addhottours'])->name('addhottours');
Route::get('/admin/viewhottours', [App\Http\Controllers\HottoursController::class, 'viewhottours'])->name('viewhottours');
Route::post('/admin/savepopulartours', [App\Http\Controllers\Populartourscontroller::class, 'savepopulartours'])->name('savepopulartours');
ROUTE::get('/admin/edit_populartours/{id}', [App\Http\Controllers\Populartourscontroller::class, 'edit_populartours'])->name('edit_populartours');
Route::get('/admin/delete_populartours/{id}', [App\Http\Controllers\Populartourscontroller::class, 'delete_populartours'])->name('delete_populartours');
Route::get('/admin/add_img_populartours/{id}', [App\Http\Controllers\Populartourscontroller::class, 'add_img_populartours'])->name('add_img_populartours');

Route::post('/admin/savehottours', [App\Http\Controllers\HottoursController::class, 'savehottours'])->name('savehottours');
ROUTE::get('/admin/edit_hottours/{id}', [App\Http\Controllers\HottoursController::class, 'edit_hottours'])->name('edit_hottours');
Route::get('/admin/delete_hottours/{id}', [App\Http\Controllers\HottoursController::class, 'delete_hottours'])->name('delete_hottours');
Route::get('/admin/add_img_hottours/{id}', [App\Http\Controllers\HottoursController::class, 'add_img_hottours'])->name('add_img_hottours');
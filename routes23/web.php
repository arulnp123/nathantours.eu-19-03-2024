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
  return view('frontend/index');
});

//STAFF
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\aboutController::class, 'about'])->name('about');
Route::get('/hot_tours', [App\Http\Controllers\hot_toursController::class, 'hot_tours'])->name('hot_tours');
//Route::get('/contact_us', [App\Http\Controllers\contact_usController::class, 'contact_us'])->name('contact_us');
//Route::post('/sendemail', [App\Http\Controllers\contact_usController::class, 'send'])->name('sendemail');
Route::get('/Book_now/{id}', [App\Http\Controllers\BooknowController::class, 'Book_now'])->name('Book_now');
Route::get('/Book_now2/{id}', [App\Http\Controllers\Booknow2Controller::class, 'Book_now2'])->name('Book_now2');
Route::get('/getintouch', [App\Http\Controllers\GetintouchController::class, 'getintouch'])->name('getintouch');


Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/addpopulartours', [App\Http\Controllers\Populartourscontroller::class, 'addpopulartours'])->name('addpopulartours');
Route::get('/admin/viewpopulartours', [App\Http\Controllers\Populartourscontroller::class, 'viewpopulartours'])->name('viewpopulartours');
Route::get('/admin/add_users', [App\Http\Controllers\UsersController::class, 'add_users'])->name('add_users');
Route::get('/admin/view_users', [App\Http\Controllers\UsersController::class, 'view_users'])->name('view_users');
Route::post('/admin/saveusers', [App\Http\Controllers\UsersController::class, 'saveusers'])->name('saveusers');
Route::get('/admin/addhottours', [App\Http\Controllers\Hottourscontroller::class, 'addhottours'])->name('addhottours');
Route::get('/admin/viewhottours', [App\Http\Controllers\Hottourscontroller::class, 'viewhottours'])->name('viewhottours');


Route::post('/admin/savepopulartours', [App\Http\Controllers\Populartourscontroller::class, 'savepopulartours'])->name('savepopulartours');
ROUTE::get('/admin/edit_populartours/{id}', [App\Http\Controllers\Populartourscontroller::class, 'edit_populartours'])->name('edit_populartours');
Route::get('/delete_populartours/{id}', [App\Http\Controllers\Populartourscontroller::class, 'delete_populartours'])->name('delete_populartours');
Route::get('/admin/add_img_populartours/{id}', [App\Http\Controllers\Populartourscontroller::class, 'add_img_populartours'])->name('add_img_populartours');
Route::post('/updatepopulartours', [App\Http\Controllers\Populartourscontroller::class, 'updatepopulartours'])->name('updatepopulartours');

Route::get('/delete_hottours/{id}', [App\Http\Controllers\Hottourscontroller::class, 'delete_hottours'])->name('delete_hottours');
Route::post('/updatehottours', [App\Http\Controllers\Hottourscontroller::class, 'updatehottours'])->name('updatehottours');
Route::post('/admin/savehottours', [App\Http\Controllers\Hottourscontroller::class, 'savehottours'])->name('savehottours');
ROUTE::get('/admin/edit_hottours/{id}', [App\Http\Controllers\Hottourscontroller::class, 'edit_hottours'])->name('edit_hottours');
Route::get('/admin/delete_hottours/{id}', [App\Http\Controllers\Hottourscontroller::class, 'delete_hottours'])->name('delete_hottours');
Route::get('/admin/add_img_hottours/{id}', [App\Http\Controllers\Hottourscontroller::class, 'add_img_hottours'])->name('add_img_hottours');


Route::Post('/bookdatah' , [App\Http\Controllers\BooknowController::class, 'bookdatah'])->name('bookdatah');
Route::Post('/bookdatap' , [App\Http\Controllers\Booknow2Controller::class, 'bookdatap'])->name('bookdatap');


Route::get('/contact', 'App\Http\Controllers\contact_usController@contact_us')->name('contact');
Route::post('/sendemail/send', 'App\Http\Controllers\contact_usController@send');


Route::get('/Booknow', 'App\Http\Controllers\BooknowController@Book_now')->name('Booknow');
Route::post('/bookdatah', 'App\Http\Controllers\BooknowController@bookdatah');


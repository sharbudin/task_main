<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\productController;




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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('countries',[AuthController::class,'getCountries'])->name('countries');
Route::get('states',[AuthController::class,'getStates'])->name('states');
Route::get('cities',[AuthController::class,'getCities'])->name('cities');




Route::resource('/contact', productController::class);
Route::get('/file-import',[productController::class,'importView'])->name('import-view');
Route::post('/import',[productController::class,'import'])->name('import');
Route::get('/export-users',[productController::class,'exportUsers'])->name('export-users');
Route::get('/delete-articles', [productController::class,'trunc'])->name('trunc');

Route::get('/downloadprint', [productController::class,'print'])->name('downloadprint');







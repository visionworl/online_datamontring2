<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\registrationController;

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



Route::get('/registration', [registrationController::class, 'registration'])->name('admin.registration');
// Route::post('/store',[registrationController::class,'store'])->name('admin.store');
Route::post('/storeregistration', [registrationController::class, 'storeregistration'])->name('admin.storeregistration');
Route::get('/dashboard',[registrationController::class,'dashboard'])->name('admin.dashboard');
Route::get('/login', [registrationController::class, 'login'])->name('admin.login');
Route::get('/customer/title/{title}', [registrationController::class, 'gettitle'])->name('admin.title');
Route::post('/authenticate', [registrationController::class, 'authenticate'])->name('admin.authenticate');
Route::post('/logout', [registrationController::class, 'logout'])->name('admin.logout');



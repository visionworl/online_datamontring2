<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\registrationController;
use App\Http\Controllers\online\DataController;
use App\Http\Controllers\online\DivicedataController;



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

//---------------------------divice_details-----------------------------------------------------
Route::get('/create', [DataController::class, 'create'])->name('online.create');
Route::post('/create', [DataController::class, 'store'])->name('online.store');
Route::get('/show', [DataController::class, 'show'])->name('online.show');
Route::delete('/online/delete/{id}', [DataController::class, 'delete'])->name('online.delete');
Route::get('/edit', [DataController::class, 'editonline'])->name('online.edit');
Route::get('/edit/plan/{id}', [DataController::class, 'edit'])->name('online.edit');
Route::put('/online/update/{id}', [DataController::class, 'update'])->name('online.update');
// Route::get('/online/showdetails/{id}', [DataController::class, 'shows'])->name('online.showdetails');
Route::get('/showdetails', [DataController::class, 'shows'])->name('online.showdetails');

//---------------------------divice_data-----------------------------------------------------
Route::get('/createdata', [DivicedataController::class, 'createdata'])->name('data.createdata');
Route::post('/createstore', [DivicedataController::class, 'createstore'])->name('data.createstore');
Route::get('/showdata', [DivicedataController::class, 'showdata'])->name('data.showdata');
// Route::get('/editdata', [DivicedataController::class, 'dataedit'])->name('data.editdata');
Route::get('/edit/data/{id}', [DivicedataController::class, 'edit'])->name('data.edit');
Route::post('/data/update/{id}', [DivicedataController::class, 'update'])->name('data.update');
Route::delete('/data/delete/{id}', [DivicedataController::class, 'delete'])->name('data.delete');
// Route::get('/showdetails', [DivicedataController::class, 'shows'])->name('online.showdetails');
Route::get('/data/showdetails/{id}', [DivicedataController::class, 'shows'])->name('data.showdetails');

<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\admin\admincontroller;
>>>>>>> 5ec4adce5e10ab268ed7012b031cfd3ee2c52cb9

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
Route::get('/login', [admincontroller::class, 'login'])->name('admin.login');
>>>>>>> 5ec4adce5e10ab268ed7012b031cfd3ee2c52cb9

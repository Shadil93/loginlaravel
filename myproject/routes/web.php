<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;

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
    return view('welcome');
});

Route::get('/index',[Homecontroller::class,'index'])->name('index');
Route::get('register',[Homecontroller::class,'register'])->name('register');
Route::post('/do_regisetr',[Homecontroller::class,'do_register'])->name('do_register');
Route::get('/login',[Homecontroller::class,'login'])->name('login');
Route::post('/do_login',[Homecontroller::class,'do_login'])->name('do_name');

Route::get('/dashborad',[Homecontroller::class,'dashborad'])->name('dashborad');




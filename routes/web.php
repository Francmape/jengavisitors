<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorsController;
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

//Route::get('/login', function () {
//    return view('login');
//});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/login','login');
Route::post('/login',[UserController::class,'login']);

Route::view('/','dashboard');

Route::view('/add-visitor','add-visitor');
Route::post('/add-visitor',[VisitorsController::class,'addVisitor']);
Route::get('/visitors',[VisitorsController::class,'visitors']);

Route::view('/add-user','add-user');
Route::post('/add-user',[UserController::class,'addUser']);
Route::get('/users',[UserController::class,'users']);
Route::get('/users/remove/{id}',[UserController::class,'removeUser']);

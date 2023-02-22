<?php

//use Illuminate\Support\Facades\Route;
//Use App\Models\User;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', static function () {
//    User->find(1)->roles()->attach(1);
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/test', static function () {
    return view('test');
});

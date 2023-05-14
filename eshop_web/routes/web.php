<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\login_user;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login_user',function(){
    return view('login.login_user')->with(['title' => 'Login User Page']);
})->name('login_user');

Route::get('/register_user',function(){
    return view('register')->with(['title' => 'Registrazione Utente']);;
});

Route::get('/login_fidelity',function(){
    return view('login.login_fidelity')->with(['title' => 'Login Fidelity Page']);
});

Route::post('/dologin_user',[LoginController::class,'check_user']);

Route::post('/doregister_user',[LoginController::class,'insert']);
// Route::get('/login_fidelity',[LoginController::class,'fidelity']);

Route::get('/dashboard',function(){
    return view('dashboard.mainpage')->with(['title' => 'Main Page']);
})->name('dashboard');

Route::get('/account/profile/{page}',[AccountController::class,'show']);

Route::get('/logout',[LoginController::class,'logout']);

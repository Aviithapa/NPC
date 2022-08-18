<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\AdminController;
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
Route::get('/emails/verify/{name}/{remember_token}', [RouteController::class, 'email_verification'])->name('email_verify');


Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', function(){
        return view('auth.register');
    });
    Route::post('/register', [RouteController::class, 'register'])->name('register');
    
    Route::get('/login', [RouteController::class, 'get_login'])->name('get.login');
    Route::post('/login', [RouteController::class, 'authenticate'])->name('login');
    
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/logout', [RouteController::class, 'logout'])->name('logout');
Route::get('/dashboard/{name}', [RouteController::class, 'user_dashboard'])->name('dashboard');
Route::get('/dashboard/{name}/change_password', [RouteController::class, 'change_password_view']);
Route::get('/dashboard/{name}/change_email', [RouteController::class, 'change_email_view']);
Route::post('dashboard/{name}/change_password', [RouteController::class, 'change_password']);
Route::post('dashboard/{name}/change_email', [RouteController::class, 'change_email']);
});


    Route::group(['prefix'=>'admin'], function(){
        Route::group(['middleware'=>'guest:admin'], function(){
            Route::get('/login', [AdminController::class, 'get_login'])->name('admin.get.login');
        Route::post('/login', [AdminController::class, 'admin_auth'])->name('admin.login');
        });
    
        Route::group(['middleware'=>'auth:admin'], function(){
            Route::get('/dashboard/{name}', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
            Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        });
    });



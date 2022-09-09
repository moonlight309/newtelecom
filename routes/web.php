<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', [LoginController::class, 'getLogin'])->name('getLogin');

Route::post('/login', [LoginController::class, 'checkLogin']);

Route::middleware('auth')->group(function (){
    
    Route::prefix('users')->group(function () {
        Route::get('/home', [UserController::class,'home']);
        
        Route::get('/list', [UserController::class, 'getList'])->name('user.getList');

        Route::get('/add', [UserController::class, 'getAdd'])->name('user.getadd');
        Route::post('/add', [UserController::class, 'postAdd'])->name('user.postadd');

        Route::put('/edit/{id}', [UserController::class, 'postEdit']);

        Route::get('/delete/{id}', [UserController::class, 'delete']);
        Route::get('/listUsers', function(){
            return view('admin.users.index');
        })->name('users.listUsers')->middleware('auth');
    });

    Route::prefix('directive')->group(function (){
        Route::get('editUrs', function() {
            return view('admin.users.edit');
        });
        Route::get('headerUrs', function() {
            return view('admin.partials.header');
        });
        Route::get('slideBarUrs', function() {
            return view('admin.partials.slideBar');
        });
        Route::get('footerUrs', function() {
            return view('admin.partials.footer');
        });
    });
});


Route::get('logout', [LoginController::class, 'logout']);
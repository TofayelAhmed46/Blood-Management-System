<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\looseController;
use App\Http\Controllers\TryController;





Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
Route::get('/donar', [LoginController::class, 'donar'])->name('donarview');



Route::get('/backend', function () {
    return view('components.backend.layouts.master');
})->name('backend.home');
// Route::get('/backend/try', function () {
//     return view('');
// })->name('backend.try');

Route::get('/hi', [RoleController::class, 'try'])->name('index');


Route::group(['prefix'=>'roles','as'=>'roles.'], function(){
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('/create', [RoleController::class, 'create'])->name('create');
    Route::post('/store', [RoleController::class, 'store'])->name('store');
    Route::get('/show/{role}', [RoleController::class, 'show'])->name('show');
    Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('edit');
    Route::patch('/{role}', [RoleController::class, 'update'])->name('update');
});


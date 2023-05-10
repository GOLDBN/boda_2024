<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermisosController;


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
    return view('auth.login');
});

Route::get('/demo', function () {
    return view('Wedding.index');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/single/{code}', [App\Http\Controllers\ClientController::class, 'single'])->name('single.inv');
Route::patch('/single/update/{code}', [App\Http\Controllers\ClientController::class, 'update_single'])->name('update.inv');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('permisos', PermisosController::class);
    Route::resource('users', UserController::class);
    Route::resource('clients', ClientController::class);
});

//Route Hooks - Do not delete//
Route::view('especialists', 'livewire.especialists.index')->middleware('auth');

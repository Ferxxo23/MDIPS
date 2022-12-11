<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/projects/datatable', [ProjectController::class, 'datatable'])->name('projects.datatable');
Route::resource('projects', ProjectController::class)->only('index');


Route::resource('catalogo',CatalogoController::class);
Auth::routes();

Route::get('/home', [CatalogoController::class, 'index'])->name('home');

Route::resource('products', ProductController::class)->only(['index', 'create', 'store']);
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('categories', App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('statuses', App\Http\Controllers\StatusController::class)->middleware('auth');
Route::resource('facturas', App\Http\Controllers\FacturaController::class)->middleware('auth');
Route::resource('ordenes', App\Http\Controllers\OrdeneController::class)->middleware('auth');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('catalogos', App\Http\Controllers\CatalogoController::class)->middleware('auth');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [CatalogoController::class, 'index'])->name('home');
});


Auth::routes();

Route::get('/users2/export', [UserController::class, 'exportAllUsers'])->name('users2.export');




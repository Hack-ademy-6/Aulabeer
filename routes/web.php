<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BreweryController;
use App\Http\Controllers\ContactController;

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

 Route::get('/',  [PublicController::class, 'index'])->name('welcome'); 
 Route::get('/about', AboutController::class)->name('about'); 

//contacto
 Route::get('/contacts',  [ContactController::class, 'index'])->name('contacts');
 Route::post('/contact',  [ContactController::class, 'storeContact'])->name('contacto.store'); 
 Route::view('/contact','contact')->name("contact");


 #Route::view('/', 'welcome');

//todas las cervecerias
Route::get('/breweries',  [BreweryController::class, 'index'])->name('breweries.index');

//vista del formulario
Route::get('/breweries/create',  [BreweryController::class, 'create'])->name('breweries.create');

//creacion cerveceria
Route::post('/breweries',  [BreweryController::class, 'store'])->name('breweries.store');

//detalle de la cerveceria
Route::get('/breweries/{id}',  [BreweryController::class, 'show'])->name('breweries.show');

//editar cerveceria
Route::get('/breweries/{id}/edit',  [BreweryController::class, 'edit'])->name('breweries.edit');
Route::put('/breweries/{id}',  [BreweryController::class, 'update'])->name('breweries.update');

//eliminar cerveceria
Route::delete('/breweries/{id}',  [BreweryController::class, 'destroy'])->name('breweries.destroy');












<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BrewersController;
use App\Http\Controllers\CafesController;
use App\Http\Controllers\CoffeesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DumpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WebhookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/webhook', [WebhookController::class, 'index'])->name('webhook');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::get('/articles/show/{slug}', [ArticlesController::class, 'detail'])->name('articles.show');

Route::get('/cafes', [CafesController::class, 'index'])->name('cafes');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

Route::any('/partnership', [PartnershipController::class, 'index'])->name('partnership');

Route::get('/product-catalog', [ProductsController::class, 'index'])->name('products');;

Route::get('/product-catalog/detail/{slug}', [ProductsController::class, 'detail'])->name('product.detail');

Route::get('/product-catalog/coffees', [CoffeesController::class, 'index'])->name('coffees');
Route::get('/product-catalog/coffees/filter', [CoffeesController::class, 'filter'])->name('products.coffees.filter');

Route::get('/product-catalog/brewers', [BrewersController::class, 'index'])->name('brewers');
Route::get('/product-catalog/brewers/filter', [BrewersController::class, 'filter'])->name('products.brewers.filter');

/* DEBUGGING ONLY */
Route::get('/dump/items', [DumpController::class, 'items']);
Route::get('/dump/item/{codename}', [DumpController::class, 'item']);

Route::get('/dump/taxonomies', [DumpController::class, 'taxonomies']);
Route::get('/dump/taxonomy/{codename}', [DumpController::class, 'taxonomy']);

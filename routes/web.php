<?php

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

// Route Resource
Route::resource('/authors', App\Http\Controllers\AuthorController::class);
Route::resource('/books', App\Http\Controllers\BookController::class);
Route::resource('/catalogs',App\Http\Controllers\CatalogController::class);
Route::resource('/publishers', App\Http\Controllers\PublisherController::class);
Route::resource('/members', App\Http\Controllers\MemberController::class);
Route::resource('/transactions', App\Http\Controllers\TransactionController::class);
Route::resource('/transaction_details', App\Http\Controllers\TransactionDetailController::class);

// Routing api
Route::get('/api/authors', [App\Http\Controllers\AuthorController::class, 'api']);
Route::get('/api/publishers', [App\Http\Controllers\PublisherController::class, 'api']);
Route::get('/api/members', [App\Http\Controllers\MemberController::class, 'api']);
Route::get('/api/books', [App\Http\Controllers\BookController::class, 'api']);
Route::get('/api/transactions', [App\Http\Controllers\TransactionController::class, 'api']);
Route::get('/api/transaction_details', [App\Http\Controllers\TransactionDetailController::class, 'api']);

Route::get('/test_spatie', [App\Http\Controllers\catalogController::class, 'test_spatie']);

// Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
// Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index']);

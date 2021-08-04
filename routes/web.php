<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::get('products', [ProductController::class, 'index'])->name('products.index');
// Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
// Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::post('products', [ProductController::class, 'store'])->name('products.store');
// Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::resource('products', ProductController::class); //->middleware('auth');


Route::get('/login', function(){
    return 'Login';
})->name('login');
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\BlogController;

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

/* Route::get('/', function () {
    return view('home.home');
});
 */

 Route::get('/', [FrontController::class, 'index'])->name('home');
 Route::get('/category-products', [FrontController::class, 'categoryProducts'])->name('category-products');
 Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
 Route::post('/new-blog',[BlogController::class, 'newBlog'])->name('new-blog');
 Route::get('/manage-blog',[BlogController::class, 'manageBlog'])->name('manage-blog');
 Route::get('/delete-blog/{id}',[BlogController::class, 'deleteBlog'])->name('delete-blog');
 Route::get('/edit-blog/{id}',[BlogController::class, 'editBlog'])->name('edit-blog');
 Route::post('/update-blog',[BlogController::class, 'updateBlog'])->name('update-blog');
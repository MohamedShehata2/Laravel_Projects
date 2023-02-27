<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});


Route::get('/tabelData', [PostController::class,'getData'])->name('tabelData');
Route::get('/view/{id}',[PostController::class, 'viewpost'])->name('view');
Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/create', [PostController::class, 'create'])->name('post.create');
Route::post('/store', [PostController::class, 'store'])->name('post.store');
Route::get('/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::put('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
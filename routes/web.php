<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/inactive', function () {
    return view('inactive');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/table', [TableController::class, 'index'])->name('table');
    Route::post('/table/add', [TableController::class, 'tableAdd'])->name('AddTable');
    Route::get('/tables', [TableController::class, 'getDetails'])->name('gettableno');
    Route::get('/table/{id}', [TableController::class, 'TableDetails'])->name('tableno');
    Route::post('/table/detele', [TableController::class, 'TableDelete'])->name('del-table');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category/add', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::get('/items', [ItemController::class, 'index'])->name('items');
});
Route::get('/{name}', function ($name) {
    echo $name;
});
require __DIR__.'/auth.php';

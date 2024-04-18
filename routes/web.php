<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get(
    'items/trash/{id}',
    [itemController::class, 'trash']
)->name('items.trash')->middleware(['auth', 'verified']);

Route::get(
    'items/trashed/',
    [itemController::class, 'trashed']
)->name('items.trashed')->middleware(['auth', 'verified']);

Route::get(
    'items/restore/{id}',
    [itemController::class, 'trash']
)->name('items.restore')->middleware(['auth', 'verified']);

Route::resource('items', itemController::class)->middleware(['auth', 'verified']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');
Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');
Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
Route::get(
    '/create',
    [ItemController::class, 'create']
)->name('items.create');

});

Route::get('/', [ItemController::class, 'home'])->name('items.userindex');



require __DIR__.'/auth.php';

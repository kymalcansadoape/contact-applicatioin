<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesControlleer;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

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
Route::get('thank-you', [PagesControlleer::class, 'thankyou']);
Route::get('/add-contact', [PagesControlleer::class, 'addContact']);
Route::post('/store', [ContactController::class, 'store']);
Route::get('edit/{contact}', [PagesControlleer::class, 'edit']);
Route::put('contact/{id}', [ContactController::class, 'update']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

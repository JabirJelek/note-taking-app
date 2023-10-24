<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


use App\Http\Controllers\NoteController;

// Create a new note
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');

// List all notes
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');

// View a specific note
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');

// Edit a note
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');

require __DIR__.'/auth.php';

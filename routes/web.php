<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerController;
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


Route::get('/', function() {
    return redirect()->route('employer.index');
});

// CRUD routes pour les employés
// Route::get('/employers', [EmployerController::class, 'index'])->name('employer.index');
// Route::get('/employers/create', [EmployerController::class, 'create'])->name('employer.create');
// Route::post('/employers', [EmployerController::class, 'store'])->name('employer.store');
// Route::get('/employers/{employer}', [EmployerController::class, 'show'])->name('employer.show');
// Route::get('/employers/{employer}/edit', [EmployerController::class, 'edit'])->name('employer.edit');
// Route::put('/employers/{employer}', [EmployerController::class, 'update'])->name('employer.update');
// Route::delete('/employers/{employer}', [EmployerController::class, 'destroy'])->name('employer.destroy');
Route::resource('employer', EmployerController::class);
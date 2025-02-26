<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayBoardController;
use App\Http\Controllers\AdminController;

Auth::routes();

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('displayBoards.index');
    }
    return view('auth.login');
})->name('login');

Route::get('/displayBoards', [DisplayBoardController::class, 'index'])->name('displayBoards.index');
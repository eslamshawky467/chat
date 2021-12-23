<?php

use App\Models\Message;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('delete_chat', function () {
    Message::truncate();
    return redirect()->route('dashboard');

})->middleware(['auth'])->name('delete_chat');

require __DIR__.'/auth.php';


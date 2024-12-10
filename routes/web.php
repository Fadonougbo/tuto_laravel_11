<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get("/test/api/{user}",[ApiController::class,"index"]);

Route::get('/',[HomeController::class,'index'])->middleware(['essai:doe,19'])->name('home.home');

Route::get('/show',[HomeController::class,'show'])->middleware(['essai:gaut,1'])->name('home.show');

Route::get("/socialite",[SocialiteController::class,"index"])->name("socialite");
Route::get("/authenticated",[SocialiteController::class,"authenticated"])->name("socialite.authenticated");

Route::get("/signin",[SocialiteController::class,"signin"])->name("socialite.signin");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', function(){
    return view('register');
});
Route::get('/welcome',function(){
    return view('welcome');
})->name('welcome');
Route::post('/register',[UserController::class, 'register']);

Route::post('/logout',[UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
?>

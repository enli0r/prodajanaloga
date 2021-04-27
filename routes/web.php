<?php

use App\Events\MessageSent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Pages
Route::get('/', [PagesController::class, 'index'])->name('home');

//Register
Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',  [LoginController::class, 'store']); //Inheriting the name register

//Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


//Posts
Route::group(['prefix' => 'posts'], function(){
    Route::get('/', [PostController::class, 'index'])->name('posts');
    Route::post('/', [PostController::class, 'filter']);
    Route::get('/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
    Route::post('/create', [PostController::class, 'store']);    
    Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::get('/chat', function (){
    return view('pages.chat');
});

Route::get('/sender', function(){
    return view('pages.sender');
})->name('chat.sender');

Route::post('/sender', function(){
    $message = request()->message;


    event(new MessageSent($message));

});
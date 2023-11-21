<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [WelcomeController::class, 'welcome']);

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');


Route::get('/profile', function () {
    return view('profile',  [
    "title" => "Profile",
    "name" => "Sugiyanto",
    "image" => "user.png",
    "city" => "South Sumatera",
    "address" => "Plaju",
    "phone" => "081234567890"
    ]);
});
Route::get('/products', function()  {
    return view('products', [
        "name" => "Barang",
        "title" => "Sea Food",
        "price" => "1000"
    ]);
});

Route::get('/add-products', function()  {
    return view('add-products', [
        "title" => "Add Product",
        "name" => "Sugiyanto",
        "image" => "user.png"
    ]);
});


Route::get('/orders', function () {
    return view('orders', [
        "title" => "Order",
        "name" => "Sugiyanto",
        "image" => "user.png"
    ]);
});
Route::get('/table', function () {
    return view('table', [
        "title" => "Table",
        "name" => "Sugiyanto",
        "image" => "user.png"
    ]);
});
Route::get('/charts', function () {
    return view('charts', [
        "title" => "Chart",
        "name" => "Sugiyanto",
        "image" => "user.png"
    ]);
});

Route::get('/change-password', function () {
    return view('change-password',  [
    "title" => "Change-Password",
    "name" => "Sugiyanto",
    "image" => "user.png",
    "city" => "South Sumatera",
    "address" => "Plaju",
    "phone" => "081234567890"
    ]);
});

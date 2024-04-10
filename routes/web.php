<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookMarkController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TextBookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishListController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name("/");
Auth::routes();
Route::get('/books/search', [HomeController::class, "search"])->name('books.search');

Route::middleware("auth")->prefix("admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::resource("category", CategoryController::class);
    Route::resource("books", BookController::class);
    Route::resource("transactions", TransactionController::class);
    Route::resource("users", UserController::class);
    Route::resource("settings", SettingController::class);
    Route::resource("carts", CartController::class);
});

Route::resource("text-books", TextBookController::class);

Route::middleware("auth")->group(
    function () {
        Route::resource("bookmarks", BookMarkController::class);
        Route::resource("wishlists", WishListController::class);
    }
);

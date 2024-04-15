<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookMarkController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectBookController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentController;
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
Route::get('/project-book/{slug}', [HomeController::class, "projectBookShow"])->name("project-book");
Route::get('/project_books', [HomeController::class, "project_books"])->name("project-books");
Route::get('/books/{slug}', [HomeController::class, "books"])->name("books");

Route::middleware("auth")->prefix("admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::resource("category", CategoryController::class)->except(['create', 'show']);
    Route::resource("books", BookController::class);
    Route::resource("project-books", ProjectBookController::class);
    Route::resource("transactions", TransactionController::class);
    Route::resource("users", UserController::class);
    Route::resource("settings", SettingController::class);
    Route::resource("carts", CartController::class)->except(['create', 'show', 'edit', 'update']);
});

Route::resource("text-books", TextBookController::class);

Route::middleware("auth")->group(
    function () {
        Route::resource("bookmarks", BookMarkController::class)->except(['create', 'show', 'edit', 'update']);
        Route::resource("wishlists", WishListController::class)->except(['create', 'show', 'edit', 'update']);
        Route::resource("student", StudentController::class)->except([
            'index',
            'create',
            'store',
            "destroy"
        ]);;
        Route::get("/change-password", [ChangePasswordController::class, "index"])->name("change-password");
        Route::put("/change-password", [ChangePasswordController::class, "update"])->name("change-password");
    }
);

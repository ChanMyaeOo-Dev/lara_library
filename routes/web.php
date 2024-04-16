<?php

use App\Http\Controllers\BannerController;
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

Route::fallback(function () {
    return view('error.error_404');
});

Auth::routes();
// Public Routes
Route::get('/', [HomeController::class, 'index'])->name("/");
Route::get('/books/search', [HomeController::class, "search"])->name('books.search');
Route::get('/book/{slug}', [HomeController::class, "bookShow"])->name("book");
Route::get('/project-book/{slug}', [HomeController::class, "projectBookShow"])->name("project-book");
Route::get('/project_books', [HomeController::class, "project_books"])->name("project-books");
Route::get('/books/{slug}', [HomeController::class, "books"])->name("books");
Route::get('/banner_detail/{id}', [HomeController::class, "banner_detail"])->name("banner_detail");

// Admin Auth Routes
Route::middleware("auth")->prefix("admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::resource("category", CategoryController::class)->except(['create', 'show']);
    Route::resource("books", BookController::class);
    Route::resource("project-books", ProjectBookController::class);
    Route::resource("transactions", TransactionController::class);
    Route::resource("users", UserController::class);
    Route::resource("settings", SettingController::class);
    Route::resource("banners", BannerController::class);
    Route::resource("carts", CartController::class)->except(['create', 'show', 'edit', 'update']);
});

// Client Auth Routes
Route::middleware("auth")->group(
    function () {
        // BookMark
        Route::get("/bookmarks", [BookMarkController::class, "index"])->name("bookmarks.index");
        Route::post("/bookmarks", [BookMarkController::class, "store"])->name("bookmarks.store");
        Route::delete("/bookmarks/{id}", [BookMarkController::class, "destroy"])->name("bookmarks.destroy");

        // WishList
        Route::get("/wishlists", [WishListController::class, "index"])->name("wishlists.index");
        Route::post("/wishlists", [WishListController::class, "store"])->name("wishlists.store");
        Route::delete("/wishlists/{id}", [WishListController::class, "destroy"])->name("wishlists.destroy");

        // Student
        Route::get("/student/{roll_number}", [StudentController::class, "show"])->name("student.show");
        Route::get("/student-edit/{roll_number}", [StudentController::class, "edit"])->name("student.edit");
        Route::put("/student", [StudentController::class, "update"])->name("student.update");

        // User
        Route::get("/change-password", [ChangePasswordController::class, "index"])->name("change-password");
        Route::put("/change-password", [ChangePasswordController::class, "update"])->name("change-password");
    }
);

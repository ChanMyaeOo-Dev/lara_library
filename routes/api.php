<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\BookApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("register", [ApiAuthController::class, "register"])->name("register");
Route::post("login", [ApiAuthController::class, "login"])->name("login");

Route::middleware("auth:sanctum")->group(function () {
    Route::post("logout", [ApiAuthController::class, "logout"])->name("logout");
    Route::post("logout-all", [ApiAuthController::class, "logoutAll"])->name("logout-all");
    Route::get("tokens", [ApiAuthController::class, "tokens"])->name("tokens");

    Route::apiResource("books", BookApiController::class);
});

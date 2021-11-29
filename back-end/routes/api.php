<?php

use App\Http\Controllers\bookController;
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



Route::get("/allBook", [bookController::class, "allBook"]);

Route::post("/insertBook", [bookController::class, "insertBook"]);

Route::delete("/deleteBook/{id}", [bookController::class, "deleteBook"]);

Route::put("/modifica/{id}",[bookController::class, "modifica"]);
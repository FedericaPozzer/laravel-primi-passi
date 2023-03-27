<?php

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

Route::get("/", function () {
    $pages = ["Page 1", "Page 2", "Page 3", "Page 4", "Page 5", "Page 6", "Page 7"];


    return view("home", compact("pages"));
});

Route::get("/pages/{index}", function ($index) {

    $pages = ["Page 1", "Page 2", "Page 3", "Page 4", "Page 5", "Page 6", "Page 7"];

    $page = $pages[$index];

    return view("pages.page", compact("page"));
})->name("page-details");
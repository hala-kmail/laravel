<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages/welcome');
});

Route::view("hay","pages/hala",[
    "name"=>'hala',
    "age"=>'23'
]);
Route::get('page2', function () {
    return view('pages/page2');
})->name("go-to-page2-page");

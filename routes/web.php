<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('welcome');
});
Route::get('index', [IndexController::class, 'showIndex']);


Route::group(["prefix"=>"Kidder","as"=>"Kidder."],function(){

    Route::get('/', [IndexController::class, 'showIndex'])->name("index");

    Route::get('About', [IndexController::class, 'showAbout'])->name("About");

});

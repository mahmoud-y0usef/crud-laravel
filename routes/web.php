<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerControllers;
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

Route::get('/', [StaticController::class, 'index']) -> name('index');
Route::get('/about', [StaticController::class, 'about']) -> name('about');
Route::get('/contact', [StaticController::class, 'contact']) -> name('contact');
Route::resource('computers', ComputerControllers::class);

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/store', function () {
//     $filter = request('style');
//     if ($filter){
//         return view('store', [
//             'filter' => strip_tags($filter)
//         ]);
//     }
//     return view('store');
// });


// Route::get('/store/{style?}', function ($style=null) {
//     if ($style){
//         return view('store', [
//             'style' => strip_tags($style)
//         ]);
//     }
//     return view('store');
// });
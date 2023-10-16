<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
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

// Route::get('/', function() {
//     echo "Selamat Datang";
// });

// Route::get('/about', function(){
//     echo "2213090 Bagus Fary Ananta";
// });

// Route::get('/article/{id}', function($id){
//     echo "Halaman artikel dengan id " . $id;
// });


Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/article/{id}', [PageController::class, 'articles']);

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


Route::middleware(['auth','verified'])->as('user.')->group(function () {
 
    Route::get('',[HomeController::class,'index'])->name('home');
    Route::get('/about',[AboutController::class,'index'])->name('about');

  
});

require __DIR__.'/auth.php';

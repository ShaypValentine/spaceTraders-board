<?php

use App\Http\Controllers\DashboardController;
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
    if(session('token') != null){
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('/welcome');

Route::get("/dashboard", [DashboardController::class, 'show'])->name('show');
Route::post("/login",[DashboardController::class, 'handleFormSubmit'])->name('handleFormSubmit');
Route::get("/dashboard",[DashboardController::class, 'dashboard'])->name('dashboard');
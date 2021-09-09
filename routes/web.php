<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\UniquePlantController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'plants'], function () {
    Route::get('', [PlantController::class, 'index'])->name('plant.index');
    Route::get('create', [PlantController::class, 'create'])->name('plant.create');
    Route::post('store', [PlantController::class, 'store'])->name('plant.store');
    Route::get('edit/{plant}', [PlantController::class, 'edit'])->name('plant.edit');
    Route::post('update/{plant}', [PlantController::class, 'update'])->name('plant.update');
    Route::post('delete/{plant}', [PlantController::class, 'destroy'])->name('plant.destroy');
    Route::get('show/{plant}', [PlantController::class, 'show'])->name('plant.show');
});

Route::group(['prefix' => 'uniquePlants'], function () {
    Route::get('', [UniquePlantController::class, 'index'])->name('uniquePlant.index');
    Route::get('create', [UniquePlantController::class, 'create'])->name('uniquePlant.create');
    Route::post('store', [UniquePlantController::class, 'store'])->name('uniquePlant.store');
    Route::get('edit/{uniquePlant}', [UniquePlantController::class, 'edit'])->name('uniquePlant.edit');
    Route::post('update/{uniquePlant}', [UniquePlantController::class, 'update'])->name('uniquePlant.update');
    Route::post('delete/{uniquePlant}', [UniquePlantController::class, 'destroy'])->name('uniquePlant.destroy');
    Route::get('show/{uniquePlant}', [UniquePlantController::class, 'show'])->name('uniquePlant.show');
});

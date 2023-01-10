<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\RideController;
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
/*Route::get('/',function (){
    return view('');
});*/

Route::middleware([
    'auth:sanctum',
    'verified'
])->get('/',function (){
        return view('dashboard');
    })->name('dashboard');

    /*Route::middleware([
        'auth:sanctum',
        'verified'
    ])->get('/cars',function (){
            return view('cars.index');
        })->name('cars');*/
//-------------------------ROUTES FOR CARS------------------------------
Route::middleware(['auth:sanctum','verified'])->get('cars',[CarController::class, 'index'])->name('cars'); 
Route::middleware(['auth:sanctum','verified'])->get('add_car',[CarController::class, 'create'])->name('add_car');
Route::middleware(['auth:sanctum','verified'])->post('store_car',[CarController::class, 'store'])->name('store_car');
Route::middleware(['auth:sanctum','verified'])->post('delete_car',[CarController::class, 'delete'])->name('delete_car');
Route::middleware(['auth:sanctum','verified'])->post('edit_car',[CarController::class, 'edit'])->name('edit_car');   
Route::middleware(['auth:sanctum','verified'])->post('update_car',[CarController::class, 'update'])->name('update_car');   
//------------------------ROUTES FOR BRANDS-----------------------------
Route::middleware(['auth:sanctum','verified'])->get('brands',[BrandsController::class, 'index'])->name('brands');
Route::middleware(['auth:sanctum','verified'])->get('add_brand',[BrandsController::class, 'create'])->name('add_brand'); 
Route::middleware(['auth:sanctum','verified'])->post('store_brand',[BrandsController::class, 'store'])->name('store_brand');

Route::middleware(['auth:sanctum','verified'])->get('rides',[RideController::class, 'index'])->name('rides'); 


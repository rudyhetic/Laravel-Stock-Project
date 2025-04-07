<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddproductController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Addprofil;

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

// Route page d'accueil

Route::get('/', [AddproductController::class, 'welcome_index'])->name('welcome');


// Route page profils

Route::get('/profil', [AddproductController::class, 'profil_index']);

Route::get('/register', [AddproductController::class, 'register_index']);

Route::post('/register', [AddproductController::class, 'register_new_profil']);


// Route page product

Route::post('/update/traitement', [AddproductController::class, 'update_product_traitement']);

Route::get('/update-product/{id}', [AddproductController::class, 'update_product']);

Route::get('/delete-product/{id}', [AddproductController::class, 'delete_product']);

Route::get('/registerproduct', [AddproductController::class, 'registerproduct_index']);

Route::post('/registerproduct', [AddproductController::class, 'register_new_product']);







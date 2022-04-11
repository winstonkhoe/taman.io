<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\GardenOfferController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ServiceController::class, 'index']);
Route::get('/design/{id}', [DesignController::class, 'index']);
Route::post('/design/{id}', [DesignController::class, 'checkout']);
Route::get('/service/{id}', [ServiceController::class, 'detail']);
Route::post('/service/{id}', [ServiceController::class, 'checkout']);

Route::get('/add-design', [DesignController::class, 'addPage']);
Route::post('/add-design', [DesignController::class, 'add']);

Route::get('/add-service', [ServiceController::class, 'addPage']);
Route::post('/add-service', [ServiceController::class, 'add']);
Route::get('/manage-services', [ServiceController::class, 'managePage']);
Route::get('/update-service/{id}', [ServiceController::class, 'updatePage']);
Route::post('/update-service/{id}', [ServiceController::class, 'update']);

Route::get('/seller', [SellerController::class, 'index']);
Route::get('/seller/edit-profile', [SellerController::class, 'profile']);
Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/artist/edit-profile', [ArtistController::class, 'profile']);
Route::post('/artist/edit-profile', [ArtistController::class, 'update']);

Route::get('/contractor/join/design/{id}', [GardenOfferController::class, 'add']);
Route::get('/contractor/quit/design/{id}', [GardenOfferController::class, 'remove']);


Route::get('/register/artist', [ArtistController::class, 'registerPage']);
Route::post('/register/artist', [ArtistController::class, 'add']);

Route::get('/register/seller', [SellerController::class, 'registerPage']);
Route::post('/register/seller', [SellerController::class, 'add']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registration']);
Route::get('/transactions', [UserController::class, 'transaction']);
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

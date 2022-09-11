<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function(){
    return 'Welcome!';
});

////////////////////////////////////////////USER ENDPOINTS\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(["middleware" => "jwt.auth"] , function() {
    Route::get('/profile', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']); 
});

////////////////////////////////////////////PRODUCT ENDPOINTS\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::group(["middleware" => ["jwt.auth", "isSuperAdmin"]] , function() {
    Route::post('/create_product', [ProductController::class, 'createProduct']);
    Route::delete('/delete_product/{id}', [ProductController::class, 'deleteProductById']);
    Route::put('/update_product/{id}', [ProductController::class, 'modifyProductById']);
});

Route::get('/get_all_products', [ProductController::class, 'getAllProducts']);
Route::get('/product_by_title/{title}', [ProductController::class, 'getProductByName']);

////////////////////////////////////////////TYPE ENDPOINTS\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::group(["middleware" => ["jwt.auth", "isSuperAdmin"]] , function() {
    Route::post('/create_Type', [TypeController::class, 'createType']);
    Route::delete('/delete_Type/{id}', [TypeController::class, 'deleteTypeById']);
    Route::put('/update_Type/{id}', [TypeController::class, 'modifyTypeById']);
});

Route::get('/get_all_Types', [TypeController::class, 'getAllTypes']);

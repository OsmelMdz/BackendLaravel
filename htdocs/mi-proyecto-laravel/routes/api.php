<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::apiResource('products',ProductController::class);*/

/**Ruta para Obtener los productos */
Route::get('productos',[ProductController::class,'getProducts']);
/**Ruta para Agregar un producto */
Route::post('newProduct',[ProductController::class,'postProduct']);
/**Ruta para Buscar un producto por id */
Route::get('products/{id}',[ProductController::class,'getProductId']);
/**Ruta para Editar un producto */
Route::put('editProduct/{id}',[ProductController::class,'putProduct']);
/**Ruta para Eliminar un producto */
Route::put('product/{id}',[ProductController::class,'deleteProduct']);



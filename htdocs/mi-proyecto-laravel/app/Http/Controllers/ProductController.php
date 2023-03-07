<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Metodos
    public function getProducts(){
        return response()->json(Product::all(),200);
    }
    public function postProduct(Request $request){
        $product=Product::create($request->all());
        return response($product,201);
    }
    public function getProductId($id){
        $product=Product::find($id);
        if(is_null($product)){
            return response()->json(['mensaje'=>'Producto no encontrado'],404);
        }
        return response()->json($product,200);
    }

    public function putProduct(Request $request, $id){
        $product=Product::find($id);
        if(is_null($product)){
            return response()->json(['mensaje'=>'Producto no encontrado'],404);
        }
        $product->updated($request->all());
        return response($product,201);
    }

    public function deleteProduct($id){
        $product=Product::find($id);
        if(is_null($product)){
            return response()->json(['message'=>'Producto no encontrado'],404);
        }
        $product->delete();
        return response(null,201);
    }

}

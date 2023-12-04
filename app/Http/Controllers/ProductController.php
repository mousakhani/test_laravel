<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_products = Product::all();
        return response()->json(['data'=>$all_products], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($product_id)
    {
        $current_product = Product::query()->findOrFail($product_id);
        return response()->json(['data'=>$current_product],200);

    }


}

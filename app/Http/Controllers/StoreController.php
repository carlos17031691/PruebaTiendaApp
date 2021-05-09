<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{
    function index(){
        $products = Product::All();
        return view('store', compact('products'));
    }
}

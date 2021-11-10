<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AllProducts extends Controller
{
   public function index(){
    $products = Product::all();
    return view('allproducts',compact('products'));
   }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;

class AllProducts extends Controller
{
   public function index(){
    $products = Product::all();
    $cats = Cat::all();
    return view('allproducts',compact('products','cats'));
   }
   public function show($id){
    $catproducts = Cat::find($id);
    return view('allcatproducts',compact('catproducts'));
   }
   public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

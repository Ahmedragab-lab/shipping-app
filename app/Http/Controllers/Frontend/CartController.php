<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function addtocart(Request $request)
    {
        dd($request);
        $prod_id  = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');

        if(Auth::check()){
          $s = Product::where('id',$prod_id)->first();
          if($s){
              if(Cart::where('product_id',$prod_id)->where('user_id',Auth::id())){
                return response()->json(['status'=>$s->product_name . "Already Added to cart "]);
              }else{
                  $cart = new Cart();
                  $cart->user_id = Auth::id();
                  $cart->product_id =$prod_id;
                  $cart->product_qty = $prod_qty;
                  $cart->save();
                  return response()->json(['status'=>$s->product_name . "Added to cart "]);
              }
          }
        }else{
            return response()->json(['status'=>"Login to continue"]);
        }
    }
}

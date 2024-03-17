<?php

namespace App\Http\Controllers\front;
use App\Models\cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ordercontroller extends Controller
{
    //
    public function addtocart(product $product ,Request $request){

        $oldcart=$request->session()->has("cart")? $request->session()->get("cart"):null;
        $cart=new cart($oldcart);
        $cart->addtocart($product);
        $request->session()->put("cart",$cart);
        return back();


    }
    public function cartshow(Request $request){

        $oldcart=$request->session()->has("cart")? $request->session()->get("cart"):null;
       
        return view("front.cart");
       
    }
}

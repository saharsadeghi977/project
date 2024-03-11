<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\cart;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $products = product::orderBy('id', 'DESC')->where('status', 1)->paginate(2);
        $oldcart=$request->session()->has("cart")? $request->session()->get("cart"):null;
        $cart=new cart($oldcart);
        return view('front.index', compact('products','cart'));
    }


    public function show(product $product, Request $request)
    {
        $oldcart=$request->session()->has("cart")? $request->session()->get("cart"):null;
        $cart=new cart($oldcart);
       
        return view('front.productDetail',compact('product','cart'));
    }
}

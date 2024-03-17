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
        $products = product::orderBy('id', 'DESC')->paginate(3);
        $oldcart=$request->session()->has("cart")? $request->session()->get("cart"):null;
      ;
        return view('front.index', compact('products','oldcart'));
    }


    public function show(product $product, Request $request)
    {
        $oldcart=$request->session()->has("cart")? $request->session()->get("cart"):null;
      
       
        return view('front.productDetail',compact('product','oldcart'));
    }
    public function cartshow(){

        
       
        return view("front.cart");
       
    }

    public function addTocart($id){

        $product=product::findOrfail($id);
        $cart=session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['count']++;



        }
        else{
            $cart[$id]=[
                "title"=>$product->title,
                "image"=>$product->image,
                "price"=>$product->price,
                "count"=>1
            ];

        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','product add to cart successfully');

    }
    public function remove(Request $request){
        if($request->id){
            $cart=session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success','product successfuly removed');
        }
    }
    public function update(Request $request){
        if($request->id && $request->count){
            $cart=session()->get('cart');
            $cart[$request->id]['count']=$request->count;
            session()->put('cart',$cart);
            session()->flash('success','cart successfuly updated');
        }
    }

  
}

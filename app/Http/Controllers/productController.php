<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Session;


class productController extends Controller
{
    public function products(){
        $products=DB::table('products')->get();

        return view('welcome',['products'=>$products]);
    }
    public function cart(){
        return view('cart');
    }
    public function about(){
        return view('about');
    }
    public function addcart($id){
        $cart=Session::get('cart',[]);
        $products= product::find($id);
        $cart[$id]=[
            'id'=>$id,
            'images'=>$products->images,
            'title'=>$products->title,
            'price'=>$products->price,
            'quantity'=>1
        ];
        // dd($cart);
        Session::put('cart',$cart);
            Session::flash('massage','product added to cart successfully');
            return back();
    }
    public function removeitems($id){
        $cart= Session::get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
        }
        Session::put('cart',$cart);
        return back()->with("massage","item remove from your cart");

    }
}

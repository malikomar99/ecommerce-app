<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Orderitems;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Str;


class AdminController extends Controller
{
    public function addproduct_form(){
        return view ('admin/addproduct');
    }
   
    public function addproduct(Request $request){
        $request->validate([
            'images'=>['required','mimes:png,jpg,jpeg'],
            'title'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
            'description'=>'required',
        ]);
        $filepath="";
        if ($request->hasfile('images')) {
           $file= $request->file('images');
           $fileExt=$file->getclientoriginalExtension();
           $filename=$file->getclientoriginalname();
           $newname=$filename.'-'.str::random(10).'.'.$fileExt;
           $file->move(public_path('/assets/images'),$newname);
           $filepath="/assets/images/$newname";
        }
        $product= new product();
        $product->images=$filepath;
        $product->title=$request->title;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->description=$request->description;
        $product->save();

        return redirect()->route('addproduct')->with('success', 'Product added successfully');   
    }
    public function orderitems(){
        $orderitems=DB::table('Orderitems')->get();
        return view ('admin/orderitems',['orderitems'=>$orderitems]);
    }
    public function products(){
        $products=DB::table('products')->get();
        // return $products;
        return view('admin/products',['products'=>$products]);
    }
    public function editproduct($id){
        // $product=product::find($id);
        // dd('$product');
        // return view ('editproduct',['product'=>$product]);
        $product= product::find($id);
        $data['product'] =$product;
        // dd('$product');
        return view('admin/editproduct', $data);
    }
    public function updateproduct(Request $req){
        $product=product::find($req->id);
        // return $product;
        $product->title=$req->title;
        $product->description=$req->description;
        $product->price=$req->price;
        $product->quantity=$req->quantity;
        $product->save();
       

        session()->flash("massage", "user update successfully");
        return redirect()-> route("admin/products");
    }
    public function deleteproduct($id){
        product::find($id)->delete();
        return back()->with("massage","user remove succcessfully");

}
   public function dashboard(){
    $users= User::get();
        $data['users'] =$users;
        return view('admin/dashboard', $data);
    // return view ('admin/dashboard');
   }
   public function customers(){
    $cust=Db::table('orders')->get();
    return view ('admin/customers',['cust'=>$cust]);
   }
   public function sellingproducts(){
    return view ('admin/dashboard');
   }
   public function edituser($id){
    $users= User::find($id);
    $data['users'] =$users;
    return view('admin\edituser', $data);
    // return view ('admin/edituser');
   }

   public function updateuser(Request $req){
   $user= user::find($req->id);
//    dd($user);
   $user->name=$req->name;
   $user->email=$req->email;
   $user->type=$req->type;
   $user->password=$req->password;
   $user->save();

   session()->flash("massage", "user update successfully");
   return redirect()-> route("admin/dashboard");
    
   }
   public function deleteuser($id){
    // user::find($id)->delete();
    // return view ('admin/deleteuser');
    user::find($id)->delete();
    return back()->with("massage","user remove succcessfully");
   }
  
}
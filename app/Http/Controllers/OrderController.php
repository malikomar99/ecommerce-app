<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderitems;
use App\Models\Order;
use Auth;
use stripe;
use Session;
class OrderController extends Controller
{
    public function checkout(){
        return view('checkout');
    }
    // public function process_order(Request $req)
    // {

    //     // Set your secret key. Remember to switch to your live secret key in production.
    //     // See your keys here: https://dashboard.stripe.com/apikeys
    //     \Stripe\Stripe::setApiKey(env('SK_STRIPE'));
    //     // Token is created using Stripe Checkout or Elements!
    //     // Get the payment token ID submitted by the form:
    //     try {
    //         $charge = \Stripe\Charge::create([
               
    //             'amount' => 1 * 100,
    //             'currency' => 'usd',
    //             'description' => 'Charg for one dollar from 2nd batch 2nd',
    //             'source' => $req->stripeToken,
    //         ]);
    //         // dd($charge);
    //         $cart=Session::get('cart',[]);
        
    //         $order= new order;
    //         $order->firstname=isset($req->firstname)?$req->firstname:'';
    //         $order->lastname=isset($req->lastname)?$req->lastname:'';
    //         $order->email=isset($req->email)?$req->email:'';
    //         $order->adress=isset($req->adress)?$req->adress:'';
    //         $order->phoneno=isset($req->phoneno)?$req->phoneno:'';
    //         $order->country=isset($req->country)?$req->country:'';
    //         $order->state=isset($req->state)?$req->state:'';
    //         $order->zipcod=isset($req->zipcod)?$req->zipcod:'';
    //         $order->userid=(Auth::user())?Auth::user()->id:0;
    //         $order->total = 1;
    //         $order->charge_id = $charge->id;
    //         $order->trx_id = $charge->balance_transaction;
    //         $order->payment_type = ($req->payment_type == "card") ? "card" : "cod";
    //         $order->save();

    //         foreach ($cart as $key => $value) {
    //             orderitem::insert([
    //                 "order_id"=> $order->id,
    //                 "item_id"=>$value['id'],
    //                 "quantity"=>$value['quantity'],
    //                 "sub_total" => $value['price'],
    //                 "total" => $value['price'] * $value['quantity'],
    //             ]); 
    //         }
    //         // or checkout py apka session ja rha hona cart wala 
    //         return redirect(route('thankyou'));

    //     } catch (\Throwable $th) {
    //         return($th->getMessage());
    //     }

        
    // }
    public function sellingproducts(){
        // return 123;
  $order=Order::with('contact')->get();
// $order=Orderitems::all();
    // return $order;
     return view ('admin/sellingproduct',['order'=>$order]);
    }
    public function order(Request $req){
        // Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey(env('SK_STRIPE'));

// Token is created using Stripe Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
$charge = \Stripe\Charge::create([
  'amount' => 1*100,
  'currency' => 'usd',
  'description' => 'second charge',
  'source' => $req->stripeToken,
]);
$cart=Session::get('cart',[]);
// dd($cart);

            $order= new order;
            $order->firstname=isset($req->firstname)?$req->firstname:'';
            $order->email=isset($req->email)?$req->email:'';
            $order->adress=isset($req->adress)?$req->adress:'';
            $order->phoneno=isset($req->phoneno)?$req->phoneno:'';
            $order->country=isset($req->country)?$req->country:'';
            $order->city=isset($req->city)?$req->city:'';
            $order->zipcod=isset($req->zipcod)?$req->zipcod:'';
            $order->userid=(Auth::user())?Auth::user()->id:0;
            $order->total = 1;
            $order->charge_id = $charge->id;
            $order->trx_id = $charge->balance_transaction;
            $order->payment_type = ($req->payment_type == "card") ? "card" : "cod";
            $order->save();
            foreach ($cart as $key => $value) {
                orderitems::insert([
                    "order_id"=> $order->id,
                    "item_id"=>$value['id'],
                    "quantity"=>$value['quantity'],
                    "sub_total" => $value['price'],
                    "total" => $value['price'] * $value['quantity'],
                ]); 
            }
            return redirect(route('welcome'));
    }
}

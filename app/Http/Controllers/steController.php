<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\order;
use App\Models\User;
use App\Models\orderitem;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use Psy\CodeCleaner\FinalClassPass;


class checkoutController extends Controller
{
    //

    public function index()
    {
        $cartitems=cart::where('user_id',Auth::id())->get();
        return view('products.checkout',compact('cartitems'));
    }

    public function placeorder(Request $request){
     $order=new order();
     $order->user_id=Auth::id();
     $order->fname=$request->input('fname');
     $order->lname=$request->input('lname');
     $order->email=$request->input('email');
     $order->phone=$request->input('phone');
     $order->address=$request->input('address');
     $order->city=$request->input('city');
     $order->country=$request->input('country');
     $order->pincode=$request->input('pincode');

     $order->payment_mode=$request->input('payment_mode');
     $order->payment_id=$request->input('payment_id');

     

     $total=0;
     $cartitems_total=cart::where('user_id',Auth::id())->get();
     foreach($cartitems_total as $prod){
   
        $total +=$prod->products->price * $prod->prod_qty;
     }

      $order->total_price = $total;
     $order->tracking_no='gege'.rand(1111,9999);
     $order->save();
    
     $cartitems=cart::where('user_id',Auth::id())->get();
     
     foreach($cartitems as $item){
        orderitem::create([
            'order_id'=> $order->id,
            'prod_id'=>$item->prod_id,
            'qty'=>$item->prod_qty,
            'price'=>$item->products->price,
        ]);

        // $prod=product::where('id' , $item->prod_id)->first();
        // $prod->qty = $prod->qty - $item->prod_qty;
        // $prod->update();
    }

     if (Auth::user()->address==NULL){

        $user = User::where('id' , Auth::id())->first();
        $user ->name=$request->input('fname');
        $user->lname=$request->input('lname');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        $user->address=$request->input('address');
        $user->city=$request->input('city');
        $user->country=$request->input('country');
        $user->pincode=$request->input('pincode');

        $order->payment_mode=$request->input('payment_mode');
        $order->payment_id=$request->input('payment_id');
        
        $user->update();
     }

     $cartitems=cart::where('user_id',Auth::id())->get();
     cart::destroy($cartitems);
   
   if($request->input('payment_mode') =="Paid by Razorpay" || $request->input('payment_mode') =="Paid by paypal"){
    return response()->jason(['status'=>"Order Placed Successfully"]);
   }
     return redirect('/')->with('status',"Order Placed Successfully");
   
    }
    

    public function pay(Request $request){
        $cartitem=cart::where('user_id',Auth::id())->get();
       $total_price = 0;
        foreach($cartitem as $item){
            $total_price += $item->products->price * $item->prod_qty;

        }
        
$fname = $request->input('fname'); 
$lname = $request->input('lname');
$email=$request->input('email');
$phone=$request->input('phone');
$address = $request->input('address');

$city=$request->input('city');

$country=$request->input('country');
$pincode=$request->input('pincode');

$payment_mode=$request->input('payment_mode');
$payment_id=$request->input('payment_id');


return response()->json([ 
    'fname' => $fname,

'lname' => $lname, 
'email' => $email,
'phone' => $phone,
'address' => $address,

'city' => $city,

'country' => $country, 
'pincode' => $pincode,
'total_price' => $total_price,
'payment_mode'=>$payment_mode,
'payment_id'=>$payment_id,

]);
    }


    
}




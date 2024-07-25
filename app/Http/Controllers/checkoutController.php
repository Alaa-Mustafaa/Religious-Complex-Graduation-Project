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
        $user_id=session()->get('user_id');

        $cartitems=cart::where('user_id',$user_id)->get();
        $user=User::where('id',$user_id)->first();

        return view('products.checkout')->with('cartitems',$cartitems)->with('user',$user);
    }

    public function placeorder(Request $request){
        $user_id=session()->get('user_id');
        $userr=User::where('id',$user_id)->first();


     $order=new order();
     $order->user_id=$user_id;
     $order->name=$request->input('name');
     $order->email=$request->input('email');
     $order->phone=$request->input('phone');
     $order->address=$request->input('address');
     $order->city=$request->input('city');
     $order->country=$request->input('country');
     $order->pincode=$request->input('pincode');


     

     $total=0;
     $cartitems_total=cart::where('user_id',$user_id)->get();
     foreach($cartitems_total as $prod){
   
        $total +=$prod->products->price * $prod->prod_qty;
     }

      $order->total_price = $total;
     $order->tracking_no='gege'.rand(1111,9999);
     $order->save();
    
     $cartitems=cart::where('user_id',$user_id)->get();
     
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

     if ($userr->address==NULL){
        $user_id=session()->get('user_id');

        $user = User::where('id' , $user_id)->first();
        $user ->name=$request->input('name');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        $user->address=$request->input('address');
        $user->city=$request->input('city');
        $user->country=$request->input('country');
        $user->pincode=$request->input('pincode');
        $user->update();
     }

     $cartitems=cart::where('user_id',$user_id)->get();
     cart::destroy($cartitems);
   
   
     return redirect("products")->with('status',"Order Placed Successfully");
   
    }
    

    public function pay(Request $request){
        $user_id=session()->get('user_id');

        $cartitem=cart::where('user_id',$user_id)->get();
       $total_price = 0;
        foreach($cartitem as $item){
            $total_price += $item->products->price * $item->prod_qty;

        }
        
$name = $request->input('name'); 
$email=$request->input('email');
$phone=$request->input('phone');
$address = $request->input('address');

$city=$request->input('city');

$country=$request->input('country');
$pincode=$request->input('pincode');



return response()->json([ 
'name' => $name,
'email' => $email,
'phone' => $phone,
'address' => $address,

'city' => $city,

'country' => $country, 
'pincode' => $pincode,
'total_price' => $total_price,
]);
    }





}




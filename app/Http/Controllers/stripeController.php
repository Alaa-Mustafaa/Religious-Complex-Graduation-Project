<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\order;
use App\Models\User;
use App\Models\orderitem;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class stripeController extends Controller
{
    public function  session(Request $request){


        
        \Stripe\Stripe::setApiKey (config('stripe.sk'));
        $productname = $request->get('productname'); 
        $totalprice = $request->get('total');
         $two0 = "00";
        $total = "$totalprice$two0";
        
        $session= \Stripe\Checkout\Session::create([
        'line_items' => [
        [
        'price_data' => [
        'currency' => 'USD',
        'product_data' => [
            "name" => $productname,
        ],
        'unit_amount' => $total,
        ],
        
        
        'quantity' => 1,
        ],
        ],
        
        
        'mode' => 'payment',
        'success_url' => route('success'), 
        'cancel_url' => route('checkout'),
        ]);
        return redirect() ->away ($session->url);
        
            }
        
            public function success(){
                return "hgdhscfygdcv";
            }
}

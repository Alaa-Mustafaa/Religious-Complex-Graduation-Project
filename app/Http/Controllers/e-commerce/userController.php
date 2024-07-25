<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\wishlist;
use App\Models\User;
use App\Models\orderitem;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    //

    public function index(){

        $orders=order::where('user_id',Auth::id())->get();
        return view('products.order',compact('orders'));
    }

    public function vieworder($id)  {
        $orders=order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('products.vieworder',compact('orders')); 
    }

  
}

<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class cartController extends Controller
{
    //

    public function addcart(Request $request){
        $user_id=session()->get('user_id');

       $product_id=$request->input('product_id');
       $product_qty=$request->input('product_qty');

       if($user_id !== null){
        $prod_check=product::where ('id',$product_id)->first();
if($prod_check){
    if(cart::where('prod_id',$product_id)->where('user_id',$user_id)->exists())
    {
        return response()->json(['status'=>$prod_check->name. "Already Added to Cart"]);
    }

    else{
        $cartitem=new cart();
        $cartitem->prod_id=$product_id;
        $cartitem->user_id=$user_id;
        $cartitem->prod_qty=$product_qty;
        $cartitem->save();
        return response()->json(['status'=>$prod_check->name. "Added to Cart"]);
    }
           }
    }
 
       else{
        return response()->json(['status'=>"Login to continue"]);
       }
    }

    public function viewcart(){
        $user_id=session()->get('user_id');

        $cartitem=cart::where('user_id',$user_id)->get();
        return view('products.cart',compact('cartitem'));
    }

    public function deletecart(Request $request){
        $user_id=session()->get('user_id');

        if($user_id !== null){

        $pro_id=$request->input('prod_id');
        if(cart::where('prod_id',$pro_id)->where('user_id',$user_id)->exists())
        {
           $cartitem=cart::where('prod_id',$pro_id)->where('user_id',$user_id)->first();
           $cartitem->delete();
           return response()->json(['status'=>"product deleted successfully"]);
        }
        }
        else{
            return response()->json(['status'=>"Login to continue"]);
           }
    }

    public function updatecart(Request $request){
        $user_id=session()->get('user_id');

        $prod_id=$request->input('prod_id');
        $product_qty=$request->input('prod_qty');

        if($user_id !== null){
            if(cart::where('prod_id',$prod_id)->where('user_id',$user_id)->exists())
            {
                $cart =cart::where('prod_id',$prod_id)->where('user_id',$user_id)->first();
                $cart ->prod_qty =$product_qty;
                $cart->update();
                return response()->json(['status'=>"Quantity Updated"]);
            }

        }
       
    }

    public function count(){
        $user_id=session()->get('user_id');

$cartcount=cart::where('user_id',$user_id)->count();
return response()->json(['count'=>$cartcount]);
    }
}

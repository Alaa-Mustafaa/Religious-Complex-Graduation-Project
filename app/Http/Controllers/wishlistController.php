<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\wishlist;
use App\Models\User;
use App\Models\orderitem;
use App\Models\product;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class wishlistController extends Controller
{
    //

    public function wish(){
        $user_id=session()->get('user_id');

        $wishlist=wishlist::where('user_id',$user_id)->get();
        return view('products.wishlist',compact('wishlist'));
    }

    public function addwish(Request $request){
        $user_id=session()->get('user_id');

        $product_id=$request->input('product_id');
       
 
        if($user_id !== null){
         $prod_check=product::where ('id',$product_id)->first();
 if($prod_check){
     if(wishlist::where('prod_id',$product_id)->where('user_id',$user_id)->exists())
     {
         return response()->json(['status'=>$prod_check->name. "Already Added to your wishlist"]);
     }
     else{
         $cartitem=new wishlist();
         $cartitem->prod_id=$product_id;
         $cartitem->user_id=$user_id;
       
         $cartitem->save();
         return response()->json(['status'=>$prod_check->name. "Added to Your wishlist"]);
     }
            }
     }
  
        else{
         return response()->json(['status'=>"Login to continue"]);
        }
     
    }

//         if($user_id !== null)
//         {
            
// $prod_id=$request->input('product_id');
// if(product::find($prod_id))
// {
    
//     $wish=new wishlist();
//     $wish->prod_id=$prod_id;
//     $wish->user_id=$user_id;
//     $wish->save();
//     return response()->json(['status'=>"Product added to Your Wishlist"]);
// }else{
//     return response()->json(['status'=>"product doesnot exist"]);
// }
//         }
//         else{
//             return response()->json(['status'=>"Login to continue"]);
//         }
//     }




    public function addw(Request $request){
        $user_id=session()->get('user_id');

        $prod_id=$request->input('product_id');
        $prod_qty=$request->input('product_qty');
 
        if($user_id !== null){
         $prod_check=product::where ('id',$prod_id)->first();
 if($prod_check){
     if(wishlist::where('prod_id',$prod_id)->where('user_id',$user_id)->exists())
     {
         return response()->json(['status'=>$prod_check->name. "Already Added to Cart"]);
     }
     else{
         $wish=new wishlist();
         $wish->prod_id=$prod_id;
         $wish->user_id=$user_id;
         $wish->prod_qty=$prod_qty;
         $wish->save();
         return response()->json(['status'=>$prod_check->name. "Added to Cart"]);
     }
            }
     }
  
        else{
         return response()->json(['status'=>"Login to continue"]);
        }
     }

     public function deletecart(Request $request){
        $user_id=session()->get('user_id');


        if($user_id !== null){

        $pro_id=$request->input('prod_id');
        if(wishlist::where('prod_id',$pro_id)->where('user_id',$user_id)->exists())
        {
           $wish=wishlist::where('prod_id',$pro_id)->where('user_id',$user_id)->first();
           $wish->delete();
           return response()->json(['status'=>"product deleted successfully"]);
        }
        }
        else{
            return response()->json(['status'=>"Login to continue"]);
           }
    }



    public function count(){
        $user_id=session()->get('user_id');

        $wishcount=wishlist::where('user_id',$user_id)->count();
        return response()->json(['count'=>$wishcount]);
            }
}

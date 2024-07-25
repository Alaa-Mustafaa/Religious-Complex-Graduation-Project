<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\back;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    //
    public function all(){
  $products=  product::all();
  $categories= product::where('category', 'best Seller')->get();
// return view("products.all",["products"=>$products]);
return view("products.all")->with('products',$products)->with('categories',$categories);
    }
  


    // public function alll(){
    //   // $products=  product::all();
    //   $categories= product::where('category', 'chris')->get();
    // return view("products.all",["categories"=>$categories]);
    
    //     }


    public function show($id){
      $product=  product::findOrfail($id);
    $category=$product->category;
     $relatedproducts= product::where('category','=',$category)->get();
$related=$relatedproducts;
    // return view("products.show",["product"=>$product]) ("products.show",["related"=>$related]);
    return view("products.show", [
      "product" => $product,
      "related" => $related
  ]);
        }




    public function create(){
    return view("products.create");
    }

    public function store(Request $request){

  $data=    $request->validate([
"name"=>"required|string",
"desc"=>"required|string",
"price"=>"required|integer",
"category"=>"required|string",
"image"=>"required|image|mimes:png,jpg,jpeg,webp"

      ]);


    $data['image'] =  Storage::putFile("products",$data['image']);

product::create($data);

$products=product::all();

return view("products.all",compact("products"));
        }

        public function edit($id){
          $product=  product::findOrfail($id);
          return view("products.edit",compact('product'));
          }

          public function update($id,Request $request){
         $data=   $request->validate([
              "name"=>"required|string",
              "desc"=>"required|string",
              "category"=>"required|string",
              "price"=>"required|integer",
              "image"=>"image|mimes:png,jpg,jpeg,webp"
                    ]);
                    $product=  product::findOrfail($id);

                    if($request->has("image")){
                      Storage::delete($product->image);
                    $data['image']=  Storage::putFile("products",$data['image']);

                    }


                  

                    $product->update($data);
                    return redirect(url("products/show/$id"));
            }

            public function delete($id){
              $product=  product::findOrfail($id);
              Storage::delete($product->image);
              $product->delete();
              return redirect(url("products"));
              }


              public function plist(){
                $products=product::select('name')->get(); 
               $data=[];
          
               foreach($products as $item){
                  $data[]=$item['name'];
               }
               return $data;
             
              }


              public function psearch(Request $request){

            $searchp=$request->pname;

       if($searchp !== ""){
        
        $product=product::where("name","LIKE","%$searchp%")->first();

        if($product !== null){
          $category=$product->category;
          $relatedproducts= product::where('category','=',$category)->get();
     $related=$relatedproducts;
         return view("products.show", [
           "product" => $product,
           "related" => $related
       ]);
        }
        else{
          return redirect()->back()->with("status","No products matched your search");
        }
       }
else{
  return redirect()->back();
}

              }



             



              public function createfeed(){
                return view("products");
                }
            
                public function storefeed(Request $request){
            
              $data=    $request->validate([
            "name"=>"required|string",
            "email"=>"required|string",
         
            "message"=>"required|string",
           
            
                  ]);
            
            
                
            
          back::createfeed($data);
            
                    }
}

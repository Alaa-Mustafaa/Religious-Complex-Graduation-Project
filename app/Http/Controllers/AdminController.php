<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Mail\MessageMaill;
use App\Models\Information;
use App\Models\product;
use App\Models\trip;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

use function Laravel\Prompts\error;

class AdminController extends Controller
{
    

// admin page 

public function admin(){
    $places = Information::paginate(3);
    $products=  product::paginate(3);
    $messages = Contact::paginate(3);
    $trips=trip::paginate(3);

    return view('admin.adminPage')->with(['places'=>$places,
    'products'=>$products,'messages'=>$messages,'trips'=>$trips]);
}

    // Display all places

    public function all()
    {
        $places = Information::all();
        return view('admin.all')->with("places", $places);
    }


    // Show one place 

    public function show($id)
    {
        $place = Information::findorfail($id);

        return view('admin.showOne', ['place' => $place]);
    }


    // Add place form

    public function addForm()
    {

        return view('admin.addForm');
    }
    // add place to DB
    public function addplace(Request $request)
    {

        //validation

        $validatedData = $request->validate([
            'name' => 'string',
            'desc1' => 'string',
            'desc2' => 'string',
            'desc3' => 'string',
            'desc4' => 'string',
            'desc5' => 'string',
            'desc6' => 'string',
            'desc7' => 'string',
            'desc8' => 'string',
            'desc9' => 'string',
            'desc10' => 'string',
            'calledreason' => 'string',
            'image' => 'image',
            'imagee' => 'image',
            'imageee' => 'image',
        ]);

        $information = new Information();
        $information->fill($validatedData);

        // Handle image upload
        $information->image = $request->file('image')->store('images');
        $information->imagee = $request->file('imagee')->store('images');
        $information->imageee = $request->file('imageee')->store('images');

        $information->save();


        $places = Information::all();
        return view('admin.all')->with('places', $places);
    }

    // update form
    public function editplace($id)
    {
        $place = Information::findorfail($id);
        return view('admin.editplace')->with("place", $place);
    }
    // Update place in DB
    public function update($id, Request $request)
    {
        $data = $request->validate([
            'name' => 'string',
            'desc1' => 'string',
            'desc2' => 'string',
            'desc3' => 'string',
            'desc4' => 'string',
            'desc5' => 'string',
            'desc6' => 'string',
            'desc7' => 'string',
            'desc8' => 'string',
            'desc9' => 'string',
            'desc10' => 'string',
            'calledreason' => 'string',
            'image' => 'image',
            'imagee' => 'image',
            'imageee' => 'image',
        ]);
        $information = new Information();
        $information->fill($data);


        $place = Information::findorfail($id);
        if ($request->has('image')) {
            Storage::delete($place['image']);
            $data['image'] = Storage::putFile("places", $data['image']);
            $information->image = $request->file('image')->store('images');
        }

        if ($request->has('imagee')) {
            Storage::delete($place['imagee']);

            $data['imagee'] = Storage::putFile("places", $data['imagee']);
            $information->imagee = $request->file('imagee')->store('images');

        }
        if ($request->has('imageee')) {
            Storage::delete($place['imageee']);
            $data['imageee'] = Storage::putFile("places", $data['imageee']);
            $information->imageee = $request->file('imageee')->store('images');

        }

        $place->update($data);

        $information->save();


        session()->flash("success", "Place updated successfully");
        $places = Information::all();
        return view('admin.all')->with("places", $places);
    }

    // delete 
    public function delete($id)
    {

        $place = Information::findorfail($id);

        if ($place->image !== null) {
            Storage::delete($place['image']);
        }

        if ($place->imagee !== null) {
            Storage::delete($place['imagee']);
        }


        if ($place->imageee !== null) {
            Storage::delete($place['imageee']);
        }

        $place->delete();

        session()->flash("success", "Place deleted successfully");

        $places = Information::all();
        return view('admin.all')->with("places", $places);
    }


    public function loginForm()
    {
        return view('user.login');
    }

    // contact us  (Show all Messages)

    public function messages()
    {
        $messages = Contact::all();
        return view('admin.Messages')->with('messages', $messages);
    }


    public function response($email, $id)
    {
        $user = User::where('email', '=', $email)->first();
        $userr = $user->email;
        session()->put('email_response', $userr);
        session()->put('email_id', $id);

        return view('admin.responseForm');
    }

    public function sendMessage(Request $request)
    {

        $responseEmail = session()->get('email_response');
        $id = session()->get('email_id');

        $request->validate([
            'message' => 'required'
        ]);

        $data = [
            "title" => "Religious Complex",
            "body" => $request->message,

        ];

        Mail::to($responseEmail)->send(new MessageMaill($data));
        session()->flash("success", "Response is sent  successfully");

        $message = Contact::findorfail($id);

        $message->delete();

        $messages = Contact::all();
        return view('admin.Messages')->with('messages', $messages);
    }





    public function warning($email, $id)
    {

        $user = User::where('email', '=', $email);

        $data = [
            "title" => "Religious Complex",
            "body" => "You did not respect the privacy and etiquette of our website, so we have decided to prevent you 
            from sending any messages to us again. We wish you a happy visit and a better day.",

        ];

        Mail::to($email)->send(new MessageMaill($data));
        session()->flash("success", "User is blocked  successfully");

        $user->update([
            "blocked" => "blocked"
        ]);

        $message = Contact::findorfail($id);

        $message->delete();

        $messages = Contact::all();
        return view('admin.Messages')->with('messages', $messages);
    }




    // E-commerce (Products)

    // Show all products in dashboard

    public function allProducts()
    {
        $products =  product::all();
        return view("admin.allProducts")->with('products', $products);
    }

    public function showProduct($id)
    {
        $product =  product::findOrfail($id);
        $category = $product->category;
        $relatedproducts = product::where('category', '=', $category)->get();
        $related = $relatedproducts;
        return view("admin.showProduct", [
            "product" => $product,
            "related" => $related
        ]);
    }




    public function addproduct()
    {
        return view("admin.addproduct");
    }

    public function store(Request $request)
    {
        $data =    $request->validate([
            "name" => "required|string",
            "desc" => "required|string",
            "price" => "required|integer",
            "category" => "required|string",
            "image" => "required|image|mimes:png,jpg,jpeg,webp"

        ]);


        $data['image'] =  Storage::putFile("products", $data['image']);

        product::create($data);

        $products =  product::all();
        return view("admin.allProducts")->with('products', $products);
    }

    public function edit($id)
    {
        $product =  product::findOrfail($id);

        return view('admin.editProduct')->with('product',$product);
    }

    public function updateProduct($id, Request $request)
    {
        $data =   $request->validate([
            "name" => "required|string",
            "desc" => "required|string",
            "category" => "required|string",
            "price" => "required|integer",
            "image" => "image|mimes:png,jpg,jpeg,webp"
        ]);
        $product =  product::findOrfail($id);

        if ($request->has("image")) {
            Storage::delete($product->image);
            $data['image'] =  Storage::putFile("products", $data['image']);
        }




        $product->update($data);
        return redirect(url("showProduct/$id"));
    }

    public function deleteProduct($id)
    {
        $product =  product::findOrfail($id);
        Storage::delete($product->image);
        $product->delete();
        return redirect(url("allProducts"));
    }



    public function trip(){

        $trips=trip::all();

        return view('admin.trips')->with('trips',$trips);
    }

    public function deletetrip($id){

        $trips = trip::findOrfail($id);
        $trips->delete();
        $trips=trip::all();

        session()->flash("success", "Trip is deleted  successfully");

        return view('admin.trips')->with('trips',$trips);
    }
}

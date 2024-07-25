<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Place;
use App\Mail\DemoMail;
use App\Mail\CodeMail;
use App\Mail\MessageMaill;
use App\Models\Contact;
use App\Models\Information;
use App\Models\order;
use Illuminate\Support\Facades\Mail;



class UserController extends Controller
{
    //
    public $code;

    public function registerForm(){

        return view('user.register');

    }

    public function register(Request $request){

        // validation
       $data= $request->validate([
            "name"=>"required|string|max:15",
            "email"=>"required|email",
            "password"=>"required|confirmed|max:8"
        ]);

        $password=bcrypt($request->password);

        $access_token=Str::random(64);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$password,
            'access_token'=>$access_token
        ]);

        session()->flash("success","You are registered successfully");

        // send email to welcome new users 
        $data=[
            "title"=>"Religious Complex",
            "body"=>"You have been registered successfully"
        ];

        Mail::to($request->email)->send(new DemoMail($data));

        return view('user.login');
    }


    public function loginForm(){
        return view('user.login');
    }


    public function login(Request $request){

        $data=$request->validate([
            "email"=>"required|email",
            "password"=>"required|max:8"

        ]);

      $user = User::where('email','=',$request->email)->first();

      if($user !== null){
        // email is true
        $old_password=$user->password;
        $new_pass=$request->password;

        $isverified=Hash::check($new_pass, $old_password);

        if($isverified){
            //password is true
            $access_token=Str::random(64);

            $user->update([
                'access_token'=>$access_token

            ]);

            session()->put('access_token',$access_token);
            session()->put('user_id',$user->id);
            session()->put('role',$user->role);
            session()->put('name',$user->name);

            session(['access_token' => $access_token]);


            if($user->role == 'user'){
                $dataa = $request->session()->all();

                return view('welcome')->with('dataa',$dataa);
            }else{
                $places= Information::all();
                return view('admin.all')->with('places',$places);
            }


        }else{
            //password is false
            return view('user.login');
        }


      }else{

        // email is false

      }


    }

    public function logout(){

        session()->forget('access_token');
        session()->forget('user_id');
        session()->forget('role');
        session()->forget('name');


        return view('user.login');


    }



    public function welcome(Request $request){
        ini_set('max_execution_time',3600);
        $dataa = $request->session()->all();

     
         
        return view('welcome')->with('dataa',$dataa);
    }


    public function forgetpassword(){
        // form

        return view('user.forgetpassword');
    }

    public function code(Request $request){

        // send email with code 
        $request->validate([
            "email"=>"required|email"
        ]);

        session()->put('email',$request->email);

        $code=rand(1,6);

        $data=[
            "title"=>"Religious Complex",
            "body"=>"your verification code is ",
            "code"=>$code
        ];

        Mail::to($request->email)->send(new CodeMail($data));


        // go to form to put the code

        session()->put('code',$code);

        return view('user.codeVerify');

    }

    public function codeVerify(Request $request){
          // check if the code is true or not 
         $request->validate([
            'code'=>'required'
         ]);

         $verifyCode=session()->get('code');

         $codeForm=$request->code;
         
         if($verifyCode == $codeForm){
            return view('user.changePass');
         }else{
            session()->put('true','false');
         }


    }

    public function changePassword(Request $request ){
        $request->validate([
            'newPassword'=>'required|confirmed'
        ]);

        $email_user=session()->get('email');

        $user=User::where('email','=',$email_user);

        $newPass=bcrypt($request->newPassword);

        if($user !== null){
            $user->update([
                "password"=>$newPass

            ]);

            return view('user.login');


        }else{

            return view('user.forgetpassword');
        }


    }

// Historical places
    public function places(){

        $places=Place::all();

        return view('user.places')->with('places',$places);
    }


    // Contact Us 

    public function contact(){
        return view('user.contactUs');
    }

    
    public function contactDB(Request $request){
        $user_id=session()->get('user_id');

        $blocked=User::where('email','=',$request->email)->first();

        if($blocked->blocked == 0){

        $date=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'user_id'=>$user_id
        ]);

        session()->flash("success","message sent successfully");
        

        $data=[
            "title"=>"Religious Complex",
            "body"=>"Your message has reached us and we will respond to you as soon as possible. 
            Thank you for contacting us. ",
            
        ];

        Mail::to($request->email)->send(new MessageMaill($data));


        return view('user.contactUs');

        }else{

            session()->flash('block_message',"You are blocked");

            return view('user.contactUs');
        }




    }




    public function index(){
        $user_id=session()->get('user_id');

        $orders=order::where('user_id',$user_id)->get();
        return view('products.order',compact('orders'));
    }

    public function vieworder($id)  {
        $user_id=session()->get('user_id');

        $orders=order::where('id',$id)->where('user_id',$user_id)->first();
        return view('products.vieworder',compact('orders')); 
    }



public function about(){
    return view('user.about');
}


public function gallery(){
    return view('user.gallery');
}

public function models(){
    
    return view('user.models');
}
}

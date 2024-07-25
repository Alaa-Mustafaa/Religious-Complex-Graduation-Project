<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TriipController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Admin Routes

Route::controller(AdminController::class)->group(function () {

    // admin main page 
    Route::get('adminn','admin');

    // display all places
    Route::get('allPlaces', 'all');

    // display one place
    Route::get('showOne/{id}', 'show');

    // add form
    Route::get('addplace', 'addForm');
    // add place to DB
    Route::post('allPlaces', 'addplace');

    // update form
    Route::get('editplace/{id}', 'editplace');

    // Update in DB
    Route::put('allPlaces/{id}', "update");

    // delete
    Route::delete('/allPlaces/{id}', 'delete');


       // login form
    Route::get('/loginForm', 'loginForm');


    // Show all messages from users to admin (contact)
    
    Route::get('/messages','messages');
  
    // response to the message by admin

    Route::get('/response/{email}/{id}','response');

    // send email to user by Admin and Delete the message if the admin responses
    Route::post('sendMessage','sendMessage');

// Warning and block

Route::get('/warning/{email}/{id}','warning');


// E-commerce

Route::get('allProducts','allProducts');

Route::get('addproduct','addproduct');

Route::get('showProduct/{id}', 'showProduct');


Route::post('/allProducts',"store");

Route::get('/allProducts/edit/{id}',"edit");

Route::put('/allProducts/{id}',"updateProduct");

Route::delete('/allProducts/{id}',"deleteProduct");


// all Trips

Route::get('tripsAdmin','trip');
Route::delete('tripsAdmin/{id}','deletetrip');



});  



// User Routes

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'welcome');


    // redirect user to home page / admin to the dashboard

    // register Form
    Route::get('/registerForm', 'registerForm');
    // register user to DB
    Route::post('/register', 'register');


    // login form
    Route::get('/loginForm', 'loginForm');

    // redirect user to home page / admin to the dashboard (Login)

    Route::post('/login', 'login');

    // logout
    Route::get('/logout','logout');

    // forget password

    Route::get('/forgetpassword','forgetpassword');

    Route::post('code','code');

    Route::post('/codeVerify','codeVerify');

    // change password

    Route::post('/change','changePassword');


    // historical places

    Route::get('/places','places');


    // contact us 
    Route::get('/contact','contact');

      // contact us (insert message into DB )

      Route::post('/contact','contactDB');

      // About Us
      Route::get('/about','about');


     // Gallery
      Route::get('/gallery','gallery');

    // Trips


    Route::get('/triips/create', [TriipController::class, 'create'])->name('triips.create');

    Route::post('/triips', [TriipController::class, 'store'])->name('triips.store');

    //Trip Page
    Route::get('/trip', function () {
        return view('triips.trip');
    });




    // Interactive Map
    Route::get('/map', function () {
        return view('map');
    });
    
    Route::get('/game', function () {
        return view('game');
    });
    
    Route::get('/gamex', function () {
        return view('gamex');
    });
    
    Route::get('/kid', function () {
        return view('kid');
    });


    Route::get('form', function () {
        return view('information_form');
    });
    
    Route::post('informations', [InformationController::class, 'store'])->name('informations.store');
    
    Route::get('informations', [InformationController::class, 'index'])->name('informations.index');

});


Route::get('changeLang/{lang}',function($lang){

    session()->put('lang',$lang);

    return redirect()->back();

   


}

);


// E-commerce Website (internal website)


use App\Http\Controllers\bestController;
use App\Http\Controllers\productController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\langController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\stripeController;
use App\Http\Controllers\wishlistController;

use App\Http\Controllers\stripeControllerr;


use Illuminate\Support\Facades\Auth;


// Route::get('/products',[::class,"all"]);
Route::get('/products',[productController::class,"all"]);

Route::post('addtoCart',[cartController::class,"addcart"]);
Route::get('loadcart',[cartController::class,"count"]);
Route::post('deletecart',[cartController::class,"deletecart"]);
Route::post('deleteW',[wishlistController::class,"deletecart"]);
Route::get('loadwish',[wishlistController::class,"count"]);
Route::get('products/show/{id}',[productController::class,"show"]);



Route::post('updatecart',[cartController::class,"updatecart"]);
Route::post('addtowish',[wishlistController::class,"addwish"]);


Route::middleware(['user'])->group(function(){
    Route::get('cart',[cartController::class,"viewcart"]);
    Route::get('checkout',[checkoutController::class,"index"]);
    Route::post('placeorder',[checkoutController::class,"placeorder"]);

    Route::get('myorder',[UserController::class,"index"]); 
    Route::get('vieworder/{id}',[UserController::class,"vieworder"]);
    Route::get('wishlist',[wishlistController::class,"wish"]); 
    Route::post('/topay',[checkoutController::class,"pay"]);
    Route::post('/session',[stripeController::class,"session"]);
    Route::get('/success',[stripeController::class,"success"]);


});









Route::get('/list',[productController::class,"plist"]);
Route::post('searchproduct',[productController::class,"psearch"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/home',[langController::class,'index'])->name('index');






Route::get('/upload', [ModelController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [ModelController::class, 'handleUpload'])->name('upload.handle');
Route::get('modell', function () {
    return view('modell');
});

Route::get('chatbot', function () {
    return view('user.chatbot');
});
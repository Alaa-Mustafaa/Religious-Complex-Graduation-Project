<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif

<head>
  <title>{{ GoogleTranslate::trans(' Religious Complex | Checkout',session()->get('lang'),'en'); }}</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{url('css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body data-bs-theme="light">

@include('products.nav')

<div class="container mt-5">
    <form action="{{url('placeorder')}}" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                <h6>{{ GoogleTranslate::trans('Checkout Details',session()->get('lang'),'en'); }}</h6>
                <hr>
                <div class="row checkout-form">
                    <div class="col-md-6 mt-3">
                        <label for="">{{ GoogleTranslate::trans('Name',session()->get('lang'),'en'); }}</label>
                        <input type="text" class="form-control h-75 fname" placeholder=" {{ GoogleTranslate::trans('Enter Name',session()->get('lang'),'en'); }}" name="name" value="{{$user->name}}">
                        <span id="fname_error" class="text-danger py-5"></span>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">{{ GoogleTranslate::trans('Email',session()->get('lang'),'en'); }}</label>
                        <input type="text" class="form-control h-75 email" placeholder=" {{ GoogleTranslate::trans('Enter Email',session()->get('lang'),'en'); }}" name="email" value="{{$user->email}}">
                        <span id="email_error"class="text-danger py-5"></span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="">{{ GoogleTranslate::trans('Phone',session()->get('lang'),'en'); }}</label>
                        <input type="text" class="form-control  h-75 phone" placeholder=" {{ GoogleTranslate::trans('Enter Phone Number',session()->get('lang'),'en'); }}" name="phone" value="{{ $user->phone}}">
                        <span id="phone_error"class="text-danger py-5"></span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="">{{ GoogleTranslate::trans('Address',session()->get('lang'),'en'); }}</label>
                        <input type="text" class="form-control h-75 address" placeholder=" {{ GoogleTranslate::trans('Enter Address',session()->get('lang'),'en'); }}" name="address" value="{{ $user->address}}">
                        <span id="address_error"class="text-danger py-5"></span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="">{{ GoogleTranslate::trans('City',session()->get('lang'),'en'); }}</label>
                        <input type="text" class="form-control  h-75 city" placeholder=" {{ GoogleTranslate::trans('Enter Cit',session()->get('lang'),'en'); }}y" name="city" value="{{ $user->city}}">
                        <span id="city_error"class="text-danger py-5"></span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="">{{ GoogleTranslate::trans('Country',session()->get('lang'),'en'); }}</label>
                        <input type="text" class="form-control  h-75 country" placeholder=" {{ GoogleTranslate::trans('Enter Country',session()->get('lang'),'en'); }}" name="country" value="{{ $user->country}}">
                        <span id="country_error"class="text-danger py-5"></span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="">{{ GoogleTranslate::trans('Pin Code',session()->get('lang'),'en'); }}</label>
                        <input type="text" class="form-control  h-75 pincode" placeholder=" {{ GoogleTranslate::trans('Enter Pin Code',session()->get('lang'),'en'); }}" name="pincode" value="{{ $user->pincode}}">
                        <span id="pincode_error"class="text-danger py-5"></span>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
           <div class="card">
            <div class="card-body">
            @php $total=0; @endphp
            {{ GoogleTranslate::trans('Order Details',session()->get('lang'),'en'); }}
                <hr>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th>{{ GoogleTranslate::trans('Name',session()->get('lang'),'en'); }}</th>
                        <th>{{ GoogleTranslate::trans('Quantity',session()->get('lang'),'en'); }}</th>
                        <th>{{ GoogleTranslate::trans('Price',session()->get('lang'),'en'); }}</th>
                        <th>{{ GoogleTranslate::trans('image',session()->get('lang'),'en'); }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartitems as $item)
                        <tr>
                            <td>{{ GoogleTranslate::trans($item->products->name,session()->get('lang'),'en'); }}</td>
                            <td>{{ GoogleTranslate::trans($item->prod_qty,session()->get('lang'),'en'); }}</td>
                            <td>{{ GoogleTranslate::trans($item->products->price,session()->get('lang'),'en'); }}</td>
                            <td>
                            <img src="{{ asset('storage/'.$item->products->image)}}" alt="" height="70px" width="100px">
                            </td>
                        </tr>
                        <tr>
                        @php $total +=$item->products->price * $item->prod_qty; @endphp
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <input type="hidden" name="payment_mode" value="COD">
                <h6> {{ GoogleTranslate::trans('Total Price : EGP',session()->get('lang'),'en'); }} {{ $total}}</h6>
                <button type="submit" href="{{ url('checkout')}}" class="btn btn-primary float-end placeorder">{{ GoogleTranslate::trans('Place Order | COD',session()->get('lang'),'en'); }}</button> 
                <button type="submit" class="btn btn-primary float-end me-5 razorypay mb-5">{{ GoogleTranslate::trans('Pay with Razory',session()->get('lang'),'en'); }}</button>
               <div id="paypal-button-container"></div>
      
           
           
            </div>
           </div> 
        </div>
    </div>
    </form>
    <form action="/session" method="POST">
          
           
          <input type="hidden" name="total" value="{{$total}}">
          <input type="hidden" name="productname" value="{{$item->products->name}}">
         
          </form>
</div>



<script> 
$(document).ready(function (){

  $('.placeorde').click(function (e){
  e.preventDefault();

 var product_id=$(this).closest('.prod_data').find('.prod_id').val();
 var product_qty=$(this).closest('.prod_data').find('.qty-input').val();
  
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $.ajax({
method:"POST",
url:"/placeorder",
data:{
  'product_id':product_id,
'product_qty':product_qty,
},

success:function(response){
alert(response.status);
}
 });
});

$('.razorypay').click(function (e){
  e.preventDefault();

  var fname=$('.name').val();
  var email=$('.email').val();
  var phone=$('.phone').val();
  var address=$('.address').val();
  var city=$('.city').val();
  var country=$('.country').val();
  var pincode=$('.pincode').val();
  
if(!fname){
    fname_error="First Name is required";
    $('#fname_error').html('');
    $('#fname_error').html(fname_error);
}else{
    fname_error="";
    $('#fname_error').html('');
}



if(!lname){
    lname_error="Last Name is required";
    $('#lname_error').html('');
    $('#lname_error').html(lname_error);
}else{
    lname_error="";
    $('#lname_error').html('');
}



if(!email){
    email_error="Email is required";
    $('#email_error').html('');
    $('#email_error').html(email_error);
}else{
    email_error="";
    $('#email_error').html('');
}

if(!phone){
    phone_error="Phone is required";
    $('#phone_error').html('');
    $('#phone_error').html(phone_error);
}else{
    phone_error="";
    $('#phone_error').html('');

}


if(!address){
    address_error="Address is required";
    $('#address_error').html('');
    $('#address_error').html(address_error);
}else{
    address_error="";
    $('#address_error').html('');
}


if(!city){
    city_error="City is required";
    $('#city_error').html('');
    $('#city_error').html(city_error);
}else{
    city_error="";
    $('#city_error').html('');
}


if(!country){
    country_error="Country is required";
    $('#country_error').html('');
    $('#country_error').html(country_error);
}else{
    country_error="";
    $('#country_error').html('');
}


if(!pincode){
    pincode_error="pincode is required";
    $('#pincode_error').html('');
    $('#pincode_error').html(pincode_error);
}else{
    pincode_error="";
    $('#pincode_error').html('');
}

if(fname_error != '' || lname_error != '' || email_error !='' || phone_error !='' || address_error!='' || city_error !='' || country_error !=''|| pincode_error!='')
{
    return false;
}else{
    
var data = {

'fname':fname,
'lname': lname,
'email': email,
'phone': phone,
'address': address,
'city':city,
'country': country,
'pincode': pincode
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$.ajax({
method: "POST",
url: "/topay",
data: data,
success: function (response){
    // alert(response.total_price)
    
var options
=
{
"key": "rzp_test_oRfSzsSGPgUAwU", // Enter the Key ID generated from 
"amount": 1*100, // Amount is in currency subunits. Default currency
 "currency": "INR",
"name": response.fname+' '+response.lname, 
"description": "Thank you for choosing us",
"image": "https://example.com/your_logo",
// "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. I
 "handler": function (responsea) {
    alert(responsea.razorpay_payment_id);
    $.ajax({
method: "POST",
url: "/placeorder",
data:{
    
'fname': response.fname, 
'Iname': response.lname, 
'email': response.email,
'phone': response.phone,
'address':response.address,

'city': response.city, 

'country': response.country,
'pincode': response.pincode,
'payment_mode': "Paid by Razorpay",
'payment_id': responsea.razorpay_payment_id,
},

success: function (responseb){
    alert(responseb.status);
}
    });
},

"prefill": {

"name": response.fname+' '+response.lname,
 "email": response.email,
"contact": response.phone
},
"theme": {
    "color": "#3399cc"
}

};
var rzp1 = new Razorpay(options);
rzp1.open();

}
});
}
});
});

</script>









<script
      src="https://www.paypal.com/sdk/js?client-id=AUwBij7i0NWnCvk7tb0VUnd3FdyKOHo4jh8bpRXFu8ZONiEhjInnuwY6Mr92O-EzKn0g0CwANZPb1sCn"
      data-sdk-integration-source="developer-studio"
    ></script>


   

    
<script>
paypal.Buttons({
createOrder: function(data, actions) {
// This function sets up the details of the transaction, including the amount and line item details. 
return actions.order.create({
purchase_units: [{
amount: {
value: '{{ $total }}'
}
}]
});
},

onApprove: function(data, actions) {
// This function captures the funds from the transaction.
return actions.order.capture().then(function(details) {
// This function shows a transaction success message to your buyer. 
alert('Transaction completed by' + details.payer.name.given_name);


var fname=$('.fname').val();
  var lname=$('.lname').val();
  var email=$('.email').val();
  var phone=$('.phone').val();
  var address=$('.address').val();
  var city=$('.city').val();
  var country=$('.country').val();
  var pincode=$('.pincode').val();


$.ajax({
method: "POST",
url: "/place-order",
data: {

'fname':fname,
'lname': lname, 
'email': email,
'phone':phone, 
'address':address,
 'city': city, 
'country':country,
'pincode': pincode,
'payment_mode': "Paid by paypal",
'payment_id': details.id,
},
success: function (response) {
swal (response.status);
window.location.href="/myorder";
}
});
});
}
}).render('#paypal-button-container');
//This function displays Smart Payment Buttons on your web page.
   </script>




<script>

  function myFunction(){
    var element = document.body;
    element.dataset.bsTheme=
    element.dataset.bsTheme == "dark" ? "light" : "dark";
  }
</script>



@include('user.footer')
<!-- <script src="https://checkout.razorpay.com/v1/checkout.js"> </script> -->
</body>
</html>
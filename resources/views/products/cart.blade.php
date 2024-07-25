<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif

<head>
<title>{{ GoogleTranslate::trans(' Religious Complex | Cart',session()->get('lang'),'en'); }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{url('css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>


<body data-bs-theme="light">

 @include('products.nav')

  
<h1 class="text-center mb-2 mt-4">{{ GoogleTranslate::trans(' My Cart',session()->get('lang'),'en'); }}</h1>
<div class="container my-5 ">
  <div class="card shadow ">
    @if($cartitem ->count() >0)
    <div class="card-body">
      @php $total=0; @endphp
      @foreach($cartitem as $item)
      <div class="row product_data my-3">
        <div class="col-md-2">
          <img src="{{ asset('storage/'.$item->products->image)}}" alt="" height="70px" width="70px">
        </div>
        <div class="col-md-3">
          <h3>{{ GoogleTranslate::trans($item->products->name,session()->get('lang'),'en'); }}</h3>
        </div>
        <div class="col-md-2 mt-2">
          <h3>{{ GoogleTranslate::trans( $item->products->price,session()->get('lang'),'en'); }} {{ GoogleTranslate::trans('EGP',session()->get('lang'),'en'); }}</h3>
        </div>
        <div class="col-md-3 ">
  <input type="hidden"  class="prod_id" value="{{ $item->prod_id }}">
<label for="Quantity">{{ GoogleTranslate::trans('Quantity ',session()->get('lang'),'en'); }}</label>
<div class="input-group text-center mb-3 w-100">
  <button class="input-group-text changequan decrement-btn">-</button>
  <input type="text" name="quantity " class="form-control text-center qty-input" value="{{$item->prod_qty}}"></input>
  <button class="input-group-text changequan increment-btn">+</button>
</div>
      </div>
      <div class="col-md-2 mt-4">
        <button class="btn btn-danger delete-cart-item "><i class="fa fa-trash"></i>{{ GoogleTranslate::trans(' Remove',session()->get('lang'),'en'); }}</button>
      </div>
    </div>
    @php $total +=$item->products->price * $item->prod_qty; @endphp
    @endforeach
  </div>
  <div class="card-footer">
    <h6>{{ GoogleTranslate::trans(' Total Price : EGP',session()->get('lang'),'en'); }}  {{ $total}}

    <a href="{{ url('checkout')}}" class="btn btn-outline-primary float-end">{{ GoogleTranslate::trans('Checkout ',session()->get('lang'),'en'); }}</a>
    </h6>
  </div>
  @else

  <div class="card-body text-center">
    <h2>{{ GoogleTranslate::trans(' Your Cart is empty',session()->get('lang'),'en'); }} </h2>
    <a href="{{ url('products')}}" class="btn btn-outline-primary float-end">{{ GoogleTranslate::trans(' Go Shopping',session()->get('lang'),'en'); }}</a>
  </div>
  @endif
</div>
</div>





        













<script> 
$(document).ready(function (){

  function loadcart(){
    $.ajax({
method:"GET",
url:"/loadcart",


success:function(response){
  $('.cart-count').html('');
  $('.cart-count').html(response.count);
  

}
 });
  }


  $('.addtocartbtn').click(function (e){
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
url:"/addtoCart",
data:{
  'product_id':product_id,
'product_qty':product_qty,
},

success:function(response){

swal.success(response.status);
loadcart();
}
 });
});

$('.increment-btn').click(function (e){
  e.preventDefault();

 

  var inc_value=$(this).closest('.product_data').find('.qty-input').val();
  var value=parseInt(inc_value,10);
  value=isNaN(value)?0:value;
  if(value <10){
    value++;
    
    $(this).closest('.product_data').find('.qty-input').val(value);
  }
  
});


$('.decrement-btn').click(function (e){
  e.preventDefault();

 
  var dec_value=$(this).closest('.product_data').find('.qty-input').val();
  var value=parseInt(dec_value,10);
  value=isNaN(value)?0:value;
  if(value > 1){
    value--;
    $(this).closest('.product_data').find('.qty-input').val(value);
  }
  
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.delete-cart-item').click(function (e){
  e.preventDefault();


  var prod_id=$(this).closest('.product_data').find('.prod_id').val();
  $.ajax({
method:"POST",
url:"/deletecart",
data:{
  'prod_id':prod_id,

},
success:function(response){
  window.location.reload();
  alert(response.status,);
}
  });
});
$('.changequan').click(function (e){
  e.preventDefault();
  var prod_id=$(this).closest('.product_data').find('.prod_id').val();
  var qty=$(this).closest('.product_data').find('.qty-input').val();
data={
  'prod_id':prod_id,
  'prod_qty':qty,
}
 
  $.ajax({
method:"POST",
url:"updatecart",
data:data,
success:function(response){
  window.location.reload();
 
}
  });

});
});


</script>




<script>

  function myFunction(){
    var element = document.body;
    element.dataset.bsTheme=
    element.dataset.bsTheme == "dark" ? "light" : "dark";
  }
</script>


@include('user.footer')
</body>
</html>
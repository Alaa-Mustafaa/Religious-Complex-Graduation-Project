<nav class="navbar navbar-expand-lg bg-body shadow-sm">
  <div class="container">

  <div class="me-3">
  <i class="fa-solid fa-globe fs-1"></i>
    </div>

  <div class="logo mt-4">
    

    <h6 class=" word">{{ GoogleTranslate::trans('Religious Complex ',session()->get('lang'),'en'); }}</h6>

<div class="d-flex justify-content-between mt-3 letter">
<p class="">{{ GoogleTranslate::trans(' S',session()->get('lang'),'en'); }}</p>
<p class="">{{ GoogleTranslate::trans('t ',session()->get('lang'),'en'); }}</p>
<p class="">{{ GoogleTranslate::trans(' o',session()->get('lang'),'en'); }}</p>
<p class="">{{ GoogleTranslate::trans(' r',session()->get('lang'),'en'); }}</p>
<p class="">{{ GoogleTranslate::trans(' e',session()->get('lang'),'en'); }}</p>
</div>
</div>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

  

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('products')}}">{{ GoogleTranslate::trans(' Home page',session()->get('lang'),'en'); }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('cart')}}">{{ GoogleTranslate::trans(' Cart',session()->get('lang'),'en'); }}
          <i class="fa-solid fa-cart-shopping position-relative"></i>
            <span class="position-absolute   translate-middle badge badge-pill bg-primary cart-count">{{ GoogleTranslate::trans(' 0',session()->get('lang'),'en'); }}</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('myorder')}}">{{ GoogleTranslate::trans(' My Orders',session()->get('lang'),'en'); }}</a>
        </li>

   {{--      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('map')}}">Map</a>
        </li> --}}

{{--         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('kid')}}">kid</a>
        </li>
 --}}

    {{--     <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('triips/create')}}">trip</a>
        </li> --}}
     

        
     
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('wishlist')}}">{{ GoogleTranslate::trans(' ',session()->get('lang'),'en'); }}WishList
          <i class="fa-solid fa-heart position-relative text-danger fs-5"></i>
          <span class="position-absolute   translate-middle badge badge-pill bg-danger wish-count">{{ GoogleTranslate::trans(' ',session()->get('lang'),'en'); }}0</span>

          </a>
        </li>

      
      </ul>



      <div class="form-check form-switch mx-4">
  <input class="form-check-input p-2"
  type="checkbox"
  role="switch"
  id="flexSwitchCheckChecked"
  checked
  onclick="myFunction()"
  >
</div>
<div class="dropdown">
              
  <button class="dropbtn" style="color: black">{{session()->get('lang')}} <i class="fa-sharp fa-solid fa-angle-down ps-1 "></i></button>

  <div class="dropdown-content">
    <a href="{{url('changeLang',['en'])}}">{{ GoogleTranslate::trans('English ',session()->get('lang'),'en'); }}</a>
    <a href="{{url('changeLang',['ar'])}}">{{ GoogleTranslate::trans(' Arabic',session()->get('lang'),'en'); }}</a>
    <a href="{{url('changeLang',['fr'])}}">{{ GoogleTranslate::trans('French ',session()->get('lang'),'en'); }}</a>
    <a href="{{url('changeLang',['es'])}}">{{ GoogleTranslate::trans('Spanish ',session()->get('lang'),'en'); }}</a>
    <a href="{{url('changeLang',['de'])}}">{{ GoogleTranslate::trans('German ',session()->get('lang'),'en'); }}</a>
    <a href="{{url('changeLang',['it'])}}">{{ GoogleTranslate::trans(' Italian',session()->get('lang'),'en'); }}</a>
    <a href="{{url('changeLang',['ru'])}}">{{ GoogleTranslate::trans(' Russian',session()->get('lang'),'en'); }}</a>


  </div>
</div>

      <form class="d-flex" method="POST" action="{{ url('searchproduct') }}">
        @csrf
        <input class="form-control me-2" id="searchproduct" name="pname" type="search" placeholder="{{ GoogleTranslate::trans(' Search Products',session()->get('lang'),'en'); }}" >
        <button class="input-group-text" type="submit" ><i class="fa fa-search"></i></button>
       
      </form>
      <button
      class="btn ms-2"
      style="background-color: #6886c5; color: white"
    >
      <a href="{{url('logout')}}" class="text-white text-decoration-none">{{ GoogleTranslate::trans('logout ',session()->get('lang'),'en'); }}</a>

    </button>

      <!-- <div>
        <input id="input">
        <button onclick="speak()">speak</button>
      </div> -->
 
      
    </div>



  </div>

</nav>


  
  <script> 
    $(document).ready(function (){
    loadcart();
    loadwish();
    
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
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
    
    
      function loadwish(){
        $.ajax({
    method:"GET",
    url:"/loadwish",
    
    
    success:function(response){
      $('.wish-count').html('');
      $('.wish-count').html(response.count);
      
    
    }
     });
      }
    });
    </script>
    
    
    
    <script>
    
    
      $( function() {
        var availableTags = [];
    
        
        $.ajax({
    method:"GET",
    url:"/list",
    
    
    success:function(response){
      
      start(response);
    }
     });
     function start(availableTags){
        $( "#searchproduct" ).autocomplete({
          source: availableTags
        });
      }
    } );
     
      </script>
    
    
    <script>
    
      function speak(){
        var text=document.getElementById("input").value;
        var utt= new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(utt);
      }
    </script>
    
    
    
    <script>
    
      function myFunction(){
        var element = document.body;
        element.dataset.bsTheme=
        element.dataset.bsTheme == "dark" ? "light" : "dark";
      }
    </script>
    
    
    
    
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>  


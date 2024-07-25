
<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" href="{{url('css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body data-bs-theme="light">

<nav class="navbar navbar-expand-lg bg-body">
  <div class="container-fluid">

  <div class="me-3">
  <i class="fa-solid fa-globe fs-1"></i>
    </div>

  <div class="logo mt-4">
    
<h6 class=" word">Religious Complex</h6>

<div class="d-flex justify-content-between mt-3 letter">
<p class="">S</p>
<p class="">t</p>
<p class="">o</p>
<p class="">r</p>
<p class="">e</p>
</div>
</div>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

  

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('products')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('cart')}}">Cart
          <i class="fa-solid fa-cart-shopping position-relative"></i>
            <span class="position-absolute   translate-middle badge badge-pill bg-success cart-count">0</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('myorder')}}">My Orders</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('create-trip')}}">trip</a>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Islamic</a></li>
            <li><a class="dropdown-item" href="#">Christian</a></li>
      
            <li><a class="dropdown-item" href="#">Jewish</a></li>
          </ul>
        </li>

        
     
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('wishlist')}}">WishList
          <i class="fa-solid fa-heart position-relative text-danger fs-5"></i>
          <span class="position-absolute   translate-middle badge badge-pill bg-danger wish-count">0</span>

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


      <form class="d-flex" method="POST" action="{{ url('searchproduct') }}">
        @csrf
        <input class="form-control me-2" id="searchproduct" name="pname" type="search" placeholder="Search Products" >
        <button class="input-group-text" type="submit" ><i class="fa fa-search"></i></button>
       
      </form>

  
 
      
    </div>



  </div>
</nav>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border">
                <div class="card-header ">
                <h1 >Order View</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-6">
                       <h1>Shipping Details</h1>
                        <hr>
                       <label for="">First Name</label>
                       <div class="border p-2">{{$orders->name}}</div>
                       
                       <label for="">Email</label>
                       <div class="border p-2">{{$orders->email}}</div>
                       <label for="">Phone</label>
                       <div class="border p-2">{{$orders->phone}}</div>
                       <label for="">Shipping Address</label>
                       <div class="border p-2">{{$orders->address}},{{$orders->city}},{{$orders->Country}}</div>
                       <label for="">Zip code</label>
                       <div class="border p-2">{{$orders->pincode}}</div>
                       </div> 
                       <div class="col-md-6">
                        <h1>Order Details</h1>
                        <hr>
                       <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders->orderitems as $item)
                    <tr>
                        <td>{{$item->products->name}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->price}}</td>
                        
                    
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h4>Total Price: {{$orders->total_price}}</h4>
                        </div> 
                    </div>
                
                </div>
            </div>
           
        </div>
    </div>
</div>



<script>

  function myFunction(){
    var element = document.body;
    element.dataset.bsTheme=
    element.dataset.bsTheme == "dark" ? "light" : "dark";
  }
</script>

</body>
</html>
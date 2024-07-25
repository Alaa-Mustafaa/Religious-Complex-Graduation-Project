
<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" href="{{url('css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body data-bs-theme="light">

@include('products.nav')



<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border">
                <div class="card-header">
                <h1>My Orders</h1>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tracking Number</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)
                    <tr>
                        <td>{{$item->tracking_no}}</td>
                        <td>{{$item->total_price}}</td>
                        <td>
                            <a href="{{ url("vieworder/$item->id") }}" class="btn btn-primary"> view</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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

@include('user.footer')
</body>
</html>
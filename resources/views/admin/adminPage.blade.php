@extends('admin.layout')

@section('body')
@include('success')


<div class="container pt-5">
    <h2>Our Places </h2>
    <p class="text-muted"> You can see each of the places, edit or delete anything from them. Just click View All to get started.</p>
    <div class="row">
        @foreach ($places as $place )
        <div class="col-md-4">
            <div class="card " style="height: 99%">
                <img src="{{asset("storage/$place->image")}}" class="card-img-top w-100  h-75">
                <div class="card-body text-center">
                    <h5>{{$place->name}}</h5>
                </div>
              </div>

        </div>

            
        @endforeach
        <div class="text-center mt-3">
            <button class="btn btn-success"><a href="{{url('allPlaces')}}" style="text-decoration: none;color:white">View all</a> </button>

        </div>
    </div>

</div>

<hr>

<div class="container pt-5 mt-3">
    <h2>Our Products </h2>
    <p class="text-muted"> You can see each of the Products, edit or delete anything from them. Just click View All to get started.</p>
    <div class="row">
        @foreach ($products as $product )
        <div class="col-md-4">
            <div class="card " style="height: 80%">
                <img src="{{asset("storage/$product->image")}}" class=" w-100 h-75 ">
                <div class="card-body text-center">
                    <h5>{{$product->name}}</h5>
                </div>
              </div>

        </div>
        @endforeach
        <div class="text-center">
            <button class="btn btn-success"><a href="{{url('allProducts')}}" style="text-decoration: none;color:white">View all</a> </button>

        </div>
    </div>

</div>
<hr>

<section class="container mt-5">
    <h2>Our Messages</h2>
    <p class="text-muted">You can respond to users and solve their problems</p>
    
  @if (count($messages) > 0)
  @foreach ( $messages as $message )
  <div class=" container py-3 my-3 bg-dark shadow-lg">
      <h4>Name : {{$message->name}}</h4>
      <h5>Email: {{$message->email}}</h5>
      <p>Message : {{$message->message}}</p>
      <div>
          <button class="btn btn-primary"><a href="{{url('response',[$message->email, $message->id])}}" class="text-decoration-none text-white">Response</a></button>
          <button class="btn btn-danger "><a href="{{url('warning',[$message->email, $message->id])}}" class="text-decoration-none text-white">Warning & Block</a></button>
      </div>
  </div>
  @endforeach
  <div class="text-center">
    <button class="btn btn-success"><a href="{{url('messages')}}" style="text-decoration: none;color:white">View all</a> </button>

</div>
      
  @else
  <h3 class="text-center py-3 text-success">There are no messages </h3>
      
  @endif

  <hr>
</section>



<section class="container mt-5">
    <h2>Our Trips</h2>
    <p class="text-muted">You can see all the trips that have been booked</p>
    
  @if (count($trips) > 0)
  @foreach ( $trips as $trip )
  <div class=" container py-3 my-3 bg-dark shadow-lg">
      <h4>Name : {{$trip->name}}</h4>
      <h5>Email: {{$trip->email}}</h5>
      <h5>Program : {{$trip->program}}</h5>
      <h5> Date: {{$trip->date}}</h5>
      <h5> Phone: {{$trip->phone}}</h5>
      <h5>Number of adults : {{$trip->number_of_adults}}</h5>
      <h5> Number of kids: {{$trip->number_of_kids}}</h5>

     
  </div>
  @endforeach
  <div class="text-center">
    <button class="btn btn-success"><a href="{{url('tripsAdmin')}}" style="text-decoration: none;color:white">View all</a> </button>

</div>
      
  @else
  <h3 class="text-center py-3 text-success">There are no trips </h3>
      
  @endif

  <hr>
</section>

@endsection
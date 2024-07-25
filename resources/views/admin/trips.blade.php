@extends('admin.layout')

@section('body')

@include('success')

<section class="container mt-3">
    <h2>Our Trips</h2>
    
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

      <form method="POST" action="{{ url('tripsAdmin', [$trip->id]) }}" class="d-inline">
        @method("DELETE")
        @csrf
        <button class="btn btn-danger"><a style="text-decoration:none" >Delete</a></button>
    </form>
  </div>

  @endforeach

      
  @else
  <h3 class="text-center py-3 text-success">There are no trips </h3>
      
  @endif

  <hr>
</section>

@endsection
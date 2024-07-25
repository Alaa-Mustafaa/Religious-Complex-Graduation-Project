@extends('admin.layout')

@section('body')
@include('success')
    
<h1 class="py-3">Messages</h1>
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

      
@else
<h3 class="text-center py-3 text-success">There are no messages </h3>
<hr>

@endif

@endsection
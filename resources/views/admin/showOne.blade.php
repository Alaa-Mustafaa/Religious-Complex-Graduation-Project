@extends('admin.layout')

@section('body')
@include('error')

<div class="row">
    <div class="col-6">
        <h2>{{$place->name}}</h2>
        <p class="text-justify">{{$place->desc1}}</p>
        <p class="text-justify">{{$place->desc1}}</p>
        <p class="text-justify">{{$place->desc2}}</p>
        <p class="text-justify">{{$place->desc3}}</p>
        <p class="text-justify">{{$place->desc4}}</p>
        <p class="text-justify">{{$place->desc5}}</p>
        <p class="text-justify">{{$place->desc6}}</p>
        <p class="text-justify">{{$place->desc7}}</p>
        <p class="text-justify">{{$place->desc8}}</p>
        <p class="text-justify">{{$place->desc9}}</p>
        <p class="text-justify">{{$place->desc10}}</p>
        <p class="text-justify">{{$place->calledreason}}</p>



         
    </div>

    <div class="col-6">
        <img src="{{asset("storage/$place->image")}}" alt="image" class='w-100'/>

    </div>

    <div>

    <button class="btn btn-success"><a href="{{ url('editplace', [$place->id]) }} "style="text-decoration:none;color:white">Update</a></button>

  <form method="POST" action="{{ url('allPlaces', [$place->id]) }}" class="d-inline">
    @method("DELETE")
    @csrf
    <button class="btn btn-danger"><a style="text-decoration:none" >Delete</a></button>
</form> 

    </div>

</div>

@endsection
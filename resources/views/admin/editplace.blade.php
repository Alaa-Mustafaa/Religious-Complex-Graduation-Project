@extends('admin.layout')

@section('body')
@include('error')

<form action="{{ url('/allPlaces', [$place->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Name :</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name='name' placeholder="{{$place->name}}">
    </div>

    <div class="mb-3">
      <label  class="form-label"> description 1: </label>
      <textarea class="form-control"  rows="3" name="desc1">{{$place->desc1}}</textarea>
    </div>      
    <div class="mb-3">
      <label  class="form-label"> description 2:</label>
      <textarea class="form-control"  rows="3" name="desc2">{{$place->desc2}}</textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label"> description 3:</label>
      <textarea class="form-control"  rows="3" name="desc3">{{$place->desc3}}</textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label"> description 4:</label>
      <textarea class="form-control"  rows="3" name="desc4">{{$place->desc4}}</textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label"> description 5:</label>
      <textarea class="form-control"  rows="3" name="desc5">{{$place->desc5}}</textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label"> description 6:</label>
      <textarea class="form-control"  rows="3" name="desc6">{{$place->desc6}}</textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label"> description 7:</label>
      <textarea class="form-control"  rows="3" name="desc7">{{$place->desc7}}</textarea>
    </div>

    <div class="mb-3">
      <label  class="form-label"> description 8: </label>
      <textarea class="form-control"  rows="3" name="desc8">{{$place->desc8}}</textarea>
    </div>

    <div class="mb-3">
      <label  class="form-label"> description 9: </label>
      <textarea class="form-control"  rows="3" name="desc9">{{$place->desc9}}</textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label"> description 10: </label>
      <textarea class="form-control"  rows="3" name="desc10">{{$place->desc10}}</textarea>
    </div>

    <div class="mb-3">
      <label  class="form-label">Called reason : </label>
      <textarea class="form-control"  rows="3" name="calledreason">{{$place->calledreason}}</textarea>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">First image of the place :</label>
      <img src="{{asset("storage/$place->image")}}" alt="image" class="w-25 mb-5"/>

    <div class="input-group">
      <input type="file" class="form-control" name="image4" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    </div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Second image of the place :</label>
      <img src="{{asset("storage/$place->imagee")}}" alt="image" class="w-25 mb-5"/>

    <div class="input-group">
      <input type="file" class="form-control" name="image4" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    </div>
    </div>


      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Third image of the place :</label>
        <img src="{{asset("storage/$place->imageee")}}" alt="image" class="w-25 mb-5"/>
  
      <div class="input-group">
        <input type="file" class="form-control" name="image4" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
      </div>
      </div>
  
      <button class="btn btn-success mb-3" type="submit">Submit</button>
  
  
  </form>
    
@endsection
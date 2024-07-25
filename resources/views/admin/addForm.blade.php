@extends('admin.layout')

@section('body')
@include('error')

<h1>Add your favorite place</h1>
<form action="{{url('allPlaces')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='name'>
      </div>

      <div class="mb-3">
        <label  class="form-label"> description 1: </label>
        <textarea class="form-control"  rows="3" name="desc1"></textarea>
      </div>      
      <div class="mb-3">
        <label  class="form-label"> description 2:</label>
        <textarea class="form-control"  rows="3" name="desc2"></textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label"> description 3:</label>
        <textarea class="form-control"  rows="3" name="desc3"></textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label"> description 4:</label>
        <textarea class="form-control"  rows="3" name="desc4"></textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label"> description 5:</label>
        <textarea class="form-control"  rows="3" name="desc5"></textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label"> description 6:</label>
        <textarea class="form-control"  rows="3" name="desc6"></textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label"> description 7:</label>
        <textarea class="form-control"  rows="3" name="desc7"></textarea>
      </div>

      <div class="mb-3">
        <label  class="form-label"> description 8: </label>
        <textarea class="form-control"  rows="3" name="desc8"></textarea>
      </div>

      <div class="mb-3">
        <label  class="form-label"> description 9: </label>
        <textarea class="form-control"  rows="3" name="desc9"></textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label"> description 10: </label>
        <textarea class="form-control"  rows="3" name="desc10"></textarea>
      </div>

      <div class="mb-3">
        <label  class="form-label">Called reason : </label>
        <textarea class="form-control"  rows="3" name="calledreason"></textarea>
      </div>

      <div class="mb-3">
      <label class="form-label">First image of the place :</label>
      <input type="file" class="form-control" name="image"/>
      </div>

      <div class="mb-3">
        <label class="form-label">Second image of the place :</label>
        <input type="file" class="form-control" name="imagee"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Third image of the place :</label>
            <input type="file" class="form-control" name="imageee"/>
            </div>


                <button type="submit" class="btn btn-primary">Add Your Place</button>

</form>
    
@endsection
@extends('admin.layout')

@section('body')
@include('error')
@include('success')
<div class="container mt-5">

                    <h2 class="card-title pb-3">Add your Own Product</h2>
                    <form action="{{ url("allProducts") }}"  method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group my-2">
                            
                            <label for="title" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="" name="name" >
                        </div>
                        <div class="form-group my-2">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="" name="desc" rows="3"></textarea>
                        </div>
                        <div class="form-group my-2">
                            <label for="size" class="form-label">Category:</label>
                            <input type="text" class="form-control" id="" name="category">
                        </div>
                        <div class="form-group my-2">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="" name="price">
                        </div>
                        <input type="file" name="image">
                        <button type="submit" class="btn btn-success px-5" name="submit">Submit</button>
                    </form>
         
</div>





</form> 
@endsection
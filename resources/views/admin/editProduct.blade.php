@extends('admin.layout')

@section('body')
@include('success')
<div class="container mt-5">

                    <h2 class="card-title pb-3">Edit your  Product</h2>
                    <form action="{{ url("allProducts/$product->id") }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group my-2">
                                <label for="title">Name:</label>
                                <input type="text" class="form-control" id="" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="" name="desc" rows="3" >{{ $product->desc }}</textarea>
                            </div>
                            <div class="form-group my-2">
                                <label for="size">Category:</label>
                                <input type="text" class="form-control" id="" name="category" value="{{ $product->category }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="" name="price" value="{{ $product->price }}">
                            </div>
                            <input type="file" name="image">
                            <img src="{{asset("storage/$product->image")}}" alt="" class="img-fluid w-25">

                            <button type="submit" class="btn btn-success px-5" name="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    </form> 
@endsection
@extends('admin.layout')

@section('body')
@include('success')
<div>
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Products Status</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Product image </th>
                    <th> Product name </th>
                    <th> Product's description </th>
                    <th> Product's price </th>
                    <th> Product's category </th>
                    <th> added_at </th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product )
                  <tr >
                      <td>
                        <img src="{{asset("storage/$product->image")}}" alt="image"/>
                      </td>
                    <td class="text-white ">{{$product->name}} </td>
                    <td class="text-white text-wrap text-justify"> {{$product->desc}} </td>
                    <td class="text-white text-wrap"> {{$product->price}} EGP</td>
                    <td class="text-white text-wrap text-justify">{{$product->category}}</td>
                    <td class="text-white">{{$product->created_at}}</td>
                    <td>
                      <button class="btn btn-primary"><a href="{{ url('showProduct', [$product->id]) }} "style="text-decoration:none;color:white">Show</a></button>

  
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
  </div>
@endsection
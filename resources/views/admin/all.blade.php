@extends('admin.layout')

@section('body')
@include('success')
<div>
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Places Status</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Place image 1 </th>
                    <th> Place image 2 </th>
                    <th> Place image 3 </th>

                    <th> Place name </th>
                    <th> Place's description </th>
                    <th> added_at </th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($places as $place )
                  <tr >
                    <td>
                      <img src="{{asset("storage/$place->image")}}" alt="image"/>
                    </td>
                    <td>
                        <img src="{{asset("storage/$place->imagee")}}" alt="image"/>
                      </td>
                      <td>
                        <img src="{{asset("storage/$place->imageee")}}" alt="image"/>
                      </td>
                    <td class="text-white ">{{$place->name}} </td>
                    <td class="text-white text-wrap text-justify"> {{$place->desc1}} </td>
                    <td class="text-white text-wrap text-justify"> {{$place->created_at}} </td>


                    <td>
                      <button class="btn btn-primary"><a href="{{ url('showOne', [$place->id]) }} "style="text-decoration:none;color:white">Show</a></button>

  
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
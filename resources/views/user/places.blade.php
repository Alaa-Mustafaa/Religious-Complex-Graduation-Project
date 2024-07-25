
 
@extends('user.layout')


@section('body')
   @foreach ($places as $place)

   <section class="pt-5 container me-5">
    <p class="text-primary">Church</p>
    <h1 class="pb-3">{{$place->title}}</h1>
    
    <div>
        <div class="row">
            <div class="col-md-9">
                <div class="row w-100">
                    <div class="col-12 ">
                        <img src="{{asset("storage/$place->image1")}}" class='w-100'>
                        
                        
                        
                    </div>
        
                </div>
        
                <div class="row pt-2 w-100">
                    <div class='col-md-4'>
                        <img src="{{asset("storage/$place->image2")}}" class='w-100'>
        
                    </div>
                    <div class='col-md-4'>
                        <img src="{{asset("storage/$place->image3")}}" class='w-100'>
        
                    </div>
                    <div class='col-md-4'>
                        <img src="{{asset("storage/$place->image4")}}" class='w-100'>
        
                    </div>
        
                </div>
            </div>
            
        
        <div class="col-md-3">
            <h3 style="color: #6886C5">Our Content</h3>
            <ul>
                <li>aaa</li>
                <li>aaa</li>
                <li>aaa</li>
                <li>aaa</li>
                <li>aaa</li>

            </ul>
        </div>
    </div>
    </div>
    
    <div class="w-75">
    <h5 class="text-primary pt-5">Why was this church called Abu Serga?</h5>
    <p class="pt-3  text-justify">{{$place->reason_of_name}}</p>

    <h5 class="text-primary pt-5">Church history</h5>
    <p class="pt-3  text-justify">{{$place->history}}</p>

    <p class="pt-3  text-justify">{{$place->history2}}</p>


    </div>

  </section> 
  
       
   @endforeach


@endsection
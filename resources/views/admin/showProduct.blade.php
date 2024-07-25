@extends('admin.layout')

@section('body')
@include('success')
<div class="container">
    <section id="about" class="pt-5 mb-5">
        <div class="container position-relative">
            <div class="row gy-5">
                <div class="col-lg-6 col-sm-12 ">
                    <div class=" position-relative">
                        <div class="me-2">
                            <img src="{{ asset("storage/$product->image") }}" class="w-100 border-start border-bottom">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 prod_data " style="margin-top: 100px;">
                    <div class="content">
                        <h1 class=""><span class="text-success ">{{ GoogleTranslate::trans('Title:',session()->get('lang'),'en'); }}</span> {{ GoogleTranslate::trans($product->name ,session()->get('lang'),'en'); }}</h1>
                        <h4 class="py-4">
                            <span class="text-success"> {{ GoogleTranslate::trans('Description::',session()->get('lang'),'en'); }}</span> {{ GoogleTranslate::trans($product->desc,session()->get('lang'),'en'); }}
                        </h4>
                        <h6 class="pb-4">
                            <span class="text-success">{{ GoogleTranslate::trans('Category:',session()->get('lang'),'en'); }} </span> {{ GoogleTranslate::trans($product->category ,session()->get('lang'),'en'); }}
                        </h6>
                        <p class="card-description">
                          {{ GoogleTranslate::trans($product->price  ,session()->get('lang'),'en'); }}  {{ GoogleTranslate::trans("EGP" ,session()->get('lang'),'en'); }} 
                        </p>


                     
                    </div>

                    <div class="d-flex justify-content-between mt-5">

                        <a href="{{ url("allProducts/edit/$product->id") }}"><button type="submit"
                                class="btn  btn-block   px-4 me-5 btn-success" name="submit">{{ GoogleTranslate::trans(' Edit',session()->get('lang'),'en'); }}</button>
                        </a>


                        <form action="{{ url("allProducts/$product->id") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ GoogleTranslate::trans(' Delete',session()->get('lang'),'en'); }}</button>
                        </form>
 


                    </div>

                </div>
            </div>
        </div>
    </section>

</div>



</form> 
@endsection
<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif

<head>
<title>{{ GoogleTranslate::trans(' Religious Complex | Show product',session()->get('lang'),'en'); }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body data-bs-theme="light">

    @include('products.nav')

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
                        <h1 class=""><span class="text-primary">{{ GoogleTranslate::trans('Title:',session()->get('lang'),'en'); }}</span> {{ GoogleTranslate::trans($product->name ,session()->get('lang'),'en'); }}</h1>
                        <h4 class="">
                            <span class="text-primary"> </span> {{ GoogleTranslate::trans($product->desc,session()->get('lang'),'en'); }}
                        </h4>
                        <h6 class="">
                            <span class="text-primary"> </span> {{ GoogleTranslate::trans($product->category ,session()->get('lang'),'en'); }}
                        </h6>
                        <p class="card-description">
                          {{ GoogleTranslate::trans($product->price ,session()->get('lang'),'en'); }}
                        </p>


                        <div class="col-md-3 ">
                            <input type="hidden" value="{{ $product->id }}" class="prod_id">
                            <label for="Quantity"></label>
                            <div class="input-group text-center mb-3 w-100">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity " class="form-control text-center qty-input"
                                    value="1"></input>
                                <button class="input-group-text increment-btn">+</button>
                            </div>


                            <a><button type="submit" class="btn btn-outline-primary addtocartbtn mb-3 px-4 "> <i
                                        class="fa-solid fa-cart-shopping  pe-2   btn-outline-primary "></i>
                                        {{ GoogleTranslate::trans(' add to cart',session()->get('lang'),'en'); }}</button></a>

                            <button type="submit" class="btn btn-outline-danger addtowish "> <i
                                    class="fa-solid fa-heart btn-outline-danger pe-2  "></i>{{ GoogleTranslate::trans(' add to Wishlist',session()->get('lang'),'en'); }}</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5">
                        <a href="{{ url('products') }}"><i class="fa-solid fa-backward-fast me-5 fs-1"
                                id="icon"></i></a>
{{-- 
                        <a href="{{ url("products/edit/$product->id") }}"><button type="submit"
                                class="btn  btn-block  ms-5 px-4 me-5 btn-outline-primary" name="submit">{{ GoogleTranslate::trans(' Edit',session()->get('lang'),'en'); }}</button>
                        </a>


                        <form action="{{ url("products/$product->id") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger  px-4">{{ GoogleTranslate::trans(' Delete',session()->get('lang'),'en'); }}</button>
                        </form>
 --}}


                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="sec5 sect-pt4 route mb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a fs-1 text-secondary mb-5 mt-5">
                          {{ GoogleTranslate::trans(' Related Products',session()->get('lang'),'en'); }}
                        </h3>


                    </div>
                </div>
            </div>
            <div class="row gy-5">
                @foreach ($related as $related)
                    <div class="col-md-3">
                        <div class="card border-none" id="card">
                            <div class="card-img position-relative">
                                <div class="work-box">
                                    <div class="work-img">
                                        <figure class="figure3">
                                            <img src="{{ asset("storage/$related->image") }}" alt=""
                                                class="img-fluid border-start border-bottom" id="img">
                                        </figure>
                                    </div>
                                </div>


                                <div class="position-absolute top-25 end-25"> <a class="iconn"><i
                                            class="fa-solid fa-eye fs-5"></i></a> <br>
                                    <a class="iconn"><i class="fa-solid fa-heart fs-5"></i> </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">

                                </div>

                                <h6 class="card-description">
                                  {{ GoogleTranslate::trans($related->category,session()->get('lang'),'en'); }} 
                                </h6>
                                <h4 class="card-title">{{ GoogleTranslate::trans($related->name ,session()->get('lang'),'en'); }}</h4>
                                <h4 class="card-description">
                                  {{ GoogleTranslate::trans($related->desc,session()->get('lang'),'en'); }} 
                                </h4>
                                <p class="card-description">
                                  {{ GoogleTranslate::trans($related->price,session()->get('lang'),'en'); }} 
                                </p>



                                <a href="{{ url("products/show/$product->id") }}"
                                    class="btn btn-outline-dark px-5 ">{{ GoogleTranslate::trans(' details',session()->get('lang'),'en'); }}</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>






    <script>
        $(document).ready(function() {


            function loadcart() {
                $.ajax({
                    method: "GET",
                    url: "/loadcart",


                    primary: function(response) {
                        $('.cart-count').html('');
                        $('.cart-count').html(response.count);


                    }
                });
            }

            $('.addtocartbtn').click(function(e) {
                e.preventDefault();

                var product_id = $(this).closest('.prod_data').find('.prod_id').val();
                var product_qty = $(this).closest('.prod_data').find('.qty-input').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "/addtoCart",
                    data: {
                        'product_id': product_id,
                        'product_qty': product_qty,
                    },

                    success: function(response) {
                        alert(response.status);
                        loadcart();
                    }
                });
            });

            $('.increment-btn').click(function(e) {
                e.preventDefault();

                var inc_value = $('.qty-input').val();
                var value = parseInt(inc_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $('.qty-input').val(value);
                }

            });


            $('.decrement-btn').click(function(e) {
                e.preventDefault();

                var dec_value = $('.qty-input').val();
                var value = parseInt(dec_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    $('.qty-input').val(value);
                }

            });

            $('.addtowish').click(function(e) {
                e.preventDefault();

                var product_id = $(this).closest('.prod_data').find('.prod_id').val();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "/addtowish",
                    data: {
                        'product_id': product_id,

                    },

                    success: function(response) {
                        alert(response.status);
                    }
                });
            });
        });
    </script>





    <script>
        function myFunction() {
            var element = document.body;
            element.dataset.bsTheme =
                element.dataset.bsTheme == "light" ? "dark" : "light";
        }
    </script>


@include('user.footer')
</body>

</html>

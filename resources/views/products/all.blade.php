<!DOCTYPE html>
@if (session()->get('lang') == 'ar')
    <html dir="rtl">
@endif
@if (session()->get('lang') !== 'ar')
    <html dir="ltr">
@endif

<head>
    <title>{{ GoogleTranslate::trans('Religious Complex | shop ', session()->get('lang'), 'en') }}</title>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>






<body data-bs-theme="light">







    <nav class="navbar navbar-expand-lg bg-body">
        <div class="container">

            <div class="me-3">
                <i class="fa-solid fa-globe fs-1"></i>
            </div>

            <div class="logo mt-4">


                <h6 class=" word">{{ GoogleTranslate::trans('Religious Complex ', session()->get('lang'), 'en') }}</h6>

                <div class="d-flex justify-content-between mt-3 letter">
                    <p class="">{{ GoogleTranslate::trans(' S', session()->get('lang'), 'en') }}</p>
                    <p class="">{{ GoogleTranslate::trans('t ', session()->get('lang'), 'en') }}</p>
                    <p class="">{{ GoogleTranslate::trans(' o', session()->get('lang'), 'en') }}</p>
                    <p class="">{{ GoogleTranslate::trans(' r', session()->get('lang'), 'en') }}</p>
                    <p class="">{{ GoogleTranslate::trans(' e', session()->get('lang'), 'en') }}</p>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">



                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ url('products') }}">{{ GoogleTranslate::trans(' Home page', session()->get('lang'), 'en') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ url('cart') }}">{{ GoogleTranslate::trans(' Cart', session()->get('lang'), 'en') }}
                            <i class="fa-solid fa-cart-shopping position-relative"></i>
                            <span
                                class="position-absolute   translate-middle badge badge-pill bg-success cart-count">{{ GoogleTranslate::trans(' 0', session()->get('lang'), 'en') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ url('myorder') }}">{{ GoogleTranslate::trans(' My Orders', session()->get('lang'), 'en') }}</a>
                    </li>

                    {{--      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('map')}}">Map</a>
        </li> --}}

                    {{--         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('kid')}}">kid</a>
        </li>
 --}}

                    {{--     <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('triips/create')}}">trip</a>
        </li> --}}



                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ url('wishlist') }}">{{ GoogleTranslate::trans(' ', session()->get('lang'), 'en') }}WishList
                            <i class="fa-solid fa-heart position-relative text-danger fs-5"></i>
                            <span
                                class="position-absolute   translate-middle badge badge-pill bg-danger wish-count">{{ GoogleTranslate::trans(' ', session()->get('lang'), 'en') }}0</span>

                        </a>
                    </li>


                </ul>



                <div class="form-check form-switch mx-4">
                    <input class="form-check-input p-2" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                        checked onclick="myFunction()">
                </div>
                <div class="dropdown">

                    <button class="dropbtn" style="color: black">{{ session()->get('lang') }} <i
                            class="fa-sharp fa-solid fa-angle-down ps-1 "></i></button>

                    <div class="dropdown-content">
                        <a
                            href="{{ url('changeLang', ['en']) }}">{{ GoogleTranslate::trans('English ', session()->get('lang'), 'en') }}</a>
                        <a
                            href="{{ url('changeLang', ['ar']) }}">{{ GoogleTranslate::trans(' Arabic', session()->get('lang'), 'en') }}</a>
                        <a
                            href="{{ url('changeLang', ['fr']) }}">{{ GoogleTranslate::trans('French ', session()->get('lang'), 'en') }}</a>
                        <a
                            href="{{ url('changeLang', ['es']) }}">{{ GoogleTranslate::trans('Spanish ', session()->get('lang'), 'en') }}</a>
                        <a
                            href="{{ url('changeLang', ['de']) }}">{{ GoogleTranslate::trans('German ', session()->get('lang'), 'en') }}</a>
                        <a
                            href="{{ url('changeLang', ['it']) }}">{{ GoogleTranslate::trans(' Italian', session()->get('lang'), 'en') }}</a>
                        <a
                            href="{{ url('changeLang', ['ru']) }}">{{ GoogleTranslate::trans(' Russian', session()->get('lang'), 'en') }}</a>


                    </div>
                </div>

                <form class="d-flex" method="POST" action="{{ url('searchproduct') }}">
                    @csrf
                    <input class="form-control me-2" id="searchproduct" name="pname" type="search"
                        placeholder="{{ GoogleTranslate::trans(' ', session()->get('lang'), 'en') }}Search Products">
                    <button class="input-group-text" type="submit"><i class="fa fa-search"></i></button>

                </form>
                <button class="btn ms-2" style="background-color: #6886c5; color: white">
                    <a href="{{ url('logout') }}"
                        class="text-white text-decoration-none">{{ GoogleTranslate::trans('logout ', session()->get('lang'), 'en') }}</a>

                </button>

                <!-- <div>
        <input id="input">
        <button onclick="speak()">speak</button>
      </div> -->


            </div>



        </div>

    </nav>



    <div class=" position-relative">
        <div class="div mx-5">
        </div>
        <div class="position-absolute text-center top-50  ms-5 text-white ">
            <h1 class="ms-5">{{ GoogleTranslate::trans(' Welcome To Our Store', session()->get('lang'), 'en') }}</h1>
            <br>
            <h5 class="ms-5 text-center">{{ GoogleTranslate::trans(' Modern. Awesome.', session()->get('lang'), 'en') }}
            </h5><br>
            <div class="text-center"><button type="button"
                    class="btn btn-outline-light ms-5 px-5">{{ GoogleTranslate::trans(' Shop Now', session()->get('lang'), 'en') }}</button>
            </div>
        </div>

    </div>





    <section class="sec5 sect-pt4 route mb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a fs-1 text-secondary mb-5 mt-5">
                            {{ GoogleTranslate::trans('BestSeller Product ', session()->get('lang'), 'en') }}
                        </h3>


                    </div>
                </div>
            </div>
            <div class="row gy-5">
                @foreach ($categories as $categories)
                    <div class="col-md-3">
                        <a href="{{ url("products/show/$categories->id") }}">
                            <div class="card border-none" id="card">
                                <div class="card-img position-relative">
                                    <div class="work-box">
                                        <div class="work-img">
                                            <figure class="figure1">
                                                <img class="img-fluid border-start border-bottom" id="img"
                                                    src="{{ asset("storage/$categories->image") }}" alt="">
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

                                    <h6 class="card-description d-none">
                                        {{ GoogleTranslate::trans($categories->category, session()->get('lang'), 'en') }}
                                    </h6>
                                    <h4 class="card-title">
                                        {{ GoogleTranslate::trans($categories->name, session()->get('lang'), 'en') }}
                                    </h4>
                                    <h4 class="card-description text-secondary fs-6">
                                        {{ GoogleTranslate::trans($categories->desc, session()->get('lang'), 'en') }}
                                    </h4>
                                    <p class="card-description">
                                        {{ GoogleTranslate::trans($categories->price, session()->get('lang'), 'en') }}
                                    </p>


                                    <!-- <a href="{{ url("products/show/$categories->id") }}" class="btn btn-success px-5 ">details</a> -->
                                </div>

                            </div>
                    </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>




    <div class="container mt-5 " style="margin-bottom: 200px;">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="work-box">
                    <div class="work-img">
                        <figure class="figure1">
                            <img src="{{ URL('images/ccc.webp') }}" alt="" class="img-fluid" width="900"
                                id="img2">
                        </figure>
                    </div>
                </div>

                <h1 class="text-center mt-3">
                    {{ GoogleTranslate::trans('All your needs are here - Ideal every day. ', session()->get('lang'), 'en') }}
                </h1>
                <div class="text-center">
                    <button type="button"
                        class="btn btn-outline-dark mt-3 px-5 text-center ">{{ GoogleTranslate::trans('Shop now ', session()->get('lang'), 'en') }}</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="work-box">
                    <div class="work-img">
                        <figure class="figure2">
                            <img src="{{ URL('images/11 (1).png') }}" alt="" class="img-fluid  "
                                width="600" id="imgg">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section id="Home" class="mb-5">
        <div class="layer1">

            <div class="text-center text-white position-absolute top-50 start-50 translate-middle">
                <h1 class="h1 fw-bolder fs-1">
                    {{ GoogleTranslate::trans(' Be different in your own way!', session()->get('lang'), 'en') }}</h1>
                <br>
                <h5>{{ GoogleTranslate::trans(' Find your unique Gifts.', session()->get('lang'), 'en') }}</h5>
                <button type="button"
                    class="btn btn-outline-light mt-3 px-5 text-center ">{{ GoogleTranslate::trans(' Shop now', session()->get('lang'), 'en') }}</button>
            </div>
        </div>



    </section>




    <section id="about" class="pt-5 mb-5">
        <div class="container position-relative">
            <div class="row gy-5">
                <div class="col-lg-6 col-sm-12">
                    <div class="imgg position-relative">
                        <div class="about-img me-2">
                            <img src="{{ URL('images/jc4.jpg') }}" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center  " style="margin-top: 300px;">
                    <div class="content">
                        <h2>{{ GoogleTranslate::trans(' Shop for unique Gifts.', session()->get('lang'), 'en') }}</h2>
                        <p>{{ GoogleTranslate::trans('Buy some products for you, your family and your friends so that you will have a beautiful memory of your visit. ', session()->get('lang'), 'en') }}
                        </p>
                    </div>
                    <button type="button"
                        class="btn btn-outline-dark px-5 text-center mt-3">{{ GoogleTranslate::trans(' Shop now', session()->get('lang'), 'en') }}</button>

                </div>
            </div>
        </div>
    </section>


    <section class="sec5 sect-pt4 route mb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <p class="mt-5">{{ GoogleTranslate::trans('Collection ', session()->get('lang'), 'en') }}</p>
                        <h3 class="title-a fs-1 text-secondary mb-5 mt-3">
                            {{ GoogleTranslate::trans(' All Products', session()->get('lang'), 'en') }}
                        </h3>


                    </div>
                </div>
            </div>
            <div class="row gy-5">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <a href="{{ url("products/show/$product->id") }}">
                            <div class="card border-none" id="card1">

                                <div class="card-img position-relative">
                                    <div class="work-box">
                                        <div class="work-img">
                                            <figure class="figure1">

                                                <img src="{{ asset("storage/$product->image") }}" alt=""
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
                                    <h1 class="card-title"><span
                                            class="text-success"></span>{{ GoogleTranslate::trans($product->name, session()->get('lang'), 'en') }}
                                    </h1>
                                    <h4 class="card-description text-secondary fs-6">
                                        <span class="text-success"> </span>
                                        {{ GoogleTranslate::trans($product->desc, session()->get('lang'), 'en') }}
                                    </h4>
                                    <h6 class="card-description d-none">
                                        <span class="text-success"> </span>
                                        {{ GoogleTranslate::trans($product->category, session()->get('lang'), 'en') }}
                                    </h6>
                                    <p class="card-description">
                                        {{ GoogleTranslate::trans($product->price, session()->get('lang'), 'en') }}
                                        {{ GoogleTranslate::trans('EGP', session()->get('lang'), 'en') }}
                                    </p>



                                    <a href="{{ url("products/show/$product->id") }}"
                                        class="btn btn-dark px-5 ">{{ GoogleTranslate::trans('details ', session()->get('lang'), 'en') }}</a>
                                </div>

                            </div>
                    </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="text-center mt-3" style="margin-bottom: 100px;">
            <h1>
                {{ GoogleTranslate::trans(' Reviews', session()->get('lang'), 'en') }}
            </h1>
            <h6 class="mt-4">
                {{ GoogleTranslate::trans(' “ A wonderful smelling candle that gives you comfort and a good feeling. Very high quality candle ”', session()->get('lang'), 'en') }}
            </h6>
        </div>

    </section>



    <div class="row g-0 w-100 mt-5">
        <div class="col-md-2">
            <img src="{{ URL('images/can 1.jpg') }}" alt="" class="img-fluid w-100">
        </div>


        <div class="col-md-2">
            <img src="{{ URL('images/q2.jpg') }}" alt="" class="img-fluid w-100 h-100">
        </div>

        <div class="col-md-2">
            <img src="{{ URL('images/ros5.jpg') }}" alt="" class="img-fluid w-100 h-100">
        </div>

        <div class="col-md-2">
            <img src="{{ URL('images/jc5.jpg') }}" alt="" class="img-fluid ">
        </div>

        <div class="col-md-2">
            <img src="{{ URL('images/ro1.jpg') }}" alt="" class="img-fluid w-100 h-100">
        </div>

        <div class="col-md-2">
            <img src="{{ URL('images/q3.jpg') }}" alt="" class="img-fluid w-100 h-100">
        </div>
    </div>


    <section id="services" class="sec2 pt-5 route mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="fs-1 mb-5 fs-1 fw-bolder p-4 text-center">
                            {{ GoogleTranslate::trans(' Services.', session()->get('lang'), 'en') }}
                        </h3>

                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4">
                    <div class="service-box bg-white pb-3 mb-4 rounded shadow-sm">
                        <div class="service-ico pt-5 text-center pb-2">
                            <span class="ico-circle"><i class="fa-solid fa-truck"></i><span>
                        </div>
                        <div class="service-content">
                            <h2 class=" text-center text-black fs-5">
                                {{ GoogleTranslate::trans('Free Shipping ', session()->get('lang'), 'en') }}</h2>
                            <p class=" text-center fs-6 text-secondary">
                                {{ GoogleTranslate::trans('Get Your first Order for Freeeeee.. ', session()->get('lang'), 'en') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box bg-white pb-3 mb-4 rounded shadow-sm">
                        <div class="service-ico pt-5 text-center pb-2 px-5">
                            <span class="ico-circle"><i class="fa-solid fa-arrows-spin"></i></span>
                        </div>
                        <div class="service-content ">
                            <h2 class=" text-center text-black fs-5">
                                {{ GoogleTranslate::trans('30 Days Return ', session()->get('lang'), 'en') }}</h2>
                            <p class="fs-6 text-center text-secondary">
                                {{ GoogleTranslate::trans(' You Change Or Return Your Products for 30 days.', session()->get('lang'), 'en') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box bg-white pb-3 mb-4 rounded shadow-sm">
                        <div class="service-ico pt-5 text-center pb-2 ">
                            <span class="ico-circle"><i class="fa-solid fa-satellite-dish"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class=" text-center text-black fs-5">
                                {{ GoogleTranslate::trans('Best Offers ', session()->get('lang'), 'en') }}</h2>
                            <p class="fs-6 text-center text-secondary">
                                {{ GoogleTranslate::trans(' Stay tuned for unexpected Offers and Saless.', session()->get('lang'), 'en') }}
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section id="contact" class="sec2 p-5 route mb-5">
        <div class="container">
            <div class="title text-center">
                <h3 class="fs-1 mb-5 fs-1 fw-bolder p-4 text-center">
                    {{ GoogleTranslate::trans(' Contact Us', session()->get('lang'), 'en') }}
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box text-center">
                        <div class="ico-circle mb-3">
                            <i class="fa-solid fa-location-arrow"></i>
                        </div>
                        <h6 class="fw-bolder">{{ GoogleTranslate::trans(' Address', session()->get('lang'), 'en') }}
                        </h6>
                        <p class="text-secondary">
                            {{ GoogleTranslate::trans(' Cairo Univerity - Giza', session()->get('lang'), 'en') }}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box text-center">
                        <div class="ico-circle mb-3">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h6 class="fw-bolder">{{ GoogleTranslate::trans(' Email', session()->get('lang'), 'en') }}</h6>
                        <p class="text-secondary">religiouscomplexx@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="service-box text-center">
                        <div class="ico-circle mb-3">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h6 class="fw-bolder">{{ GoogleTranslate::trans(' Phone', session()->get('lang'), 'en') }}</h6>
                        <p class="text-secondary">+20 010 2517 8918</p>
                    </div>
                </div>
            </div>

            <form action="{{ url('products') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gy-3 gx-2">
                    <div class="col-lg-6">
                        <input type="text" name="name" id=""
                            placeholder="{{ GoogleTranslate::trans(' Name', session()->get('lang'), 'en') }}"
                            class="form-control bg-body-secondary">

                    </div>
                    <div class="col-lg-6">
                        <input type="email" name="email" id=""
                            placeholder="{{ GoogleTranslate::trans(' Email', session()->get('lang'), 'en') }}"
                            class="form-control bg-body-secondary">

                    </div>
                    <div class="col-12">
                        <textarea name="message" id=""
                            placeholder="{{ GoogleTranslate::trans('Message ', session()->get('lang'), 'en') }}"
                            class="form-control bg-body-secondary"></textarea>
                    </div>
                    <div class="col-lg-2">
                        <button
                            class="button1 py-2 px-5">{{ GoogleTranslate::trans('Submit ', session()->get('lang'), 'en') }}</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
    @include('user.footer')



    <script>
        $(document).ready(function() {
            loadcart();
            loadwish();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function loadcart() {
                $.ajax({
                    method: "GET",
                    url: "/loadcart",


                    success: function(response) {
                        $('.cart-count').html('');
                        $('.cart-count').html(response.count);


                    }
                });
            }


            function loadwish() {
                $.ajax({
                    method: "GET",
                    url: "/loadwish",


                    success: function(response) {
                        $('.wish-count').html('');
                        $('.wish-count').html(response.count);


                    }
                });
            }
        });
    </script>



    <script>
        $(function() {
            var availableTags = [];


            $.ajax({
                method: "GET",
                url: "/list",


                success: function(response) {

                    start(response);
                }
            });

            function start(availableTags) {
                $("#searchproduct").autocomplete({
                    source: availableTags
                });
            }
        });
    </script>


    <script>
        function speak() {
            var text = document.getElementById("input").value;
            var utt = new SpeechSynthesisUtterance(text);
            speechSynthesis.speak(utt);
        }
    </script>



    <script>
        function myFunction() {
            var element = document.body;
            element.dataset.bsTheme =
                element.dataset.bsTheme == "dark" ? "light" : "dark";
        }
    </script>




    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

</body>

</html>

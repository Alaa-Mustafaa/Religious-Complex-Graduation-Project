<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places</title>
    <link rel="stylesheet" href="{{asset('home/assets/css/welcome.css')}}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <link rel="stylesheet" href="styles.css">

    <style>

        h1 {
            font-size: 3rem;
            color: #343a40;
        }

        .card-header {
            font-size: 1.25rem;
        }

        .card-body p {
            font-size: 1rem;
            line-height: 1.6;
            color: #495057;
        }

        .carousel-item img {
            height: 600px;
            object-fit: cover;
        }

        .carousel-caption h5 {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 0.5rem;
            border-radius: 0.25rem;
        }

        /* Custom Pagination Styles */
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .pagination .page-item {
            display: inline-block;
        }

        .pagination .page-item .page-link {
            font-size: 1rem;
            padding: 0.25rem 0.5rem;
            margin: 0 0.125rem;
            border-radius: 0.25rem;
        }
    </style>
</head>
<body>
    @include('user.nav')            
<section style="background-color: #f8f9fa;">
    <div class="container " >
    @foreach ($informations as $information)
        <div class="text-center py-5">
            <h1>{{ GoogleTranslate::trans( $information->name,session()->get('lang'),'en'); }}</h1>
        </div>
        @endforeach
        @foreach ($informations as $information)
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset("storage/$information->image")}}" class="d-block w-100" alt="Hanging Church Exterior">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ GoogleTranslate::trans($information->name,session()->get('lang'),'en'); }}</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset("storage/$information->imagee")}}" class="d-block w-100" alt="Hanging Church Entrance">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ GoogleTranslate::trans($information->name,session()->get('lang'),'en'); }}</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset("storage/$information->imageee")}}" class="d-block w-100" alt="Hanging Church Courtyard">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $information->name }}</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @endforeach

        @foreach ($informations as $information)
            <div class="card mt-5">
                <div class="card-header bg-primary text-white">{{ GoogleTranslate::trans( 'Name',session()->get('lang'),'en'); }}</div>
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->name ,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-primary text-white">{{ GoogleTranslate::trans('Historial background' ,session()->get('lang'),'en'); }}</div>
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc1,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
             
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc2,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
             
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc3,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
                
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc4,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
               
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc5,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
               
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc6 ,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
       
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc7,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
            
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc8 ,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
           
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc9,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4">
             
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->desc10,session()->get('lang'),'en'); }}</p>
                </div>
            </div>

            <div class="card mt-4 mb-5">
              
                <div class="card-body">
                    <p>{{ GoogleTranslate::trans($information->calledreason,session()->get('lang'),'en'); }}</p>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center mt-4">
            {!! $informations->links('pagination::bootstrap-4') !!}
        </div>
    </div>

</section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@include('user.footer')
</body>
</html>

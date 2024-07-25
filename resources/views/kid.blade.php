<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif
<head>


  <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">


<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>




@include('user.nav')









<div class="container">
    <div class="text-center text-secondary mt-3"><h1>{{ GoogleTranslate::trans('Play Your Own Game',session()->get('lang'),'en'); }}</h1></div>
    <div class="row mt-5">
        <div class="col-md-6">
        <img src="{{ URL('images/xo.png')}}" alt="" class="img-fluid border h-75 w-100">
      <diV class="text-center mt-3">  <a href="{{ url('/gamex')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fs-3">{{ GoogleTranslate::trans('Click here to play',session()->get('lang'),'en'); }}</a>  </diV>
        </div>
        <div class="col-md-6">
        <img src="{{ URL('images/game.png')}}" alt="" class="img-fluid border h-75" >
        <diV class="text-center mt-3">  <a href="{{ url('/game')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fs-3 ">{{ GoogleTranslate::trans('Click here to play',session()->get('lang'),'en'); }}</a>  </diV>
        </div>
    </div>

</div>


@include('user.footer')
</body>
</html>

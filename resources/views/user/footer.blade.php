
<footer class="bg-body-tertiary mt-5">
    <div class="container">
      <div class="row pt-5 pb-5">
        <div class="col-md-4 col-sm-12">
          <h4 style="color: #6886C5;">{{ GoogleTranslate::trans('',session()->get('lang'),'en'); }}Religious Complex</h4>
          <p class="text-muted text-justify pe-3">
            {{ GoogleTranslate::trans('Religious Complex in Egypt tells the story of coexistence
            through the ages. In the heart of Old Cairo, monuments of three
            religions intertwine to speak of tolerance and peace.',session()->get('lang'),'en'); }}
            
          </p>
        </div>
        <div class="col-md-2 col-sm-3">
          <ul class="list-unstyled  ps-2">
            <li><a href="{{url('/')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Home page',session()->get('lang'),'en'); }}</a></li>
            <li class="py-3"><a href="{{url('informations')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Places',session()->get('lang'),'en'); }}</a></li>
            <li><a href="{{url('/trip')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Trips',session()->get('lang'),'en'); }}</a></li>
            <li class="py-3"><a href="{{url('gallery')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Gallery',session()->get('lang'),'en'); }}</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3">
          <ul class="list-unstyled  ps-2">
            <li class="pb-3"><a href="{{url('/map')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Interactive map',session()->get('lang'),'en'); }}</a></li>
            <li><a href="{{url('/kid')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Games',session()->get('lang'),'en'); }}</a></li>
            <li class="py-3"><a href="{{url('/modell')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('3D models',session()->get('lang'),'en'); }}</a></li>
            <li><a href="{{url('/chatbot')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Chatbot',session()->get('lang'),'en'); }}</a></li>
          </ul>
        </div> 
        <div class="col-md-2 col-sm-3">
          <ul class="list-unstyled  ps-2">
            <li><a href="{{url('/loginForm')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Login',session()->get('lang'),'en'); }}</a></li>
            <li class="py-3"><a href="{{url('/registerForm')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Register',session()->get('lang'),'en'); }}</a></li>
            <li ><a href="{{url('/contact')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Contact us',session()->get('lang'),'en'); }}</a></li>
            <li class="py-3"><a href="{{url('/products')}}" class="text-decoration-none text-black">{{ GoogleTranslate::trans('Shop',session()->get('lang'),'en'); }}</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3">
          <p class="fw-bold">{{ GoogleTranslate::trans('Stay up to date',session()->get('lang'),'en'); }}</p>
          <input class="form-control" type="email" placeholder="Enter your email"/>
          <button class="btn  w-100 mt-4" style="background-color: #6886C5;color: white;">{{ GoogleTranslate::trans('Subscribe',session()->get('lang'),'en'); }}</button>
        </div>
      </div>
      <hr>
      <div class="pb-5 fs-5" >
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-instagram px-3"></i>
          <i class="fa-brands fa-google"></i>
      </div>
    </div>
  </footer>
  
  <script src="" async defer></script>
  

</body>
</html>
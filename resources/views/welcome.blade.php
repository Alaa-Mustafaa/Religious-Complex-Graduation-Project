<!DOCTYPE html>
{{-- {{ session()->put('lang','en')}}
 --}}@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Religious Complex</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('home/assets/css/welcome.css')}}" />
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}" />
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <script src="{{asset('home/assets/js/jquery.js')}}"></script>
    <script src="{{asset('build/assets/app-4ed993c7.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="bower_components/aos/dist/aos.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<script>
 function runOnce() {
    if (!sessionStorage.getItem('hasRun')) {
        console.log("Function is running for the first and only time.");
        // Your function code here
        sessionStorage.setItem('hasRun', 'true');
        sessionStorage.setItem('lang', 'en');

    } else {
        console.log("Function has already run.");
    }
}

// Example usage
runOnce(); 
</script>

  </head>
  <body>
  <section id="backround-image" style="background-image: url({{asset('home/assets/images/Kairo_-_Altkairo_05.jpg')}})">
      <div id="background-layer">
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg  p-3  " id="mynav" >
          <div class="container">
            <a
              class="navbar-brand fs-3 fw-medium"
              href="#"
              style="color: #6886c5"
              >{{ GoogleTranslate::trans('Religious Complex',session()->get('lang'),session()->put('en')); }}</a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                  <a
                    class="nav-link active text-white fs-5"
                    aria-current="page"
                    href="{{url('/')}}"
                    >{{ GoogleTranslate::trans('Home page',session()->get('lang'),'en'); }}</a
                  >
                </li>
                <li class="nav-item  px-3">
                  <a 
                    class="nav-link  text-white fs-5"
                    href="{{url('informations')}}"
                    role="button"
                    
                    >{{ GoogleTranslate::trans('Places ',session()->get('lang'),'en'); }}</a
                  >
                 
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white fs-5" href="{{url('about')}}">{{ GoogleTranslate::trans('About Us',session()->get('lang'),'en'); }}</a>
                </li>
               
                <li class="nav-item px-3">
                  <a class="nav-link text-white fs-5" href="{{url('contact')}}">{{ GoogleTranslate::trans('Contact Us',session()->get('lang'),'en'); }}</a>
                </li>

                @if(session()->has("access_token") && session()->has("role") == "admin")

                <li class="nav-item px-3">
                  <a class="nav-link text-white fs-5" href="{{url('adminn')}}">{{ GoogleTranslate::trans('Dashboard',session()->get('lang'),'en'); }}</a>
                </li>
                @endif

              </ul>

              @if(!session()->has("access_token"))
              <button class="btn me-2">
                <a href="{{url('loginForm')}}" class="text-decoration-none text-white">{{ GoogleTranslate::trans('Sign in ',session()->get('lang'),'en'); }}</a>
              </button>
              <button class="btn" style="background-color: #6886c5; color: white">
                <a href="{{url('registerForm')}}" class="text-white text-decoration-none">{{ GoogleTranslate::trans('Sign up ',session()->get('lang'),'en'); }}</a>
              </button>
              @endif

              @if(session()->has("access_token"))
              <button
              class="btn "
              style="background-color: #6886c5; color: white"
            >
              <a href="{{url('logout')}}" class="text-white text-decoration-none">{{ GoogleTranslate::trans('logout ',session()->get('lang'),'en'); }}</a>

            </button>
            @endif
            <div class="dropdown">
              
              <button class="dropbtn">{{session()->get('lang')}} <i class="fa-sharp fa-solid fa-angle-down ps-1 text-white"></i></button>

              <div class="dropdown-content">
                <a href="{{url('changeLang',['en'])}}">{{ GoogleTranslate::trans('English ',session()->get('lang'),'en'); }}</a>
                <a href="{{url('changeLang',['ar'])}}">{{ GoogleTranslate::trans(' Arabic',session()->get('lang'),'en'); }}</a>
                <a href="{{url('changeLang',['fr'])}}">{{ GoogleTranslate::trans('French ',session()->get('lang'),'en'); }}</a>
                <a href="{{url('changeLang',['es'])}}">{{ GoogleTranslate::trans('Spanish ',session()->get('lang'),'en'); }}</a>
                <a href="{{url('changeLang',['de'])}}">{{ GoogleTranslate::trans('German ',session()->get('lang'),'en'); }}</a>
                <a href="{{url('changeLang',['it'])}}">{{ GoogleTranslate::trans(' Italian',session()->get('lang'),'en'); }}</a>
                <a href="{{url('changeLang',['ru'])}}">{{ GoogleTranslate::trans(' Russian',session()->get('lang'),'en'); }}</a>
            


              </div>
            </div>
            
            </div>
          </div>
        </nav>
        <!-- End of  Navigation bar -->

        <!-- First section -->
        <div id="bg-layer" class=" h-75 d-flex align-items-center justify-content-center" >
          <div id="header-caption" class=" text-white text-center">
            <p>{{ GoogleTranslate::trans('Best Place To Visit ',session()->get('lang')); }}</p>
            <h1 class="pb-2">{{ GoogleTranslate::trans('Welcome to ',session()->get('lang'),'en'); }} <span style="color: #6886c5;" >{{ GoogleTranslate::trans('Religious Complex ',session()->get('lang'),'en'); }}</span> </h1>
            <p id="religions">{{ GoogleTranslate::trans(' Where tolerance and peace are in one place. Three religions :Jewish , Christian and Islamic ',session()->get('lang')); }} </p>
            <button class="btn rounded-pill mt-3 me-2" style="background-color: #6886c5; color:white"><a href="{{url('informations')}}" class="text-decoration-none text-white">{{ GoogleTranslate::trans('Explore',session()->get('lang'),'en'); }}</a></button>
            <button class="btn rounded-pill mt-3 btn-outline-primary" style="color:white;"><a href="{{url('trip')}}" class="text-decoration-none text-white">{{ GoogleTranslate::trans('Take a tour',session()->get('lang'),'en'); }}</a></button>

          </div>  
        </div>
    

        <!-- End of First section -->
      </div>
    </section>





    <section class="py-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5 col-sm-6">
            <img
              src="{{asset('home/assets/images/babylion.jpg')}}"
              class="w-100 rounded-2"
            />
          </div>
          <div class="col-md-5 col-sm-6 pt-3 "  >
            <p style="color: #6886c5" id="place">{{ GoogleTranslate::trans(' About the place ',session()->get('lang'),'en'); }}</p>
            <h2>{{ GoogleTranslate::trans(' Religious Complex : Where All Civilizations Meet ',session()->get('lang'),'en'); }}</h2>
            <p class="text-muted pt-3 text-justify " style="line-height: 2rem;">
              {{ GoogleTranslate::trans('  Egypt has always been a place for tolerance and coexistence, as it
              has always embraced all different faiths throughout its history.
              The evidence that shows that Egypt is a place for tolerance is the
              presence of many places of worship for Islam, Christianity, and
              Judaism in different places around the country, but the
              interesting thing is that many of them are gathered in one place
              which is the Religious Complex. ',session()->get('lang'),'en'); }}
             
            </p>

            <button class="btn rounded-pill mt-3" style="background-color: #6886c5; color:white"><a href="{{url('informations')}}" class="text-decoration-none text-white">{{ GoogleTranslate::trans(' Read more ',session()->get('lang'),'en'); }}</a></button>
          </div>
        </div>
      </div>
    </section>


    

    <section id="inspired-places" class="mt-5" style="background-image: url({{asset('home/assets/images/Inside_and_outside_the_Church_of_St._George_and_Hanging_Church_33.jfif')}})">
  <div id="places-layer">
    <div class="container py-5">
      <div class="ps-5">
        <p style="color: #6886c5;" class="fw-semibold pt-5 ps-5">{{ GoogleTranslate::trans(' HISTORICAL INFORMATION',session()->get('lang'),'en'); }}</p>
        <h2 class="ps-5">{{ GoogleTranslate::trans(' Inspired places',session()->get('lang'),'en'); }}</h2>
      </div>
        
        <div class="row  gx-2 py-5">
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-5 col-sm-5">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="{{asset('home/assets/images/375px-Hanging_Church-1.jfif')}}" class="w-100"/>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="{{asset('home/assets/images/2021-01-03.jpg')}}" class="w-100 pb-2"/>
                    </div>
                </div>
                <img src="{{asset("home/assets/images/20210420_115721.jpg")}}" class="w-100 "/>
    
            </div>
            <div class="col-md-5 col-sm-5 h-100">
                <img src="{{asset('home/assets/images/IMG_8191.jpg')}}" class="w-100 h-100"/>
            </div>
    
        </div>
    
       <div class="d-flex justify-content-center">
        <button class="btn rounded-pill mt-3" style="background-color: #6886c5; color:white"><a href="{{url('informations')}}" class="text-decoration-none text-white">{{ GoogleTranslate::trans('View more places ',session()->get('lang'),'en'); }}</a></button>
    
       </div>
       
    </div>
  </div>


</section>


<!-- More information -->
<section class="py-5">

  <div class="container py-5">
    <div class="row">
      <div class="col-md-1 col-sm-0 me-5" style="background-image: url({{asset('home/assets/images/pattern2.avif')}});"></div>
      <div class="col-md-4 col-sm-6">
        <p style="color: #6886c5;" class="fw-semibold pt-5  ">{{ GoogleTranslate::trans('MORE INFORMATION ',session()->get('lang'),'en'); }}</p>
        <h2>{{ GoogleTranslate::trans(" Egypt's religion complex tells the story of coexistence across the ages",session()->get('lang'),'en'); }}</h2>
       <p class="text-muted pt-3 text-justify " style="line-height: 2rem;">
        {{ GoogleTranslate::trans(' There are many places within the complex. There are 10 places, each place has 
        a different story and a different form of architecture for a different religion. 
        Learn more information about each place.',session()->get('lang'),'en'); }}
        </p>

        
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <img src="{{asset('home/assets/images/554px-Cairo,_chiesa_sospesa,_03.JPG')}}" class="w-100"/>
        
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="{{asset('home/assets/images/outdoor of church.jpg')}}" class="w-100"/>

        
          </div>

        </div>
        
      </div>


    </div>

  </div>

</section>
<!-- End of More information -->





<!-- Sign Up Section -->
<section>
  <div style="background-image: url({{asset('home/assets/images/Inside_and_outside_the_Church_of_St._George_and_Hanging_Church_33.jfif')}});
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  " >
  <div>
<div style="  background-color: rgba(255, 255, 255, 0.8);
height: 100%;">
<div class="p-5 text-center">
  <p>{{ GoogleTranslate::trans("Let's Go Make Some Memories ",session()->get('lang'),'en'); }} </p>
  <h2 class="pb-3">{{ GoogleTranslate::trans(' Sign up for new settler',session()->get('lang'),'en'); }}</h2>
    <p>
      {{ GoogleTranslate::trans(' Be friends with us and you will learn a lot of information',session()->get('lang'),'en'); }}
      </p>

  <div>
    <button class="btn btn-primary rounded-pill mt-3"><a href="{{url('registerForm')}}" class="text-white text-decoration-none">{{ GoogleTranslate::trans(' Sign Up',session()->get('lang'),'en'); }}</a></button>
  </div>
</div>


</div>
  </div>
  </div>
</section>
<!-- Sign Up Section -->


<!-- Gallery Section -->
<section class="py-5 container w-75">
  <p style="color: #6886c5;" class="fw-semibold pt-5 text-center">{{ GoogleTranslate::trans('GALLERY ',session()->get('lang'),'en'); }}</p>
  <h1  class="pb-5 text-center">{{ GoogleTranslate::trans('Check ',session()->get('lang'),'en'); }} <span style="color: #6886c5;" >{{ GoogleTranslate::trans('Our Gallery ',session()->get('lang'),'en'); }}</span> </h1>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="{{asset('home/assets/images/mo3alaka.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="{{asset('home/assets/images/2022-09-25.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{asset('home/assets/images/2022-10-11.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="{{asset('home/assets/images/Mosque_of_Amr_ibn_al-As.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{asset('home/assets/images/باحة_مسجد_عمرو_بن_العاص_والميضأة_1.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="{{asset('home/assets/images/2022-12-04.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>

<div class="text-center">
  <button class="btn rounded-pill mt-3 text-center" style="background-color: #6886c5; color:white"><a href="{{url('gallery')}}" class="text-decoration-none text-white">{{ GoogleTranslate::trans('See more photos ',session()->get('lang'),'en'); }}</a></button>

</div>

</section>
<!-- End of Gallery Section -->


<!-- Trips Section -->
<section class="py-5">
  <div style="background-image: url({{asset('home/assets/images/2020-10-21.jpg')}});
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;

  " >
  <div>
<div style="  background-color: rgba(255, 255, 255, 0.8);
height: 100%;">
<div class="container p-5">
  
<div class="row p-5">
  <div class="col-md-6 col-sm-12 pb-3">
    <p style="color: #6886c5;" class="fw-semibold pb-2">{{ GoogleTranslate::trans('TAKE A TOUR ',session()->get('lang'),'en'); }}</p>
    <h2>{{ GoogleTranslate::trans(' Discover Our Culture',session()->get('lang'),'en'); }}</h2>
    <p class=" pt-3 text-justify pe-4" style="line-height: 2rem;">
      {{ GoogleTranslate::trans('The journey to the Religious Complex is a journey between the three heavenly religions, 
      and there is a feeling of grace in this place. A trip that introduces you to the customs 
      and traditions of Egypt through the beauty and 
      sanctity of the place. Come here to learn about our culture and make unforgettable memories. ',session()->get('lang'),'en'); }} 
          </p>
    <button class="btn rounded-pill mt-3 text-center" style="background-color: #6886c5; color:white"><a href="{{url('trip')}}" class="text-decoration-none text-white">{{ GoogleTranslate::trans(' Book Now',session()->get('lang'),'en'); }}</a></button>
  </div>

  <div class="col-md-6 col-sm-12">

    <img class="w-100" src="{{asset('home/assets/images/2020-10-21.jpg')}}"/>

  </div>

</div>

</div>


</div>
  </div>
  </div>
</section>
<!-- End of Trips Section -->


<!--Our Contact information Section -->
<section class="container py-5 mt-5" >

  <div class="row">
    <div class="col-md-1 col-sm-0"></div>

    <div class="col-md-5 col-sm-12" style="background-image: url({{asset('home/assets/images/luxa.org-opacity-changed-alaa.jpg')}});background-size: contain;background-position: center center;background-repeat: no-repeat;">
      <div class="Contact-right-side">
        <p style="color: #6886c5" class="fw-semibold">{{ GoogleTranslate::trans(' FIND US',session()->get('lang'),'en'); }}</p>
        <h2>{{ GoogleTranslate::trans(' Contact information',session()->get('lang'),'en'); }}</h2>
        <p class="text-muted pt-2 " style="line-height: 2rem;">
          {{ GoogleTranslate::trans('  You can go to the Religious Complex through this information, 
          or if you encounter any problems or questions, send them to us. ',session()->get('lang'),'en'); }}
        
        </p>
        <p >{{ GoogleTranslate::trans(' Our details:',session()->get('lang'),'en'); }}</p>
        <div class="Contact-icons">
        <ol class="list-unstyled ps-1 py-3">
         <li class="py-2"><i class="fa-regular fa-map"></i><p class="d-inline-block ps-2">{{ GoogleTranslate::trans(' Kom Ghurab, Heliopolis District, Cairo Governorate, Egypt',session()->get('lang'),'en'); }}</p></li>
         <li class="py-2"><i class="fa-regular fa-clock "></i><p class="d-inline-block ps-2" >{{ GoogleTranslate::trans('All days of the week. 9 am - 4 pm ',session()->get('lang'),'en'); }}</p></li>
         <li class="pt-2"><i class="fa-sharp fa-regular fa-envelope"></i><p class="d-inline-block ps-2" >religiouscomplexx@gmail.com</p></li>
        </ol>
        </div>
      </div>  

    </div> 
    <div class="col-md-5 col-sm-12">
      <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.0577463769177!2d31.23490282494017!3d30.006498220368506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458471113f98dbd%3A0x2ba9b71e47e693a!2z2YXYrNmF2Lkg2KfZhNiv2YrYp9mG2KfYqg!5e0!3m2!1sar!2slt!4v1706786300144!5m2!1sar!2slt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div> 
  </div>


</section>

<!-- End of Our Contact information Section -->


 
@include('user.footer')


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{asset('home/assets/css/welcome.css')}}" />
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Register</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset("user/register.css")}}" />
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}" />
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
  </head>
  <body>
    @include('user.nav')

    @include('error')
    <section>
      <div class="container pb-5">
        <div class="row  mt-5  rounded-5">
            <div class="col-1"></div>
         

          <div id="register_background" class="col-md-6 rounded-start-4 shadow-lg" style="background-image: url({{asset('home/assets/images/Inside_and_outside_the_Church_of_St._George_and_Hanging_Church_33.jfif')}})">
            


          </div>

          <div id="text-login" class="col-md-4 pt-5  ps-5 pb-5 shadow-lg rounded-end-4">
            <h3 class="pb-5 pt-5">Create an account</h3>

        <form action="{{url('register')}}" method="POST" enctype="multipart/form-data">
          @csrf

            <div class="wrap-input100 validate-input  mb-4 "  style="width:85%">
                <input class="input100" type="text" name="name" placeholder="Name">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

                <div class="wrap-input100 validate-input " style="width:85%">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    </div>

                    <div class="wrap-input100 validate-input  mt-4 "  style="width:85%">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input  mt-4 "  style="width:85%">
                      <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                      <span class="focus-input100"></span>
                      <span class="symbol-input100">
                          <i class="fa-solid fa-lock" aria-hidden="true"></i>
                      </span>
                  </div>



                    <button class="btn rounded-pill w-25 mt-5 mb-5 ms-3 d-flex justify-content-center" style="background-color:#6886C5;color:white">Sign Up</button>
                    

        </form>
        <div class="d-flex justify-content-center pt-5"> 
          <p>Do you have an account ? <a style="color: #6886C5;" href="{{url('loginForm')}}">Sign In</a></p>
        </div>
<div class="pb-5">

</div>
          </div>
        </div>
      </div>
    </section>




    <script src="" async defer></script>
    @include('user.footer')

  </body>
</html>

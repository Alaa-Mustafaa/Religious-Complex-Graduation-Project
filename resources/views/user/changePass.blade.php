<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Change Password</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset("user/login.css")}}" />
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
   

  </head>
  <body>
@include('user.nav')
    <div class="container bg-body-tertiary p-5 w-75 my-5 shadow-sm">
        <h3>Enter your new password</h3>
        <form method="POST" action="{{ url('change') }}">
            @csrf
            <label class="label-control py-3">New password :</label>
            <div class="wrap-input100 validate-input  mb-4 "  style="width:85%">
                <input class="input100" type="text" name="newPassword" placeholder="New Password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
                </div>

                <div class="wrap-input100 validate-input  mb-4 "  style="width:85%">
                    <input class="input100" type="text" name="newPassword_confirmation" placeholder="Confirm Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    </div>
                
            <p class="pt-4 text-muted" >Your password will be changed. </p>
            <button class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

@include('user.footer')
  </body>
</html>
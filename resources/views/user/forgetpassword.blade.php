<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forget Password</title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}" />
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
   

  </head>
  <body>
@include('user.nav')
    
    <div class="container bg-body-tertiary p-5 w-75 my-5 shadow-sm">
        <h3>Enter your email to send verification code</h3>
        <form method="POST" action="{{ url('code') }}">
            @csrf
            <label class="label-control py-3">Email Address :</label>
            <input type="email" name="email" class="form-control w-75"/>
            <p class="pt-4 text-muted" >A code will be sent to your email in order to make sure that you are the one who wants to change the password. </p>
            <button class="btn btn-primary mt-4">Send a code</button>
        </form>
    </div>

@include('user.footer')
  </body>
</html>
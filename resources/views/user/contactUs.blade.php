<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif 
  <head>
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('home/assets/css/welcome.css')}}" />
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}" />
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <title>Contact Us</title>
  </head>
  <body>
    @include('user.nav')
    <section id="contact">
        @include('error')
        @include('success')
       

@if(session()->has('block_message'))
<div class="container mt-5 w-75">
  <div class="alert alert-danger ">
    You are blocked
    </div>
</div>
  
@endif


<section class="container pt-5">
<div class="row">
  <div class="col-md-6">
    <h1 class="section-header py-2" style="color: #6886c5">Contact Us</h1>
    <div class="contact-wrapper">
      <!-- Left contact page -->
      <form action="{{url('contact')}}" method="post" id="contact-form" role="form">
          @csrf
        <!-- <label for="name" class="labels"> Name</label> -->

        <div class="form-group">
          <div class="col-sm-12">
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Name"
              value=""
              required
            /><br />
          </div>
        </div>
        <!-- <label for="mail" class="labels"> Email</label> -->
        <div class="form-group">
          <div class="col-sm-12">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Email"
              class="form-control"
              value=""
              required
            /><br />
          </div>
        </div>
        <!-- <label for="message" class="labels"> Message</label> -->
        <textarea
          id="mess"
          name="message"
          placeholder="MESSAGE"
          class="form-control"
          rows="10"
          
        ></textarea
        ><br />
  <button
          class="btn btn-primary send-button"
          id="submit"
          type="submit"
          value="SEND"
        >
          <div class="alt-send-button">
            <i class="fa fa-paper-plane"></i
            ><span class="send-text ps-3">SEND</span>
          </div>
        </button> 
      </form>

  </div>


        <!-- Left contact page -->
        
      </div>

      <div class="col-md-6">

      </div>

  
</div>
    </section>


    @include('user.footer')
  </body>
</html>

<nav class="navbar p-0 fixed-top d-flex flex-row">

          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            </button>
            <ul class="navbar-nav w-100">

            </ul>
            <ul class="navbar-nav navbar-nav-right me-3">
              
              @if(session()->has("access_token"))
              <button
              class="btn btn-success"
              style=" color: white"
            >
              <a href="{{url('logout')}}" class="text-white text-decoration-none">Logout</a>
  
            </button>
            @endif


            </ul>
   
          </div>
        </nav>
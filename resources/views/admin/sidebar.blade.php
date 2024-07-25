<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        </div>
        <ul class="nav">
          <div class="text-center">
            <h3>Religious Complex </h3>
            <p class="text-muted">( Admin Page )</p>
          </div>
         
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{session()->get('name')}}</h5>
                  <span>Admin Member</span>
                </div>
              </div>

            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('adminn')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-house"></i>
                            </span>
              <span class="menu-title">Home Page</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('messages')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-envelope"></i>
                            </span>
              <span class="menu-title">Messages</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-globe"></i>
                            </span>
              <span class="menu-title">Our website</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="fa-solid fa-place-of-worship"></i>              </span>
              <span class="menu-title">Places</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('allPlaces')}}">All Places</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('addplace')}}">Add New Place</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
              <span class="menu-icon">
                <i class="fa-solid fa-shirt"></i>
                            </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-product">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('allProducts')}}">All Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('addproduct')}}">Add New Product</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('tripsAdmin')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-plane"></i>              </span>
              <span class="menu-title">Trips</span>
            </a>
          </li>


        </ul>
      </nav>
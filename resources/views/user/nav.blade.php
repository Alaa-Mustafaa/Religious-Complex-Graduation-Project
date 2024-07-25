<head>
    <link rel="stylesheet" href="{{asset('home/assets/css/welcome.css')}}" />

</head>
<nav class="navbar navbar-expand-lg  p-3 shadow-sm  " id="mynav">
    <div class="container">
        <a class="navbar-brand fs-3 fw-medium" href="#"
            style="color: #6886c5">{{ GoogleTranslate::trans('Religious Complex', session()->get('lang'), 'en') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link active fs-5" aria-current="page"
                        href="{{ url('/') }}">{{ GoogleTranslate::trans('Home page', session()->get('lang'), 'en') }}</a>
                </li>
                <li class="nav-item  px-3">
                    <a class="nav-link  fs-5 text-black" href="{{ url('informations') }}"
                        role="button">{{ GoogleTranslate::trans('Places ', session()->get('lang'), 'en') }}</a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link fs-5 text-black"
                        href="{{ url('/about') }}">{{ GoogleTranslate::trans('About Us', session()->get('lang'), 'en') }}</a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link fs-5 text-black"
                        href="{{ url('contact') }}">{{ GoogleTranslate::trans('Contact Us', session()->get('lang'), 'en') }}</a>
                </li>
            </ul>

            @if (!session()->has('access_token'))
                <button class="btn me-2">
                    <a href="{{ url('loginForm') }}"
                        class="text-decoration-none text-black">{{ GoogleTranslate::trans('Sign in ', session()->get('lang'), 'en') }}</a>
                </button>
                <button class="btn" style="background-color: #6886c5; color: white">
                    <a href="{{ url('registerForm') }}"
                        class= "text-decoration-none text-white ">{{ GoogleTranslate::trans('Sign up ', session()->get('lang'), 'en') }}</a>
                </button>
            @endif

            @if (session()->has('access_token') && session()->has('role') == 'admin')
                <li class="nav-item px-3">
                    <a class="nav-link text-white fs-5"
                        href="{{ url('adminn') }}">{{ GoogleTranslate::trans('Dashboard', session()->get('lang'), 'en') }}</a>
                </li>
            @endif
            @if (session()->has('access_token'))
                <button class="btn" style="background-color: #6886c5; color: white">
                    <a href="{{ url('logout') }}"
                        class= "text-white text-decoration-none ">{{ GoogleTranslate::trans('logout ', session()->get('lang'), 'en') }}</a>

                </button>
            @endif
            <div class="dropdown">

                <button class="dropbtn text-black">{{ session()->get('lang') }} <i
                        class="fa-sharp fa-solid fa-angle-down ps-1 text-black"></i></button>

                <div class="dropdown-content">
                    <a
                        href="{{ url('changeLang', ['en']) }}">{{ GoogleTranslate::trans('English ', session()->get('lang'), 'en') }}</a>
                    <a
                        href="{{ url('changeLang', ['ar']) }}">{{ GoogleTranslate::trans(' Arabic', session()->get('lang'), 'en') }}</a>
                    <a
                        href="{{ url('changeLang', ['fr']) }}">{{ GoogleTranslate::trans('French ', session()->get('lang'), 'en') }}</a>
                    <a
                        href="{{ url('changeLang', ['es']) }}">{{ GoogleTranslate::trans('Spanish ', session()->get('lang'), 'en') }}</a>
                    <a
                        href="{{ url('changeLang', ['de']) }}">{{ GoogleTranslate::trans('German ', session()->get('lang'), 'en') }}</a>
                    <a
                        href="{{ url('changeLang', ['it']) }}">{{ GoogleTranslate::trans(' Italian', session()->get('lang'), 'en') }}</a>
                    <a
                        href="{{ url('changeLang', ['ru']) }}">{{ GoogleTranslate::trans(' Russian', session()->get('lang'), 'en') }}</a>




                </div>
            </div>

        </div>
    </div>
</nav>

@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif
  	<meta charset="UTF-8">
  <head>
	<title> About Us</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerr.css')}}">
  <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('home/assets/css/welcome.css')}}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>

<style>

._pericles_action_prev,
._pericles_action_next,
._pericles_action_play,
._pericles_action_stop,
._pericles_action_pause {
  cursor: pointer;
  font-size: 19px;
}

._pericles_action_prev:hover,
._pericles_action_next:hover,
._pericles_action_play:hover,
._pericles_action_stop:hover,
._pericles_action_pause:hover {
  font-size: 20px;
}

._pericles_action_prev:active,
._pericles_action_next:active,
._pericles_action_play:active,
._pericles_action_stop:active,
._pericles_action_pause:active {
  font-size: 19px;
}

img._pericles_action_icon {
  display: inline-block !important;
  width: 24px !important;
  height: 24px !important;
  margin: 0 !important;
  padding: 0 !important;
  vertical-align: top !important;
  opacity: 0.9 !important;
}

img._pericles_action_icon:hover {
  opacity: 1 !important;
}

ps-section,
ps-word {
  display: inline;
  margin: 0;
  padding: 0;
}

ps-word[data-audio-index]:hover {
  background: #ccc;
  cursor: crosshair;
}

ps-section {
  position: relative;
  cursor: pointer;
}

ps-section:hover {
  background: var(--pericles-section-background);
}

._pericles_action_container {
  border-radius: 4px;
  width: 50px;
  /* width: 74px; */
  height: 26px;
  /* background: linear-gradient(180deg, #ccc, transparent); */
  background: #eee;
  line-height: 32px;
  transition: opacity 0.55s ease-in-out;
  -moz-transition: opacity 0.55s ease-in-out;
  -webkit-transition: opacity 0.55s ease-in-out;
}

._pericles_inspector {
  border: 1px solid #000;
  background-color: rgba(102, 136, 253, 0.2) !important;
  color: #000 !important;
  /* opacity: 0.6; */
}

@keyframes _periclesFadeOut {
  0% {
    background: #ccc;
    color: #000;
  }

  100% {
    background: transparent;
    color: inherit;
  }
}
._pericles_word_tracker_style_fade,
._pericles_prev_word_tracker_style_fade {
  border-radius: 2px;
  text-shadow: none;
}

._pericles_prev_word_tracker_style_fade {
  background: transparent;
  animation: _periclesFadeOut 2s ease-out;
  color: inherit;
}

rect._pericles_section_highlight_style_background {
  fill: var(--pericles-section-background);
  opacity: 0.4;
}

._pericles_section_highlight_style_background {
  background: var(--pericles-section-background);
}

._pericles_section_highlight_style_border {
  border: 1px solid var(--pericles-section-background);
}

rect._pericles_section_highlight_style_border {
  stroke: var(--pericles-section-background);
}

._pericles_word_tracker_style_background {
  background: var(--pericles-word-background);
}

._pericles_word_tracker_style_underline {
  border-top: 1px solid var(--pericles-word-background);
  border-bottom: 1px solid var(--pericles-word-background);
}

._pericles_word_tracker_style_fade {
  background: var(--pericles-word-background);
  color: #fff;
}
.profile-card_image img{
  width: 50%;
  border-radius: 100%;
}
i{
  font-size: 20px;
  margin: 8px;
  color: #6886c5;
}

i:hover{
  color: #7b6746;
}
.topnav a{
	color: #000;
}
* {
    padding: 0%;
    margin: 0%;
}

</style>
</head>
<body>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
const header=document.querySelector("topnav");
window.onscroll=function(){
    var top=window.scrollY;
    if(top>=100)
    {
        header.classList.add("active");
    }else
    {header.classList.remove("active");}
}
</script>

@include('user.nav')
<section class="main-content" style="margin-top: 5%;">
		<div class="container">
			<h1 class="text-center" style="color:#6886c5">{{ GoogleTranslate::trans('Our ',session()->get('lang'),'en'); }} <b>{{ GoogleTranslate::trans('Team',session()->get('lang'),'en'); }}</b></h1>
			<br><br>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
						<div class="profile-card_image">
							<img src="{{asset('images/alaa.jpg')}}" alt="User" class="mb-4 shadow">
						</div>
						<div class="profile-card_details">
							<h3 class="mb-0">{{ GoogleTranslate::trans('Alaa Mostafa ',session()->get('lang'),'en'); }} </h3>
							<p class="text-muted" style="padding-top: 7%;margin-bottom:2%">{{ GoogleTranslate::trans('Full Stack Developer',session()->get('lang'),'en'); }}</p>
							<p class="text-muted">{{ GoogleTranslate::trans('I am a student in the Faculty of Archeology in the Department of Archaeological Information Systems',session()->get('lang'),'en'); }}</p>
						</div>
						<div class="profile-card_social text-center p-4">
							<a href="https://www.facebook.com/profile.php?id=100051718763254" class="d-inline-block">
              <i class="fa-brands fa-facebook-f"></i>
							</a>
							<a href="https://www.instagram.com/alaa.__mostafa/" class="d-inline-block">
              <i class="fa-brands fa-instagram"></i>
							</a>
							<a href="mailto:alan.mustafa.2002@gmail.com" class="d-inline-block">
              <i class="fa-regular fa-envelope"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
						<div class="profile-card_image">
							<img src="{{asset('images/gehan.jpg')}}" alt="User" class="mb-4 shadow">
						</div>
						<div class="profile-card_details">
							<h3 class="mb-0">{{ GoogleTranslate::trans('Gehan Ali ',session()->get('lang'),'en'); }} </h3>
							<p class="text-muted" style="margin-top: 7%;margin-bottom:2%">{{ GoogleTranslate::trans('Full Stack Developer',session()->get('lang'),'en'); }}</p>
							<p class="text-muted">{{ GoogleTranslate::trans('I am a student in the Faculty of Archeology in the Department of Archaeological Information Systems',session()->get('lang'),'en'); }}</p>
						</div>
						<div class="profile-card_social text-center p-4">
							<a href="https://www.facebook.com/profile.php?id=100068300017777" class="d-inline-block">
              <i class="fa-brands fa-facebook-f"></i>
							</a>
							<a href="https://www.instagram.com/gehanali.g/" class="d-inline-block">
              <i class="fa-brands fa-instagram"></i>
							</a>
							<a href="mailto:gegeeealinasr@gmail.com" class="d-inline-block">
              <i class="fa-regular fa-envelope"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
						<div class="profile-card_image">
							<img src="{{asset('images/rofyda.jpg')}}" alt="User" class="mb-4 shadow">
						</div>
						<div class="profile-card_details">
							<h3 class="mb-0">{{ GoogleTranslate::trans('Rofyda Sayed  ',session()->get('lang'),'en'); }}</h3>
							<p class="text-muted" style="margin-top: 7%;margin-bottom:2%">{{ GoogleTranslate::trans('Full Stack Developer ',session()->get('lang'),'en'); }}</p>
							<p class="text-muted">{{ GoogleTranslate::trans('I am a student in the Faculty of Archeology in the Department of Archaeological Information Systems',session()->get('lang'),'en'); }}</p>
						</div>
            <div class="profile-card_social text-center p-4">

            
							<a href="https://www.facebook.com/rofyda.sayed.3" class="d-inline-block">
              <i class="fa-brands fa-facebook-f"></i>
							</a>
							<a href="https://www.instagram.com/rofydasayed/" class="d-inline-block">
              <i class="fa-brands fa-instagram"></i>
							</a>
							<a href="mailto:rofydaelsaid@gmail.com" class="d-inline-block">
              <i class="fa-regular fa-envelope"></i>
							</a>
						</div>
					</div>
				</div>
			
		</div>
	</section>


<iframe id="_pericles_content_iframe" style="position: absolute; top: -99px; left: 0px; width: 50px; height: 26px; background: transparent; overflow: visible; margin-top: -30px; transition: top 2s ease-in-out 0s; z-index: 2147483647; border: none; padding: 0px;"></iframe>

@include('user.footer')
</body>
</html>

<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gallery</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600;700&amp;display=swap"/>
    </noscript>
    <link href="{{asset('home/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


  </head>

  <body id="top">

@include('user.nav')
    <!-- second section -->

    <div class="page">
      <div class="page-content">
        <div class="container">
          <div class="container px-0 py-4">
            <div class="pp-category-filter">
              <div class="row">
                <div class="col-sm-12">
                
                </div>
              </div>
            </div>
          </div>
          <div class="container px-0">
            <div class="pp-gallery">
              <div class="card-columns">
                <div class="card" data-groups='["nature"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all1.jpg')}}"
                        alt="Nature"
                      />
                      <figcaption>
                        <div class="h4">{{ GoogleTranslate::trans('Hanging ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Church ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["nature"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all10.JPG')}}"
                        alt="Nature"
                      />
                      <figcaption>
                        <div class="h4">{{ GoogleTranslate::trans(' St. Barbara',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Church ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["nature"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all11.jpg')}}
                        alt="Nature"
                      />
                      <figcaption>
                        <div class="h4">{{ GoogleTranslate::trans('St. Barbara ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Church',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["nature"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all2.jpg')}}"
                        alt="Nature"
                      />
                      <figcaption>
                        <div class="h4">{{ GoogleTranslate::trans('Virgin Mary ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Church',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["nature"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all19.jpg')}}"
                        alt="Nature"
                      />
                      <figcaption>
                        <div class="h4">{{ GoogleTranslate::trans('Coptic ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Museum',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["nature"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/amrmo.webp')}}"
                        alt="Nature"
                      />
                      <figcaption>
                        <div class="h4">{{ GoogleTranslate::trans("Amr ibn al-a'as",session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Mosque',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["people" , "nature"]'>
                  <a href="./asset/image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all14.jpg')}}"
                        alt="People"
                      />
                      <figcaption>
                        <div class="h4">{{ GoogleTranslate::trans(' st. Sergius',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Church ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["people"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/mari.jpg')}}"
                        alt="People"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans('St. George ',session()->get('lang'),'en'); }} </div>
                        <p>{{ GoogleTranslate::trans(' Mari Girgis Church',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["people"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/ben.jpg')}}"
                        alt="People"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans('Ben Ezra ',session()->get('lang'),'en'); }} </div>
                        <p>{{ GoogleTranslate::trans(' Synagogue',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["people"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all18.jpg')}}
                        alt="People"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans('Coptic ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Museum ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["people"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/mar.webp')}}"
                        alt="People"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans(' St. George',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Mari Girgis Church',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["people" , "nature"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all12.jpg')}}"
                        alt="People"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans('St. Barbara ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Church ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["computer"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/amr.jpg')}}"
                        alt="Computer"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans("Amr ibn al-a'as",session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Mosque',session()->get('lang'),'en'); }}Mosque</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["computer"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/hanging.webp')}}"
                        alt="Computer"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans('Hanging ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Church ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["computer"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/amr5.jpg')}}"
                        alt="Computer"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans("Amr ibn al-a'as ",session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Mosque ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["computer"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all16.jpeg')}}"
                        alt="Computer"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans(' Ben Ezra',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Synagogue ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["computer"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/aal2.jpg')}}"
                        alt="Computer"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans(' Hanging',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Church',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["food"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/mus.jpg')}}"
                        alt="Food"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans(' Coptic',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Museum ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["food"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all20.jpg')}}"
                        alt="Food"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans(' Coptic',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Museum',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["food"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/all3.jpg')}}"
                        alt="Food"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans('St. George ',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Mari Girgis Church',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["food"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/sirga.jpg')}}"
                        alt="Food"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans(' St. Sergius',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans(' Church',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
                <div class="card" data-groups='["food"]'>
                  <a href="image-detail.html">
                    <figure class="pp-effect">
                      <img
                        class="img-fluid"
                        src="{{asset('images/copticmuseum.jpg')}}"
                        alt="Food"
                      />
                      <figcaption>
                        <div class="h4"> {{ GoogleTranslate::trans(' Coptic',session()->get('lang'),'en'); }}</div>
                        <p>{{ GoogleTranslate::trans('Museum ',session()->get('lang'),'en'); }}</p>
                      </figcaption>
                    </figure></a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="pp-section"></div>
        </div>
      </div>
    </div>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{asset('js/mdb.umd.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    <!-- second section js files -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    @include('user.footer')
  </body>
</html>

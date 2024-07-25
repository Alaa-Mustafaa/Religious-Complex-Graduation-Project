
<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ GoogleTranslate::trans('Trip Form',session()->get('lang'),'en'); }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{url('css/boohing.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}" />
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>

        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body,html {
    height: 100%;
}

a {
    font-size: 14px;
    line-height: 1.7;
    color: #666;
    margin: 0;
    transition: all .4s;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s
}

a:focus {
    outline: none!important
}

a:hover {
    text-decoration: none;
    color: #57b846
}

h1,h2,h3,h4,h5,h6 {
    margin: 0
}

p {
    font-family: Montserrat-Regular;
    line-height: 1.7;
    margin: 0
}

ul,li {
    margin: 0;
    list-style-type: none
}

input {
    outline: none;
    border: none
}

textarea {
    outline: none;
    border: none
}

textarea:focus,input:focus {
    border-color: transparent!important
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

input:focus:-moz-placeholder {
    color: transparent
}

input:focus::-moz-placeholder {
    color: transparent
}

input:focus:-ms-input-placeholder {
    color: transparent
}

textarea:focus::-webkit-input-placeholder {
    color: transparent
}

textarea:focus:-moz-placeholder {
    color: transparent
}

textarea:focus::-moz-placeholder {
    color: transparent
}

textarea:focus:-ms-input-placeholder {
    color: transparent
}

input::-webkit-input-placeholder {
    color: #aaa
}

input:-moz-placeholder {
    color: #aaa
}

input::-moz-placeholder {
    color: #aaa
}

input:-ms-input-placeholder {
    color: #aaa
}

textarea::-webkit-input-placeholder {
    color: #aaa
}

textarea:-moz-placeholder {
    color: #aaa
}

textarea::-moz-placeholder {
    color: #aaa
}

textarea:-ms-input-placeholder {
    color: #aaa
}

button {
    outline: none!important;
    border: none;
    background: 0 0
}

button:hover {
    cursor: pointer
}

iframe {
    border: none!important
}

.bg-contact100 {
    width: 100%;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover
}

.container-contact100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background: rgba(132,106,221,.9)
}

.wrap-contact100 {
    width: 1163px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 110px 130px 157px 148px
}

.contact100-pic {
    width: 310px;
    padding-top: 55px
}

.contact100-pic img {
    max-width: 100%
}

.contact100-form {
    width: 390px
}

.contact100-form-title {
    display: block;
    font-family: Montserrat-ExtraBold;
    font-size: 24px;
    color: #333;
    line-height: 1.2;
    text-align: left;
    padding-bottom: 36px
}

input.input100 {
    height: 50px;
    border-radius: 25px;
    padding: 0 30px 0 50px
}

input.input100[name=email] {
    padding: 0 30px 0 54px
}

textarea.input100 {
    min-height: 150px;
    border-radius: 25px;
    padding: 14px 30px
}

.wrap-input100 {
    position: relative;
    width: 100%;
    z-index: 1;
    margin-bottom: 10px
}

.input100 {
    display: block;
    width: 100%;
    background: #e6e6e6;
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #666
}

.focus-input100 {
    display: block;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    box-shadow: 0 0;
    color: rgba(62, 12, 225, 0.5)
}

.input100:focus+.focus-input100 {
    -webkit-animation: anim-shadow .5s ease-in-out forwards;
    animation: anim-shadow .5s ease-in-out forwards
}

@-webkit-keyframes anim-shadow {
    to {
        box-shadow: 0 0 60px 25px;
        opacity: 0
    }
}

@keyframes anim-shadow {
    to {
        box-shadow: 0 0 60px 25px;
        opacity: 0
    }
}

.symbol-input100 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding-left: 30px;
    pointer-events: none;
    color: #aaa;
    font-size: 15px;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s
}

.input100:focus+.focus-input100+.symbol-input100 {
    color: #340db6;
    padding-left: 22px
}

.container-contact100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px
}

.contact100-form-btn {
    width: 100%;
    height: 50px;
    border-radius: 25px;
    background: #846add;
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #fff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s
}

.contact100-form-btn:hover {
    background: #333
}

@media(max-width: 1200px) {
    .contact100-pic {
        width:33.5%
    }

    .contact100-form {
        width: 44%
    }
}

@media(max-width: 992px) {
    .wrap-contact100 {
        padding:110px 80px 157px 90px
    }

    .contact100-pic {
        width: 35%
    }

    .contact100-form {
        width: 55%
    }
}

@media(max-width: 768px) {
    .wrap-contact100 {
        padding:110px 80px 157px
    }

    .contact100-pic {
        display: none
    }

    .contact100-form {
        width: 100%
    }
}

@media(max-width: 576px) {
    .wrap-contact100 {
        padding:110px 15px 157px
    }
}

.validate-input {
    position: relative
}

.alert-validate::before {
    content: attr(data-validate);
    position: absolute;
    max-width: 70%;
    background-color: #fff;
    border: 1px solid #c80000;
    border-radius: 13px;
    padding: 4px 25px 4px 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 8px;
    pointer-events: none;
    font-family: Montserrat-Medium;
    color: #c80000;
    font-size: 13px;
    line-height: 1.4;
    text-align: left;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity .4s;
    -o-transition: opacity .4s;
    -moz-transition: opacity .4s;
    transition: opacity .4s
}

.alert-validate::after {
    content: "\f06a";
    font-family: FontAwesome;
    display: block;
    position: absolute;
    color: #c80000;
    font-size: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 13px
}

.alert-validate:hover:before {
    visibility: visible;
    opacity: 1
}

@media(max-width: 992px) {
    .alert-validate::before {
        visibility:visible;
        opacity: 1
    }
}

.sign{
    border: 1px solid #333;
    border-radius: 25px;

}

 #register_background{
    background-size: cover;
    background-position: center center;
    
} 
.card {
      margin-bottom: 20px;
    }

    .box {
            color: #fff;
            display: inline-block;
            text-transform: uppercase;
          background-color: #0078ff;
    padding: 10px;
    margin-left: 120px;
    margin-top: -35;
    border-radius: 5px;
}
    </style>
  </head>
  <body>





@include('user.nav')

@include('error')

@include('success')

    <section>
      <div class="container pb-5" >
  
          

        <form id="triipForm" method="POST" action="{{ route('triips.store') }}" >
          @csrf

            <div class="wrap-input100 validate-input  mb-4 "  style="width:85%">
                <input class="input100" type="text" name="name" placeholder="{{ GoogleTranslate::trans('Name ',session()->get('lang'),'en'); }} ">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

                <div class="wrap-input100 validate-input " style="width:85%">
                    <input class="input100" type="text" name="email" placeholder="{{ GoogleTranslate::trans(' Email',session()->get('lang'),'en'); }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    </div>

                    <div class="wrap-input100 validate-input  mt-4 "  style="width:85%">
                        <input class="input100" type="text" id="phone" name="phone" required placeholder="{{ GoogleTranslate::trans(' Phone',session()->get('lang'),'en'); }} ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input  mt-4 "  style="width:85%">
                        <input class="input100" type="date" id="date" name="date" required placeholder="{{ GoogleTranslate::trans('Date ',session()->get('lang'),'en'); }} ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa-solid fa-calendar" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input  mt-4 "  style="width:85%">
                        <input class="input100" type="number" id="number_of_adults" name="number_of_adults" min="0" required placeholder="{{ GoogleTranslate::trans('Number of Adults ',session()->get('lang'),'en'); }} ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa-solid fa-person" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input  mt-4 "  style="width:85%">
                        <input class="input100" type="number" id="number_of_kids" name="number_of_kids" min="0" required placeholder="{{ GoogleTranslate::trans(' Number of Kids',session()->get('lang'),'en'); }} ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa-solid fa-children" aria-hidden="true"></i>
                        </span>
                    </div>

                  
                    <label for="program" class="mt-3 text-secondary mb-2">{{ GoogleTranslate::trans(' Program:',session()->get('lang'),'en'); }}</label>
        <select id="program" name="program"required>
            
            <option value="first program">{{ GoogleTranslate::trans('First Program',session()->get('lang'),'en'); }}</option>
            <option value="second program">{{ GoogleTranslate::trans('Second Program',session()->get('lang'),'en'); }}</option>

            
        </select><br>
                    

        <label for="total_price">{{ GoogleTranslate::trans('Total Price:',session()->get('lang'),'en'); }}</label>
        <span id="total_price">{{ GoogleTranslate::trans('0',session()->get('lang'),'en'); }}</span>{{ GoogleTranslate::trans(' EGP',session()->get('lang'),'en'); }} <br>

                    <button  type="submit" class="btn rounded-pill w-25 mt-5 mb-5 ms-3 d-flex justify-content-center" style="background-color:#6886C5;color:white">{{ GoogleTranslate::trans(' Submit',session()->get('lang'),'en'); }}</button>
                    

        </form>
      

          </div>
        </div>
      </div>
    </section>




    <script src="" async defer></script>

    <script>
        function calculateTotalPrice() {
            const adults = parseInt(document.getElementById('number_of_adults').value) || 0;
            const kids = parseInt(document.getElementById('number_of_kids').value) || 0;
            const totalPrice = (adults * 200) + (kids * 50);
            document.getElementById('total_price').innerText = totalPrice;
        }

        document.getElementById('number_of_adults').addEventListener('input', calculateTotalPrice);
        document.getElementById('number_of_kids').addEventListener('input', calculateTotalPrice);

        document.getElementById('triipForm').addEventListener('submit', function(e) {
            const totalPrice = document.getElementById('total_price').innerText;
            if (!totalPrice || parseInt(totalPrice) <= 0) {
                e.preventDefault();
                Swal.fire('Error', 'Please provide a valid number of adults or kids', 'error');
            }
        });
    </script>


  </body>
</html> 













    @include('user.footer')
</body>
</html> 

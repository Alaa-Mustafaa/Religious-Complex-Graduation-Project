<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="boohing.css" /> -->
  <link rel="stylesheet" href="{{url('css/boohing.css')}}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- <link rel="stylesheet" href="css/all.min.css" />
  <script src="js/all.min.js"></script> -->

 
  <title>Book-Now</title>
</head>

<body>



  <div class="sec-one">
    <div class="head-cont">
      <div class="habove">
        <h1 class="headabove">Relagiuos-Complex</h1>
      </div>
      <div class="parabove">
        <p class="pabove">
          The Complex of Religions is a significant religious and cultural
          site that boasts numerous archaeological sites related to
          monotheistic religions, especially churches. It is home to many
          stunningly designed and historically significant churches. We are
          delighted to offer you a fantastic opportunity to visit this place
          and explore all its essential sites. Our highly knowledgeable
          guides, specialized in this place, will provide you with a detailed
          explanation to ensure you have a memorable experience.
        </p>
      </div>
    </div>


    <div class="explore" >
      <div class="container">
        <a href="" class="button type--A" id="showButton">
          <div class="button__line"></div>
          <div class="button__line"></div>
          <span class="button__text" >Book-Now</span>
          <div class="button__drow1"></div>
          <div class="button__drow2"></div>
        </a>
      </div>
    </div>


  </div>
  
  <!-- second section -->
  <div class="inter-section">
    <div class="card">
      <div class="card-image" style="background-image: url(./asset/images/amr.jpg)"></div>
      <div class="card-content">
        <h2 class="card-title">First Program</h2>
        <p class="card-text">
          We offer a complete visit to the Religious Complex, which comprises
          several iconic places, including the Amr ibn al-Aas Mosque, the
          Hanging Church, St. George’s Church, St. Barbara’s Church, Abu Sarja
          Church, St. George’s Church for Nuns, Virgin Mary’s Church,
          Babylon’s Fortress, and Abraham Ibn Adra Temple. During the visit,
          our knowledgeable guide will provide you with a comprehensive
          explanation of each place, and you will also receive lovely gifts.
          These include a souvenir for visitors, a small booklet containing
          information about all the places visited, and gifts for children.
        </p>
        <div class="explore">
          <div class="container">
            <a href="" id="displayButton" class="button type--A">
              <div class="button__line"></div>
              <div class="button__line"></div>
              <span class="button__text">Book-Now</span>
              <div class="button__drow1"></div>
              <div class="button__drow2"></div>
            </a>
          </div>
        </div>
        <!-- <a href="#" class="card-button">Book Now</a> -->
      </div>
    </div>
    <div class="card">
      <div class="card-image" style="background-image: url(./asset/images/hang.avif)"></div>
      <div class="card-content">
        <h2 class="card-title">Second Program</h2>
        <p class="card-text">
          We offer a complete visit to the Religious Complex, which comprises
          several iconic places, including the Hanging Church, St. George’s
          Church, St. Barbara’s Church, Abu Sarja Church, St. George’s Church
          for Nuns, Virgin Mary’s Church, Babylon’s Fortress, and Abraham Ibn
          Adra Temple. During the visit, our knowledgeable guide will provide
          you with a comprehensive explanation of each place, and you will
          also receive lovely gifts. These include a souvenir for visitors, a
          small booklet containing information about all the places visited,
          and gifts for children.
        </p>
        <div class="explore">
          <div class="container">
            <a href="" id="presentButton" class="button type--A">
              <div class="button__line"></div>
              <div class="button__line"></div>
              <span class="button__text">Book-Now</span>
              <div class="button__drow1"></div>
              <div class="button__drow2"></div>
            </a>
          </div>
        </div>
        <!-- <a href="#" class="card-button">Book Now</a> -->
      </div>
    </div>
  </div>

  <!--form  -->

  
  @include("error")
  <div id="hiddenSection">
    <h1 class="Booking">Book Your Trip Now </h1>
    <div class="container">
      <form action="{{ route('trips.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="field" tabindex="1">
          <label for="username" class="labelstyle">
            <i class="fa-solid fa-user"></i></i> Your Name
          </label>
          <input class="mainstyle" name="name" type="text" placeholder="e.g. john doe" required />
        </div>

        <div class="field" tabindex="2">
          <label for="email" class="labelstyle"> <i class="fa-solid fa-envelope"></i></i> Your Email </label>
          <input class="mainstyle" name="email" type="text" placeholder="email@domain.com" required />
        </div>

        <div class="field" tabindex="3">
          <label for="date" class="labelstyle"><i class="fa-regular fa-calendar-days"></i> Date and Time </label>
          <input class="mainstyle" name="date" type="datetime-local" placeholder="dd-mm-yyyy --:-- --" required />
        </div>

        <div class="field" tabindex="4">
          <label for="phone" class="labelstyle"><i class="fa-solid fa-mobile-screen"></i> Your Phone Number </label>
          <input class="mainstyle" name="phone" type="number" placeholder="+20-15-xxxx-xxxx" />
        </div>


        <!-- for adult -->

        <div class="field" tabindex="5">
          <label for="adult-num" class="labelstyle"><i class="fa-solid fa-person"></i> Number of adult</label>
          <input class="mainstyle" name="adult" type="number" placeholder="e.g. 3" />
        </div>

        <!-- for kids -->

        <div class="field" tabindex="6">
          <label for="kid-num" class="labelstyle"><i class="fa-solid fa-children"></i> Number of kids</label>
          <input class="mainstyle" name="kids" type="number" placeholder="e.g. 2" />
        </div>

        <div class="field" tabindex="6">
          <label for="kid-num" class="labelstyle"><i class="fa-solid fa-children"></i> program</label>
          <input class="mainstyle" name="program" type="text" placeholder="e.g. 2" />
        </div>
        <!-- <div tabindex="7">
          <p>Choose your Program:</p>
          <div class="radio-side">
            <input name="Program" type="radio" value="Program one" />
            <label for="Program">First Program </label><br />
          </div>
        </div>
        <div tabindex="7">
          <div class="radio-side">
            <input name="Program" type="radio" value="Program two" />
            <label for="Program">Second Program</label><br />
          </div>
        </div> -->
        <!-- <button type="submit">Confirm</button> -->

        <div class="explore">
          <div class="container">
            <a href="" class="button type--A">
              <div class="button__line"></div>
              <div class="button__line"></div>
              <span class="button__text">Submit</span>
              <div class="button__drow1"></div>
              <div class="button__drow2"></div>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- <script src=""{{url('js/book.js')}}""></script> -->

  <script>

const showButton = document.getElementById('showButton');
const displayButton = document.getElementById('displayButton');
const presentButton = document.getElementById('presentButton');
const hiddenSection = document.getElementById('hiddenSection');

let isHidden = true; // Track the current visibility state

showButton.addEventListener('click', function(event) {
  event.preventDefault();
  if (isHidden) {
    hiddenSection.style.display = 'block';
    isHidden = false; // Update state after showing
    
  }
  // else {
  //   hiddenSection.style.display = 'none';
  //   isHidden = true; // Update state after hiding
   
  // }
});
displayButton.addEventListener('click', function(event) {
  event.preventDefault();
  if (isHidden) {
    hiddenSection.style.display = 'block';
    isHidden = false; // Update state after showing
    
   }
  // else {
  //   hiddenSection.style.display = 'none';
  //   isHidden = true; // Update state after hiding
   
  // }
});
presentButton.addEventListener('click', function(event) {
  event.preventDefault();
  if (isHidden) {
    hiddenSection.style.display = 'block';
    isHidden = false; // Update state after showing
    
  } 
  // else {
  //   hiddenSection.style.display = 'none';
  //   isHidden = true; // Update state after hiding
   
  // }
});








  </script>
</body>
</html>




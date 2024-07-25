<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif
<head>
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Map of Religious Sites in Egypt</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
   
    @include('user.nav')
    <h1 class="text-center py-5 text-seccondary">
        {{ GoogleTranslate::trans('Interactive Map of Religious Complex Sites in Egypt ',session()->get('lang')); }} </h1>
    <div id="map" class="container"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <script>

   
var map = L.map('map').setView([30.007413, 31.230878], 13);


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);


var locations = [
    {
        name: "The Hanging Church",
        coords: [30.005493, 31.230713],
        popup: "<img src='https://www.youregypttours.com/storage/896/1676280121.jpg' alt='The Hanging Church' width='200' />.<br><br><b>The Hanging Church: One of the oldest churches in Egypt</b>.<br>"
    },
    {
        name: "Ben Ezra Synagogue",
        coords: [30.006208, 31.230818],
        popup: "<img src='https://cdn.kastatic.org/ka-content-images/8f5e18d555a0952eec2e75bfa93ee82f70bc8831.jpg' alt='Ben Ezra Synagogue' width='200' />.<br><br><b>Ben Ezra Synagogue: An ancient Jewish synagogue in Cairo</b>.<br>"
    },
    {
        name: "Mosque of Amr ibn al-As",
        coords: [30.007905, 31.231546],
        popup: "<img src='https://cnn-arabic-images.cnn.io/cloudinary/image/upload/w_1920,c_scale,q_auto/cnnarabic/2020/05/24/images/155459.jpg' alt='Mosque of Amr ibn al-As' width='200' />.<br><br><b>Mosque of Amr ibn al-As: The oldest mosque in Africa</b>.<br>"
    },
    {
        name: "Babylon Fortress",
        coords: [30.007413, 31.230878],
        popup: "<img src='https://upload.wikimedia.org/wikipedia/commons/e/e0/Cairo_-_Coptic_area_-_Roman_Tower.JPG' alt='Babylon Fortress' width='200' />.<br><br><b>Babylon Fortress: An ancient fortress city or castle in the Delta of Egypt</b>.<br>"
    },
    {
        name: "The Church of St. George",
        coords: [30.005174, 31.231528],
        popup: "<img src='https://www.arabcont.com/Images/ProjectImage/MaryGerges02.jpg' alt='The Church of St. George' width='200' />.<br><br><b>The Church of St. George: A Greek Orthodox church within the Babylon Fortress</b>.<br>"
    },
    {
        name: "Coptic Museum",
        coords: [30.007556, 31.230162],
        popup: "<img src='https://www.cairo24.com/UploadCache/libfiles/92/5/600x338o/244.jpg' alt='Coptic Museum' width='200' />.<br><br><b>Coptic Museum: A museum in Coptic Cairo, Egypt with the largest collection of Egyptian Christian artifacts</b>.<br>"
    },
    {
        name: "Saints Sergius and Bacchus Church",
        coords: [30.005269, 31.232104],
        popup: "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Cairo%2C_chiesa_di_san_sergio_01.JPG/300px-Cairo%2C_chiesa_di_san_sergio_01.JPG' alt='Saints Sergius and Bacchus Church' width='200' />.<br><br><b>Saints Sergius and Bacchus Church: A Coptic church in Cairo, Egypt, built in the 4th century</b>.<br>"
    }
];


locations.forEach(function(location) {
    var marker = L.marker(location.coords).addTo(map);
    marker.bindPopup(location.popup).on('click', function() {
        map.setView(location.coords, 19); 
    });
});

    </script>

    @include('user.footer')
      
</body>
</html>
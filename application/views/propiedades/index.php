<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpzD5-Odk-ydfYzKKbOf_o6A-SZANr8v0&libraries=places&callback=initMap"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>
<script>
    var Niagara = {
        lat: -0.9592517572350272,
        lng: -78.61176985479092

    };
    var location2 = {
    lat: 46.234567,
    lng: 4.567890
  };
  var location3 = {
    lat: 47.345678,
    lng: 5.678901
  };

    
  function initMap() {
    var myOptions = {
      zoom: 18,
      center: Niagara,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById('mapa'), myOptions);

    marker = new google.maps.Marker({
      position: Niagara,
      map: map,
      title: 'Click to zoom'
    });
  }

  function changeCenter(center) {
      map.setCenter(center);
      marker.setPosition(center);
    }

    
</script>

    <div>
        <h1 class="text-center font-bold"> Propiedades</h1>

    </div>
    <div class="">
        <div class="col-md-3">
            <div>
                <h1>Titulo 1</h1>
                <button type="button" onclick="javascript:changeCenter(Niagara);">Niagara</button>
                <button type="button" onclick="javascript:changeCenter(location2);">Location 2</button>
                <button type="button" onclick="javascript:changeCenter(location3);">Location 3</button>
            </div>
            <br>
            <div>
                <h1>Titulo 2</h1>
            </div>
        </div>


        <div id="mapa" class="col-md-9 " style="height:700px; width:100%px;
            border:2px solid black;">

        </div>


    </div>
</body>




</html>
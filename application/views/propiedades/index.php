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
    <link href="https://unpkg.com/@popperjs/core@2" ">

    
</head>

<body>

    <script type=" text/javascript">
    var Niagara = {
    lat: -0.9592517572350272,
    lng: -78.61176985479092,
    zoom: 18

    };
    var Arupos = {
    lat: -0.911068331319405,
    lng: -78.63457789192677


    };
    var Vicente = {
    lat: -0.9335142881364938,
    lng: -78.61500984753664
    };


    function initMap() {


    var myOptions = {
    zoom: 18,
    center: Niagara,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    //Mapas Dentro del modal
    var myOptions1 = {
    zoom: 18,
    center: Niagara,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var myOptions2 = {
    zoom: 18,
    center: Niagara,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var myOptions3 = {
    zoom: 18,
    center: Niagara,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var myOptions4 = {
    zoom: 18,
    center: Niagara,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };


    map = new google.maps.Map(document.getElementById('mapa'), myOptions);
    map1 = new google.maps.Map(document.getElementById('mapa1'), myOptions1);
    map2 = new google.maps.Map(document.getElementById('mapa2'), myOptions2);
    map3 = new google.maps.Map(document.getElementById('mapa3'), myOptions3);
    map4 = new google.maps.Map(document.getElementById('mapa4'), myOptions4);


    marker = new google.maps.Marker({
    position: Niagara,
    map: map,
    title: 'Click to zoom',
    draggable: true
    });
    marker1 = new google.maps.Marker({
    position: Niagara,
    map: map1,
    title: 'Click to zoom',
    draggable: true
    });
    marker2 = new google.maps.Marker({
    position: Niagara,
    map: map2,
    title: 'Click to zoom',
    draggable: true
    });
    marker3 = new google.maps.Marker({
    position: Niagara,
    map: map3,
    title: 'Click to zoom',
    draggable: true
    });
    marker4 = new google.maps.Marker({
    position: Niagara,
    map: map4,
    title: 'Click to zoom',
    draggable: true
    });

    google.maps.event.addListener(
    marker1,
    'dragend',
    function(event) {
    var latitud1 = this.getPosition().lat();
    document.getElementById("latitud1_loc").setAttribute('value', latitud1);
    var longitud1 = this.getPosition().lng();
    document.getElementById("longitud1_loc").setAttribute('value', longitud1);
    console.log("Latitud: " + latitud1);
    console.log("Longitud: " + longitud1);

    }
    );
    google.maps.event.addListener(
    marker2,
    'dragend',
    function(event) {

    var latitud2 = this.getPosition().lat();
    document.getElementById("latitud2_loc").setAttribute('value', latitud2);
    var longitud2 = this.getPosition().lng();
    document.getElementById("longitud2_loc").setAttribute('value', longitud2);
    console.log("Latitud: " + latitud2);
    console.log("Longitud: " + longitud2);

    }
    );
    google.maps.event.addListener(
    marker3,
    'dragend',
    function(event) {

    var latitud3 = this.getPosition().lat();
    document.getElementById("latitud3_loc").setAttribute('value', latitud3);
    var longitud3 = this.getPosition().lng();
    document.getElementById("longitud3_loc").setAttribute('value', longitud3);
    console.log("Latitud: " + latitud3);
    console.log("Longitud: " + longitud3);

    }
    );
    google.maps.event.addListener(
    marker4,
    'dragend',
    function(event) {

    var latitud4 = this.getPosition().lat();
    document.getElementById("latitud4_loc").setAttribute('value', latitud4);
    var longitud4 = this.getPosition().lng();
    document.getElementById("longitud4_loc").setAttribute('value', longitud4);
    console.log("Latitud: " + latitud4);
    console.log("Longitud: " + longitud4);
    }
    );

    <?php if ($listadoPropiedades) : ?>
        <?php foreach ($listadoPropiedades->result() as $propiedadTemporal) : ?>

            var latitud_longitud1 = new google.maps.LatLng(<?php echo $propiedadTemporal->latitud1_loc; ?>, <?php echo $propiedadTemporal->longitud1_loc; ?>);
            console.log(latitud_longitud1);
            var latitud_longitud2 = new google.maps.LatLng(<?php echo $propiedadTemporal->latitud2_loc; ?>, <?php echo $propiedadTemporal->longitud2_loc; ?>);
            console.log(latitud_longitud2);
            var latitud_longitud3 = new google.maps.LatLng(<?php echo $propiedadTemporal->latitud3_loc; ?>, <?php echo $propiedadTemporal->longitud3_loc; ?>);
            console.log(latitud_longitud3);
            var latitud_longitud4 = new google.maps.LatLng(<?php echo $propiedadTemporal->latitud4_loc; ?>, <?php echo $propiedadTemporal->longitud4_loc; ?>);
            console.log(latitud_longitud4);
            var cuadrado = [
            latitud_longitud1,
            latitud_longitud2,
            latitud_longitud3,
            latitud_longitud4
            ];
            var poligono = new google.maps.Polygon({
            paths: cuadrado,
            strokeColor: "#40efff ",
            strokeOpacity: "0.5",
            strokeWeigth: 5,
            fillColor: "#541a8f",
            fillOpacity: "0.3"
            });
            poligono.setMap(map);






        <?php endforeach; ?>
    <?php endif; ?>






    }

    function changeCenter(center) {
    map.setCenter(center);
    map1.setCenter(center);
    map2.setCenter(center);
    map3.setCenter(center);
    map4.setCenter(center);
    marker.setPosition(center);

    }

    function changeCenterModal(center) {

    map1.setCenter(center);
    map2.setCenter(center);
    map3.setCenter(center);
    map4.setCenter(center);


    }


    function changeZoom(zoom) {
    map.setZoom(zoom);
    }

    function changeZoomModal(zoom) {
    map1.setZoom(zoom);
    map2.setZoom(zoom);
    map3.setZoom(zoom);
    map4.setZoom(zoom);
    }
    </script>


    <div>
        <h1 class="text-center font-bold"> Propiedades</h1>

    </div>
    <div class="">
        <div class="col-md-3">
            <div>
                <h1>Sector</h1>
                <button type="button" onclick="javascript:changeCenter(Niagara);  javascript:changeZoom(Niagara.zoom); ">Niagara</button>
                <button type="button" onclick="javascript:changeCenter(Arupos); javascript:changeZoom(Niagara.zoom);">Los Arupos</button>
                <button type="button" onclick="javascript:changeCenter(Vicente); javascript:changeZoom(Niagara.zoom);">Vicente Leon</button>
            </div>
            <br>
            <div>
                <h1>Propiedades Ingresadas</h1>
                <div class="overflow-y: scroll" width="100%" height="100%">
                    <table class="table table-bordered table-stripped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Cedula</th>
                                <th class="text-center">Telefono</th>
                                <!-- <th class="text-center">Latitud</th>
                                <th class="text-center">Longitud</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($listadoPropiedades) : ?>
                                <?php foreach ($listadoPropiedades->result() as $propiedadTemporal) : ?>
                                    <tr>
                                        <td class="textcenter">
                                            <?php echo $propiedadTemporal->id_loc; ?>
                                        </td>
                                        <td class="textcenter">
                                            <?php echo $propiedadTemporal->apellido_loc; ?>
                                        </td>
                                        <td class="textcenter">
                                            <?php echo $propiedadTemporal->nombre_loc; ?>
                                        </td>
                                        <td class="textcenter">
                                            <?php echo $propiedadTemporal->cedula_loc; ?>
                                        </td>
                                        <td class="textcenter">
                                            <?php echo $propiedadTemporal->telefono_loc; ?>
                                        </td>
                                        <!-- <td class="textcenter">
                                            <?php echo $propiedadTemporal->latitud1_loc; ?>
                                        </td>
                                        <td class="textcenter">
                                            <?php echo $propiedadTemporal->longitud1_loc; ?>
                                        </td> -->
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div>
            <div id="mapa" class="col-md-9 " style="height:700px; width:100%px;
            border:2px solid black;">

            </div>
            <div class="text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar">
                    Agregar Propiedad
                </button>
            </div>

        </div>
        <div class="modal fade bd-example-modal-lg" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-lg" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar una Propiedad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url("propiedades/guardarPropiedad"); ?>" method="post">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Apellido</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="apellido_loc" type="text" class=="form-control" placeholder="Ingrese su Apellido " name="apellido_loc" required>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Nombre:</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="nombre_loc" type="text" class=="form-control" placeholder="Ingrese su Nombre " name="nombre_loc" required>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Cedula:</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="cedula_loc" type="text" class=="form-control" placeholder="Ingrese su Cedula " name="cedula_loc" required>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Telefono:</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="telefono_loc" type="text" class=="form-control" placeholder="Ingrese su Telefono " name="telefono_loc" required>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Coordenada 1:</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="latitud1_loc" type="text" class=="form-control" placeholder=" " name="latitud1_loc" readonly>
                                        <input id="longitud1_loc" type="text" class=="form-control" placeholder=" " name="longitud1_loc" readonly>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Coordenada 2:</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="latitud2_loc" type="text" class=="form-control" placeholder=" " name="latitud2_loc" readonly>
                                        <input id="longitud2_loc" type="text" class=="form-control" placeholder=" " name="longitud2_loc" readonly>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Coordenada 3:</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="latitud3_loc" type="text" class=="form-control" placeholder=" " name="latitud3_loc" readonly>
                                        <input id="longitud3_loc" type="text" class=="form-control" placeholder=" " name="longitud3_loc" readonly>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <label for=""> Coordenada 4:</label>

                                    </div>
                                    <div class="col-md-4">
                                        <input id="latitud4_loc" type="text" class=="form-control" placeholder=" " name="latitud4_loc" readonly>
                                        <input id="longitud4_loc" type="text" class=="form-control" placeholder=" " name="longitud4_loc" readonly>

                                    </div>
                                </div>
                                <br>
                                <h1>Sector</h1>
                                <button type="button" onclick="javascript:changeCenterModal(Niagara);  javascript:changeZoomModal(Niagara.zoom); ">Niagara</button>
                                <button type="button" onclick="javascript:changeCenterModal(Arupos); javascript:changeZoomModal(Niagara.zoom);">Los Arupos</button>
                                <button type="button" onclick="javascript:changeCenterModal(Vicente); javascript:changeZoomModal(Niagara.zoom);">Vicente Leon</button>


                            </div>
                            <br>
                            <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>

                            <div class="col-md-6">


                                <div class="col-md-6 ">
                                    <h4>Segundo</h4>
                                    <div id="mapa1" class=" " style="height:250px; width:100%px;border:2px solid black;">

                                    </div>
                                    <h4>Tercero</h4>
                                    <div id="mapa2" class=" " style="height:250px; width:100%px;border:2px solid black;">

                                    </div>

                                </div>
                                <br>

                                <div class="col-md-6 ">
                                    <h4>Primero</h4>
                                    <div id="mapa3" class="" style="height:250px; width:100%px;border:2px solid black;">

                                    </div>
                                    <h4>Cuarto</h4>
                                    <div id="mapa4" class=" " style="height:250px; width:100%px;border:2px solid black;">

                                    </div>
                                </div>


                            </div>
                            <br>
                            <div>
                                <button type="submit" name="button" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-floppy-saved"></i>
                                    Guardar
                                </button>
                            </div>

                        </form>
                        <br>


                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-4">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


                    </div>
                </div>
            </div>
        </div>



    </div>
    </body>




</html>
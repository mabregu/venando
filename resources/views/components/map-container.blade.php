<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
<script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
    .leaflet-popup-content{
        margin: 0px !important;
    }
</style>

<div id="map" style="width: 100%; height: 100%; border: 1px solid #AAA;"></div>

<style type="text/css">
    .leaflet-pane.leaflet-map-pane{width: 100%;height: 100%}
 </style>

 <script type="text/javascript">

    $(function(){
        setMapFunctions();

    })

   function setMapFunctions(){

     var ruta,polygon,punto,polygonArray = new Array(),rutaArray = new Array();
     var iconoSeleccionado;

     var map = L.map('map').setView([55.7024331,12.5328938], 11);
     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{}).addTo(map);

    //  map.on('click', setPunto);

     $("#punto").on('click', function(){
       borrarCapas();
       $('#ubicacion_array').val('');
       $('#ubicacion_tipo').val('punto');
       iconoSeleccionado = L.icon({
          iconUrl: 'https://toppng.com/uploads/preview/map-point-google-map-marker-gif-11562858751s4qufnxuml.png',
          iconSize: [31, 31],
          iconAnchor: [15, 31],
          popupAnchor: [0, -31]
       });
       map.off('click');
       map.on('click', function(ev) {
         setPunto(ev.latlng)
       });
     });


     $('#borrar').on('click',function(){
       $('#umarker').html('');
       borrarCapas();
     });

    function borrarCapas(){
        map.eachLayer(function (layer) {
        if (layer.options.draggable == true)
            map.removeLayer(layer);
        if (typeof polygon !== 'undefined')
            map.removeLayer(polygon);
        if (typeof ruta !== 'undefined')
            map.removeLayer(ruta);
        });
        polygonArray = [];
        rutaArray = [];
        ubicacion_json_data = '{"tipo":"","data":{"coor":"","alt":"'+$('#zona').val()+'"}}';
        $('#ubicacion_array').val('');
        $('#ubicacion_tipo').val('');
        $('#ubicacion_json_data').val(ubicacion_json_data);
    }

     function setUbicacion()
     {

       $('#ubicacion_json_data').val('{"tipo":"'+$('#ubicacion_tipo').val()+'","data":{"coor":"'+$('#ubicacion_array').val()+'","alt":"'+$('#zona').val()+'"}}');
       switch($('#ubicacion_tipo').val()) {
           case "punto":
               iconoSeleccionado = L.icon({
                  iconUrl: 'https://toppng.com/uploads/preview/map-point-google-map-marker-gif-11562858751s4qufnxuml.png',
                  iconSize: [31, 31],
                  iconAnchor: [15, 31],
                  popupAnchor: [0, -31]
               });
               setPunto(JSON.parse($('#ubicacion_array').val()));
               break;
           default:
               break;
       }
    }
    // var popup = L.popup()
    // .setLatLng([55.7024332,12.5328939])
    // .setContent("I am a standalone popup.")
    // .openOn(map);

    @forelse($properties as $property)
        @if( !empty($property->lat) && !empty($property->lng) )

            <?php
            $bedroom = 0; $bathroom = 0; $garage = 0; $terrace = 0;
            ?>
            @foreach ($property->rooms as $room)
                @switch($room->id)
                    @case(1)
                        <?php $bedroom++ ?>
                        @break
                    @case(2)
                        <?php $bathroom++ ?>
                        @break
                    @case(3)
                        <?php $garage++ ?>
                        @break
                    @case(4)
                        <?php $terrace++ ?>
                        @break
                @endswitch
            @endforeach
            L.marker([ {{$property->lat}} , {{$property->lng}}] ).bindPopup(`
            @include('components.card-property-map')
            `).openPopup().addTo(map);

        @endif
    @empty
        alert("There are no properties");
    @endforelse

   }

 </script>

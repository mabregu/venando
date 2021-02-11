<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
    </x-slot>
    <hr>
    <section class="bg-white py-8 grid grid-cols-2">
        <div class="container mx-auto d-flex flex-wrap justify-content-between align-items-start flex inset-y-0 left-0 w-1/2"
            style="margin-left: 20%;"
        >
            @include('components.filter-map-container')
        </div>

        <div class="container mx-auto d-flex flex-wrap justify-content-between align-items-start w-6/6"
            style="margin-left: -16%;"
        >
            @include('components.map-container')
            {{-- @forelse ($properties as $property) --}}
                    <?php
                    // var_dump($property) --}}

                    // $bedroom = 0; $bathroom = 0; $garage = 0; $terrace = 0;
                    ?>
                    {{-- @foreach ($property->rooms as $room)
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
                    @endforeach --}}
                {{-- @include('components.card-property') --}}
            {{-- @empty
                <div class="card">
                    <div class="card-body">
                        {{ __('There are no properties to show') }}
                    </div>
                </div>
            @endforelse --}}

        </div>
        {{-- {{ $properties->links() }} --}}
        {{-- @include('properties.modal-mapa') --}}
    </section>

</x-app-layout>

<script src="/js/jquery-3.5.1.js"></script>

<script type="text/javascript">
    $(function(){
        $('.add-favourite').on('click',function(){
            if( $(this).data('added') == 'true' ){
                if( fetch( "/deleteFavourite/" + $(this).data('id') ).then( resp => resp.status == 401 ? window.location = "{{ route('login') }}" : true ) )
                {
                    $(this).html(`<svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>`);
                    $(this).data('added','false');
                }
            }
            else{
                if( fetch( "/addFavourite/" + $(this).data('id') ).then( resp => resp.status == 401 ? window.location = "{{ route('login') }}" : true ) )
                {
                    $(this).html(`<svg class="h-6 w-6 text-white fill-current text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>`);
                    $(this).data('added','true');
                }
            }
        })
    })


    // inicio modal
    // var openmodal = document.querySelectorAll('.modal-open')
    // for (var i = 0; i < openmodal.length; i++) {
    //   openmodal[i].addEventListener('click', function(event){
    // 	event.preventDefault()
    // 	toggleModal()
    //   })
    // }

    // const overlay = document.querySelector('.modal-overlay')
    // overlay.addEventListener('click', toggleModal)

    // var closemodal = document.querySelectorAll('.modal-close')
    // for (var i = 0; i < closemodal.length; i++) {
    //   closemodal[i].addEventListener('click', toggleModal)
    // }

    // document.onkeydown = function(evt) {
    //   evt = evt || window.event
    //   var isEscape = false
    //   if ("key" in evt) {
    // 	isEscape = (evt.key === "Escape" || evt.key === "Esc")
    //   } else {
    // 	isEscape = (evt.keyCode === 27)
    //   }
    //   if (isEscape && document.body.classList.contains('modal-active')) {
    // 	toggleModal()
    //   }
    // };


    // function toggleModal () {
    //   const body = document.querySelector('body')
    //   const modal = document.querySelector('.modal')
    //   modal.classList.toggle('opacity-0')
    //   modal.classList.toggle('pointer-events-none')
    //   body.classList.toggle('modal-active')
    // }
    //fin modal

    //inicio mapa
    // var path = '/img/';
	// var ccig = L.layerGroup();
	// var myIcon = L.icon({
	// 	iconUrl: path + 'pin24.png',
	// 	iconRetinaUrl: path + 'pin48.png',
	// 	iconSize: [29, 24],
	// 	iconAnchor: [9, 21],
	// 	popupAnchor: [0, -14]
	// });

	// 	.then(function(response) {
	// 	return response.json();
	// })
	// .then(function(myJson) {
	// 	console.log(myJson);
	// 	mapear_ccig(myJson);
	// });

	// function mapear_ccig(data) {
	// 	$.each(data.ccig, function(index, json){
	// 		console.log(json);
	// 		var popup = `<b>CCIG</b> ${json.descripcion} <br/><b>Unidad</b> ${json.unidad}`;
	// 		L.marker([json.latitud, json.longitud], { icon: myIcon }).bindPopup(popup).addTo(ccig);
    //     })
    // }

	// var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
	// 	'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
	// 	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	// 	mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	// var grayscale = L.tileLayer(mbUrl, {
	// 		id: 'mapbox/light-v9',
	// 		tileSize: 512,
	// 		zoomOffset: -1,
	// 		attribution: mbAttr
	// 	}),
	// 	streets = L.tileLayer(mbUrl, {
	// 		id: 'mapbox/streets-v11',
	// 		tileSize: 512,
	// 		zoomOffset: -1,
	// 		attribution: mbAttr
	// 	});

	// var map = L.map('map', {
	// 	center: [55.6763, 12.5681],
	// 	minZoom: 10,
	// 	zoom: 2,
	// 	layers: [grayscale, ccig]
	// });

	// var baseLayers = {
	// 	"Grayscale": grayscale,
	// 	"Streets": streets
	// };

	// var overlays = {
	// 	"CCIG": ccig
	// };

	// L.control.layers(baseLayers, overlays).addTo(map);
    // fin mapa
</script>

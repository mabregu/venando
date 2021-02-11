<x-app-layout>
    <style>
        main {
            /* max-height: 100vh; */
            background-color: #efe9e9;
        }

        .step1, .step2, .step3, .step4, .step5 {
    width: 10%;
    background-color: #1a7bba
  }

  [x-cloak] {
		display: none;
  }

  select, input {
    border: 1px #585e58;
  }
    .price_slider, .kvm_slider {
      -webkit-appearance: none;
      width: 100%;
      height: 1px;
      border-radius: 5px;
      background: gray;
      outline: none;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .price_slider, .kvm_slider:hover {
      opacity: 1;
    }

    .price_slider::-webkit-slider-thumb, .kvm_slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: gray;
      cursor: pointer;
    }

    .price_slider::-moz-range-thumb, .kvm_slider::-moz-range-thumb {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: gray;
      cursor;
    }

    .show_full_descrip {
        display: block;
        position: static;
    }

    .hide_full_descrip {
        display: none;
        position: absolute;
    }
        
    </style>
    
    <div x-data="{ details: false }" :class="{'overflow-y-hidden': details}">
        @include('layouts.agents_navigation')
        
        <div class="relative pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
            <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:max-h-80" style="max-width: 100%;">
                <img src="/img/agents_buildings.png" alt="" style="max-width: 100%; max-height: 50%">
            </div>
        </div>
        <div class="relative container mx-auto w-8/12">
            <div class="lg:py-0 absolute bottom-0 mx-auto w-full text-center" style="z-index: 2;background-color: #dcdbdc;">
                <div class="">
                    <nav class="flex items-center justify-between flex-wrap" style="z-index: 2; background-color: #dcdbdc; border-top: 5px solid #229ddd">
                        <div class="block lg:hidden">
                            <button
                                class="navbar-burger flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                                <svg class="fill-current h-6 w-6 text-gray-700" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                </svg>
                            </button>
                        </div>
                        <div id="main-nav" class="w-full flex-grow lg:inline-flex items-center lg:w-auto">
                            <div class="text-sm mt-2 xl:mx-8 lg:space-x-0 lg:inline-flex lg:w-10/12 justify-between">
                                <button class="border border-transparent lg:w-40"
                                    class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    <a href="/agents/dashboard">Dashboard</a>
                                </button>
                                <button class="border border-transparent lg:w-40" href="#"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    <a href="{{ route('buyers_list') }}">Køberliste</a>
                                </button>
                                <button class="border border-transparent lg:w-40" href="#"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    <a href="{{ route('favorite_list') }}">Favoritliste</a>
                                </button>
                                <button class="border border-transparent lg:w-40" href="#"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    <a href="{{ route('seller_list') }}">Sælgerliste</a>
                                </button>
                                <button class="border border-transparent lg:w-40" href="#"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    <a href="#">Opslagstavle</a>
                                </button>
                            </div>
                            <div class="text-2xl my-1 mx-3">
                                <img src="img/shopping.png" class="h-6" alt="">
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="w-10/12 container mx-auto overflow-hidden" style="background-color: #f7f4f4">
            <div class="container w-11/12 mx-auto">
                <div class="">
                    <div class="mb-10 pt-16">
                        <h1 class="text-3xl text-center pb-2 font-raleway">
                            {{ __('Køberliste') }}
                        </h1>
                        <div>
                            <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                        </div>
                    </div>
                <div class="grid grid-rows-1 w-2/12 float-left">
                    <div class="text-sm">
                        <h6 class="text-lg font-semibold">{{ __('Filtrer') }}</h6>
                        <span class="text-sm font-light">{{ __('Gemte filtreringer') }}</span>
                        <select name="saved_filters" id="saved_filters">
                            <option value="" disabled selected></option>
                            <option value="">Christian Taco</option>
                            <option value="">Torben Hansen</option>
                        </select>
                    </div>
                    <hr class="mt-5 mb-5" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                    
                    <div class="text-sm mb-10 font-light">
                        <label for="max_price" class="text-sm font-light">{{ __('Pris') }}</label>
                        <div class="w-full rounded-md">
                            <input type="text" name="max_price" id="write_price" class="rounded-md" placeholder="kr." value="">
                        </div>
                        <div class="">
                            <input type="range" min="0" max="25000000" value="5500000" class="price_slider" id="price_slider" placeholder="Maks 5.500.000 kr">
                            <div class="justify-between">
                                <span>0</span>
                                <span class="float-right">50 mill.</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm mb-10 font-light">
                        <label for="" class="text-sm font-light">{{ __('Størrelse') }}</label>
                        <input type="text" name="min_kvm" id="min_kvm" class="rounded-md" placeholder="kvm" value="">
                        <input type="range" min="0" max="500" value="50" class="kvm_slider" id="kvm_slider" placeholder="Minimum 155 kvm">
                        <div class="justify-between">
                            <span>0</span>
                            <span class="float-right">500</span>
                        </div>
                    </div>
                    <div class="text-sm mb-10 font-light">
                        <label for="rooms">{{ __('Værelser') }}</label>
                        <input type="text" name="rooms" id="rooms">
                    </div>
                    <div class="text-sm mb-10 font-light">
                        <label for="plan">{{ __('Plan') }}</label>
                        <input type="text" name="plan" id="plan">
                    </div>
                    <div class="text-sm mb-10 font-light">
                        <label for="toilets">{{ __('Toiletter') }}</label>
                        <input type="text" name="toilets" id="toilets">
                    </div>
                    <div class="text-sm mb-10 font-light">
                        <label for="garden">{{ __('Have') }}</label>
                        <input type="text" name="garden" id="garden">
                    </div>
                    <div class="text-sm mb-10 font-light">
                        <label for="building_age">{{ __('Byggeår') }}</label>
                        <input type="text" name="building_age" id="building_age">
                    </div>
                </div>
                <div class="grid grid-cols-4 px-10">
                    <div class="font-bold">Kobernavn</div>
                    <div class="font-bold text-center">Soger</div>
                    <div  class="font-bold text-right col-start-4">Handling</div>
                    <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
    
                    <div>Christian Taco</div>
                    <div class="text-center">Villa</div>
                    <div class="w-full font-semibold text-sm text-right float-right">
                        <span class="p-1" style="border: 1px solid #229ddd; color:#229ddd">{{ __('OPDATERET') }}</span>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button class="cursor-pointer hover:bg-gray-200 rounded-full" id="drop_full_descrip">
                            <img src="/img/dropdown_icon.png" alt="">
                        </button>
                        <img src="/img/exclamation_icon.png" alt="">
                        <img src="/img/star_empty_icon.png" alt="">
                    </div>
                    <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                    {{-- Full buyer descrip --}}
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Maksimum købspris</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">5.000.000 kr.</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                        <span class="font-bold text-base">Andet</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Minimums boligareal</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">155 kvm</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span>Altan, Garrage, Kælder</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Have</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">Stor (min 100 kvm)</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span class="font-bold text-base">I nærheden af</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Byggeår</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">Ældre</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span>Grønne område, Institutioner, Offentlig transport</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Plan</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">2</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span class="font-bold text-base">Top 3 prioriteter for din bolig</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Antal værelser</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">4</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Prioritet 1</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Byggeår</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Antal toiletter</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>4</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Prioritet 2</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Antal Værelse</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <button
                            @click="details = true"
                            class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                {{ __('Se købers interesser') }}
                            </button>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Prioritet 3</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>I nærheden af</span>
                        </div>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                    <div>Christian Taco</div>
                    <div class="text-center">Villa</div>
                    <div class="w-full font-semibold text-sm text-right float-right">
                        <span class="p-1" style="border: 1px solid #229ddd; color:#229ddd">{{ __('OPDATERET') }}</span>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button class="cursor-pointer hover:bg-gray-500" id="drop_full_descrip">
                            <img src="/img/dropdown_icon.png" alt="">
                        </button>
                        <img src="/img/exclamation_icon.png" alt="">
                        <img src="/img/star_empty_icon.png" alt="">
                    </div>
                    <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                    {{-- Full buyer descrip --}}
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Maksimum købspris</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">5.000.000 kr.</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                        <span class="font-bold text-base">Andet</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Minimums boligareal</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">155 kvm</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span>Altan, Garrage, Kælder</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Have</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">Stor (min 100 kvm)</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span class="font-bold text-base">I nærheden af</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Byggeår</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">Ældre</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span>Grønne område, Institutioner, Offentlig transport</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Plan</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">2</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <span class="font-bold text-base">Top 3 prioriteter for din bolig</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Antal værelser</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="text-right font-light">4</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Prioritet 1</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Byggeår</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span class="font-bold text-base">Antal toiletter</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>4</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Prioritet 2</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Antal Værelse</span>
                        </div>
                        <div class="col-span-2 hide_full_descrip">
                            <button
                            @click="details = true"
                            class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                {{ __('Se købers interesser') }}
                            </button>
                        </div>
                        <div class="hide_full_descrip">
                            <span>Prioritet 3</span>
                        </div>
                        <div class="hide_full_descrip">
                            <span>I nærheden af</span>
                        </div>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                   
                </div>
                
            </div>
        </div>

        {{-- Modal with users details --}}
        <div
      class="fixed inset-0 w-full h-full z-20 bg-opacity-50 duration-300 overflow-y-auto"
      x-show="details"
      x-transition:enter="transition duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition duration-300"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      style="background-image: url('/img/agents_buildings.png')"
    >
        <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
            <div
            class="relative bg-white shadow-lg text-gray-900 z-20 mt-40 mb-10"
            @click.away="details = false"
            x-show="details"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="scale-0"
            x-transition:enter-end="scale-100"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="scale-100"
            x-transition:leave-end="scale-0"
            style="border-top: 5px solid #229ddd"
            >
                <header class="flex flex-col justify-center items-center p-3">
                    <div class="flex justify-center w-60 h-28 mx-auto mb-4">
                        <h5>Behovsafdækning af boligkøber</h5>
                    </div>
                    <h2 class="font-bold">Detaljer & interesser</h2>
                    <div>
                        <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                    </div>
                </header>
                <main class="p-3 text-center" style="background-color: #f7f4f4">
                    <div class="col-span-2 w-full h-12 font-raleway">
                        <span class="font-bold">{{ __('Fysiske aktiviteter') }}</span>
                        <br>
                        <span>Fitness, Cykle, Løbe</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        <span class="font-bold">{{ __('Interesser i hjemmet') }}</span>
                        <br>
                        <span>Gaming, Ser sport, Samler, Kreativitet</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        <span class="font-bold">{{ __('Boligomgivelserne') }}</span>
                        <br>
                        <span>Natur, Byliv</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        <span class="font-bold">{{ __('Aktiviteter udenfor boligen') }}</span>
                        <br>
                        <span>Café, Biografen, Restaurant</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        <span class="font-bold">{{ __('Transport til arbejde') }}</span>
                        <br>
                        <span>Bil, Cykel</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        <span class="font-bold">{{ __('Følger der dyr med') }}?</span>
                        <br>
                        <span>Hund</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        <span class="font-bold">{{ __('Er ofte sammen med') }}</span>
                        <br>
                        <span>Familie</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        <span class="font-bold">{{ __('Vores nye bolig skal være') }}</span>
                        <br>
                        <span>Klar til familieforøgelse, Vores bolig de næste 30 år</span>
                        <hr class="col-span-4 mt-5 mb-5 bottom-2 w-full hide_full_descrip" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                    </div>
                </main>
            </div>
            <div class="container mx-auto">
                <div class="flex flex-col justify-center items-center mx-auto">
                    <button
                    class="w-60 py-2 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #229ddd; hover:cursor:pointer"
                    >{{ __('Tæt') }}
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
        </div>
    </div>
        
    </div>

    <script>
        
        let dropFullDescrip = $('#drop_full_descrip');

        let hideFullDescrip = $('.hide_full_descrip');

        dropFullDescrip.click(function () { 
            // alert('hola')
            if (hideFullDescrip.hasClass('hide_full_descrip')) {
                hideFullDescrip.removeClass('hide_full_descrip');
                hideFullDescrip.addClass('show_full_descrip');
            } 
            else {
                hideFullDescrip.removeClass('show_full_descrip');
                hideFullDescrip.addClass('hide_full_descrip');
            }
            
        });
        
    </script>
    
</x-app-layout>
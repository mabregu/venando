  <x-app-layout>
    @include('layouts.navigation')
    <style>
      main {
        background-color: #efe9e9;

        /* slider */
        .slidecontainer {
        width: 100%;
      }
    }/**Así esokis*/

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
        cursor: pointer;
      }

    </style>
      <main>
        <div>
          <div class="pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
            <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:max-h-96" style="max-width: 100%;">
              <img src="/img/buildings_ud.png" alt="" style="max-width: 100%">
            </div>
          </div>
          <div class="relative -top-20">
            <div class="w-full container mx-auto" style="background-color: #f7f4f4">
              {{-- Steps bar --}}
              <div class="w-full mx-10 bg-gray-500 max-h-px">
                <span class="step1"></span>
                <span class="step2"></span>
                <span class="step3"></span>
                <span class="step4"></span>
                <span class="step5"></span>
              </div>
    
              {{-- <div class="container mx-auto">
                <h1 class="text-3xl text-center pb-2 font-raleway mt-10">
                  {{ __('Vælg boliginfo') }}
                </h1>
                <div>
                    <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                </div> --}}
    
                <div class="w-full container mx-auto">

                  <div x-data="app()" x-cloak>

                    {{-- Step complete --}}

                    <div id="complete" class="mx-5" x-show.transition="step === 'complete'">
                      <div class="container">
                        <div>

                          <div class="relative w-full mx-auto max-h-px mb-8 top-4" style="border: 1px solid gray; width: 80%;">
                            <span class="step1 max-h-3 absolute" style="border: 2px solid #1a7bba; top: -2px; width: 20%; left:80%"></span>
                          </div>
                          
                            <h1 class="text-3xl text-center py-2 font-raleway">
                                {{ __(' Tillykke! Velkommen til Venando') }}
                            </h1>
                            <div>
                                <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                            </div>
                            <div class="text-center">
                              <p class="font-raleway">
                                  {{ __('Din konto er nu oprettet. Vi har sendt dig en mail med et bekræftelseslink.') }}
                              </p>
                              <p class="font-raleway">
                                  {{ __('Dine boligønsker vil først være synlige i vores system efter du har bekræftet dene mail.') }}
                              </p>
                              <br>
                              
                              <p class="font-raleway">
                                  {{ __('Du kan nu logge ind og oprette flere ønsker eller tilføje informationer til din profil.') }}
                              </p>
    
                              <button
                              type="button"
                              onclick="openModal('login')"
                              class="my-10 mx-24 md:mx-12 py-4 px-20 shadow-md no-underline rounded-full text-white font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2 font-raleway" style="background-color: #41a438"
                              >{{ __('Log ind') }}
                              </button>
                            </div>

                        </div>
                      </div>
                    </div>

                    <div x-show.transition="step != 'complete'">
                      <div x-show="step === 1">
                        <div class="relative w-full mx-auto max-h-px mb-8 top-4" style="border: 1px solid gray; width: 80%;">
                          <span class="step1 max-h-3 absolute" style="border: 2px solid #1a7bba; top: -2px; width: 20%;"></span>
                        </div>

                        <h1 class="text-3xl text-center py-2 font-raleway">
                            {{ __('Vælg boliginfo') }}
                        </h1>
                        <div>
                            <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                        </div>
                      </div>
                      
                      <div x-show="step === 2">

                        <div class="relative w-full mx-auto max-h-px mb-8 top-4" style="border: 1px solid gray; width: 80%;">
                          <span class="step1 max-h-3 absolute" style="border: 2px solid #1a7bba; top: -2px; width: 20%; left:20%"></span>
                        </div>
                        
                        <h1 class="text-3xl text-center py-2 font-raleway ">
                            {{ __('Særlige ønsker') }}
                        </h1>
                        <div>
                            <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                        </div>
                        <p class="mt-3 mb-6 mx-5 text-center">
                          {{ __('Denne del er valgfri, men kan være yderst vigtigt for at hjælpe mælgeren med at pejle ind til dine ønsker') }}
                        </p>
                      </div>
                      
                      <div class="step-4" x-show="step === 4">

                        <div class="relative w-full mx-auto max-h-px mb-8 top-4" style="border: 1px solid gray; width: 80%;">
                          <span class="step1 max-h-3 absolute" style="border: 2px solid #1a7bba; top: -2px; width: 20%; left:60%"></span>
                        </div>
                        
                        <h1 class="text-3xl text-center py-2 font-raleway">
                            {{ __('Indtast kontooplysninger') }}
                        </h1>
                        <div>
                            <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                        </div>
                      </div>
                      
                    </div>
                  
                    {{-- Form start --}}
                    <form id="homeseekers_form" action="" method="post">
                      @csrf

                      {{-- Step 1 --}}
                      <div class="mb-4 px-4 lg:mx-60" x-show.transition.in="step === 1">
                        <div class="w-full inline-flex justify-items-stretch mb-6">
                          <hr class="relative mt-5 mb-5 bottom-2 lg:w-96" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                          <span class="mx-4 lg:mx-40">{{ __('Pris') }}</span>
                          <hr class="relative mt-5 mb-5 bottom-2 lg:w-96" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                          <div class="w-full rounded-md">
                            <input type="text" name="max_price" id="write_price" class="rounded-md lg:w-80" placeholder="Maks 5.500.000 kr." value="">
                          </div>
                          <div class="">
                            <input type="range" min="0" max="25000000" value="5500000" class="price_slider" id="price_slider" placeholder="Maks 5.500.000 kr">
                            <div class="w-full">
                              <p class="w-full xs:invisible xs:absolute md:visible">0 1 2,5 5 7,5 10 15 20 25 mill.</p><p class="text-right md:invisible">kr.</p>
                            </div>
                          </div>
                        </div>

                        <div class="w-full inline-flex justify-items-stretch mb-6">
                          <hr class="relative mt-5 mb-5 bottom-2 lg:w-96" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                          <span class="mx-4 lg:mx-40">{{ __('Boligens areal') }}</span>
                          <hr class="relative mt-5 mb-5 bottom-2 lg:w-96" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                        </div>

                        <div class="grid grid-cols-2 gap-4 mx-auto">
                          <div class="w-full rounded-md">
                            <input type="text" name="min_kvm" id="min_kvm" class="rounded-md lg:w-80" placeholder="Minimum 155 kvm" value="">
                          </div>
                          <div class="">
                            <input type="range" min="0" max="500" value="50" class="kvm_slider" id="kvm_slider" placeholder="Minimum 155 kvm">
                            <div class="w-full">
                              <p class="w-full xs:invisible xs:absolute md:visible">0 50 100 150 200 250 300 350 400 450 500 kvm</p><p class="text-right md:invisible">kvm</p>
                            </div>
                          </div>
                          
                          <div class="w-full inline-flex justify-items-stretch mb-6 lg:col-span-2">
                            <hr class="relative mt-5 mb-5 bottom-2 lg:w-96" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                            <span class="mx-4 lg:mx-40">{{ __('Boligens specifikation') }}</span>
                            <hr class="relative mt-5 mb-5 bottom-2 lg:w-96" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
                          </div>
                        </div>

                        <div class="lg:grid grid-cols-2 gap-6 lg:mb-20">
                          <div class="w-full mx-auto mb-3">
                            <select class="rounded-md w-full text-center lg:py-3" name="building_age" id="building_age">
                              <option disabled selected>{{ __('Byggeår') }}</option>
                              <option value="newer">{{ __('Nyere') }}</option>
                              <option value="older">{{ __('Ældre') }}</option>
                            </select>
                          </div>
                          <div class="w-full mx-auto mb-3">
                            <select class="rounded-md w-full text-center lg:py-3" name="garden" id="garden">
                              <option disabled selected>{{ __('Have') }}</option>
                              <option value="little">{{ __('Lille (min 10 kvm)') }}</option>
                              <option value="big">{{ __('Stor (min 100 kvm)') }}</option>
                            </select>
                          </div>
                        </div>

                        <div class="grid grid-cols-3 lg:gap-6">
                          <div class="mb-3 col-span-3 lg:col-span-1">
                            <select class="rounded-md w-full text-center lg:py-3" name="plan" id="plan">
                              <option disabled selected>{{ __('Plan') }}</option>
                              <option value="yes">{{ __('Ja') }}</option>
                              <option value="no">{{ __('Nej') }}</option>
                            </select>
                          </div>
                          <div class="mb-3 col-span-3 lg:col-span-1">
                            <select class="rounded-md w-full text-center lg:py-3" name="rooms" id="rooms">
                              <option disabled selected>{{ __('Antal værelser') }}</option>
                              @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                            </select>
                          </div>
                          <div class="mb-3 col-span-3 lg:col-span-1">
                            <select class="rounded-md w-full text-center lg:py-3" name="toilets" id="toilets">
                              <option disabled selected>{{ __('Antal toiletter') }}</option>
                              @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                            </select>
                          </div>
                        </div>
                      </div>  
                      
                      {{-- Step 2 --}}
                      <div class="mb-4 px-4 lg:mx-60" x-show.transition.in="step === 2">
                        <div class="container">
                          <div class="w-full max-auto">
                            <h5 class="text-left col-span-3 mb-4">{{ __('Andet? Vælg gerne flere') }}</h5>
                            <div class="grid grid-cols-3 gap-4 lg:gap-2 mb-4 mx-5">
                              <div>
                                <input type="checkbox" name="balcony" id="balcony">
                                <label for="balcony">{{ __('Altan') }}</label>
                              </div>
                              <div>
                                <input type="checkbox" name="garage" id="garage">
                                <label for="garage">{{ __('Garage') }}</label>
                              </div>
                              <div>
                                <input type="checkbox" name="cellar" id="cellar">
                                <label for="cellar">{{ __('Kælder') }}</label>
                              </div>
                              <div>
                                <input type="checkbox" name="architect" id="architect">
                                <label for="architect">{{ __('Arkitekt') }}</label>
                              </div>
                              <div>
                                <input type="checkbox" name="hobby_room" id="hobby_room">
                                <label for="hobby_room">{{ __('Hobbyrum') }}</label>
                              </div>
                              <div>
                                <input type="checkbox" name="terrace" id="terrace">
                                <label for="terrace">{{ __('Terrasse') }}</label>
                              </div>
                              <div>
                                <input type="checkbox" name="wood_stove" id="wood_stove">
                                <label for="wood_stove">{{ __('Brændeovn') }}</label>
                              </div>
                              <div class="xs:col-span-2">
                                <input type="checkbox" name="ready_to_move" id="ready_to_move">
                                <label for="ready_to_move">{{ __('Indflytningsklar') }}</label>
                              </div>
                              <div>
                                <input type="text" name="other" id="other" placeholder="{{ __('Andet ønske') }}">
                              </div>
                            </div>
                            <div class="w-1/2 mx-auto lg:invisible lg:absolute">
                              <input type="text" name="other" id="other" placeholder="{{ __('Andet ønske') }}">
                            </div>
                              <hr class="col-span-2 mt-5 mb-5 bottom-2" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="grid grid-cols-4 mx-5 lg:gap-2">
                              <h5 class="text-left col-span-3 mb-4">{{ __('I nærheden af? Vælg gerne flere') }}</h5>
                              <div class="col-span-2">
                                <input type="checkbox" name="green_area" id="green_area">
                                <label for="green_area">{{ __('Grønne områder') }}</label>
                              </div>
                              <div class="col-span-2">
                                <input type="checkbox" name="institutions" id="institutions">
                                <label for="institutions">{{ __('Institutioner') }}</label>
                              </div>
                              <div class="col-span-2">
                                <input type="checkbox" name="sports_facilities" id="sports_facilities">
                                <label for="sports_facilities">{{ __('Sportsfaciliteter') }}</label>
                              </div>
                              <div class="col-span-2">
                                <input type="checkbox" name="shopping" id="shopping">
                                <label for="shopping">{{ __('Indkøbsmuligheder') }}</label>
                              </div>
                              <div class="col-span-2">
                                <input type="checkbox" name="transport" id="transport">
                                <label for="transport">{{ __('Offentlig tra-nsport') }}</label>
                              </div>
                              <div class="col-span-2">
                                <input type="checkbox" name="beach" id="beach">
                                <label for="beach">{{ __('Strand') }}</label>
                              </div>
                              <hr class="col-span-4 mt-5 mb-5 bottom-2" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                              <h5 class="text-left mb-4 col-span-3">{{ __('Vælg din “Top 3” prioriteter') }}</h5>
                              
                              <select class="rounded-md mx-2 col-span-2 lg:col-span-4 lg:py-3" name="priority_1" id="priority_1">
                                <option disabled selected>1. prioritet</option>
                                <option value="Boligtype">Boligtype</option>
                                <option value="Boligpris">Boligpris</option>
                                <option value="Boligdetaljer">Boligdetaljer</option>
                                <option value="Energimærke">Energimærke</option>
                                <option value="Andet">Andet</option>
                                <option value="I nærheden af">I nærheden af</option>
                              </select>
                              <select class="rounded-md mx-2 col-span-2 lg:col-span-4 lg:py-3" name="priority_2" id="priority_2">
                                <option disabled selected>2. prioritet</option>
                                <option value="Boligtype">Boligtype</option>
                                <option value="Boligpris">Boligpris</option>
                                <option value="Boligdetaljer">Boligdetaljer</option>
                                <option value="Energimærke">Energimærke</option>
                                <option value="Andet">Andet</option>
                                <option value="I nærheden af">I nærheden af</option>
                              </select>
                              <select class="rounded-md mx-2 col-span-2 lg:col-span-4 lg:py-3 col-start-2 mt-4 lg:col-start-1 lg:mt-0" name="priority_3" id="priority_3">
                                <option disabled selected>3. prioritet</option>
                                <option value="Boligtype">Boligtype</option>
                                <option value="Boligpris">Boligpris</option>
                                <option value="Boligdetaljer">Boligdetaljer</option>
                                <option value="Energimærke">Energimærke</option>
                                <option value="Andet">Andet</option>
                                <option value="I nærheden af">I nærheden af</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- Step 3 --}}
                      <div x-show="step === 3">
                        <h1 class="text-3xl text-center pb-2 font-raleway">

                          <div class="relative w-full mx-auto max-h-px mb-8 top-4" style="border: 1px solid gray; width: 80%;">
                            <span class="step1 max-h-3 absolute" style="border: 2px solid #1a7bba; top: -2px; width: 20%; left:40%"></span>
                          </div>
                          
                            {{ __('Sådan! Du er få skridt fra din første boligsøgning') }}
                        </h1>
                        <div>
                            <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                        </div>
                        <p class="my-10 mx-auto text-center text-sm w-8/12 font-light">
                          {{ __('For at vi kan gemme dit boligønske hos Venando, skal vi bede dig oprette en profil. Derefter bliver din boligsøgning tilgængelig for relevante ejendomsmæglere i vores system') }}
                        </p>
                        <div class="w-10/12 mx-auto">
                          <img src="/img/video_presentation.png" alt="">
                        </div>
                      </div>

                      {{-- Step 4 --}}
                      <div class="mb-4 step-4" x-show.transition.in="step === 4">
                        <div class="container">
                          <div class="w-full max-auto">
                            <div class="grid grid-cols-2 gap-4 mb-4 mx-5">
                              <div class="w-full h-12 font-raleway">
                                <label for="name" class="text-red-600 font-semibold" id="name_error"></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control @error('name') border-red-500 @enderror w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Fornavn') }}"/>
                              </div>
                              <div class="w-full h-12 font-raleway">
                                <label for="surname" class="text-red-600 font-semibold" id="surname_error"></label>
                                <input type="text" id="surname" name="surname" value="{{ old('surname') }}" required class="form-control @error('surname') border-red-500 @enderror w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Efternavn') }}"/>
                              </div>
                              <div class="w-full h-12 font-raleway">
                                <label for="password" class="text-red-600 font-semibold" id="password_error"></label>
                                <input type="password" id="password" name="password" value="" required class="form-control @error('password') border-red-500 @enderror w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Adgangskode') }}"/>
                              </div>
                              <div class="w-full h-12 font-raleway">
                                <label for="password_confirmation" class="text-red-600 font-semibold" id="password_confirmation_error"></label>
                                <input type="password" id="password_confirmation" name="password_confirmation" value="" required class="form-control @error('password_confirmation') border-red-500 @enderror w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Gentag Adgangskode') }}"/>
                              </div>
                              <div class="w-full h-12 font-raleway">
                                <label for="email" class="text-red-600 font-semibold" id="email_error"></label>
                                <input type="email" id="email" name="email" value="" required class="form-control @error('email') border-red-500 @enderror w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('E-mail') }}"/>
                              </div>
                              <div class="w-full h-12 font-raleway">
                                <label for="telephone" class="text-red-600 font-semibold" id="telephone_error"></label>
                                <input type="text" id="telephone" name="telephone" value="" required class="form-control @error('telephone') border-red-500 @enderror w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Telefonnummer') }}"/>
                              </div>
                              <div class="w-full h-12 font-raleway">
                                <input  class="form-checkbox transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2" type="checkbox" name="newsletter" id="newsletter">
                                <span>
                                  {{ __('Ja tak, jeg vil gerne modtage Venando’s nyhedsbrev') }}
                                </span>
                              </div>
                              <div class="w-full h-12 font-raleway">
                                <label for="conditions" class="text-red-600 font-semibold" id="conditions_error"></label>
                                <input class="form-checkbox transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2" type="checkbox" name="conditions" required id="conditions">
                                <span class="underline">
                                  <a href="">
                                    {{ __('Privat- og cookiepolitik') }}
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    <!-- Bottom Navigation -->	
                    <div class="py-6 flex flex-wrap col-span-2 mx-auto" x-show="step != 'complete'">
                      <div class="xs:inline-flex xs:space-x-2 flex flex-wrap col-span-2 mx-auto space-x-4">
                          <button
                              type="button"
                              x-show="step === 1"
                              class="step-4"
                              ><a href="{{ route('home') }}"><img src="/img/back-arrow.svg" alt="" style="height: 3rem;"></a>
                          </button>

                          <button
                              type="button"
                              x-show="step > 1"
                              @click="step--"
                              class="xs:w-10 step-4"
                              ><img src="/img/back-arrow.svg" alt="" style="height: 3rem;">
                          </button>

                          <button
                              type="button"
                              id="next1"
                              x-show="step === 1"
                              @click="step++"
                              class="w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-bold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                          >Næste
                          </button>

                          <button
                              type="button"
                              id="skip"
                              x-show="step === 2 || step === 3"
                              @click="step++"
                              class="xs:w-20 xs:py-2 w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-bold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #787878; hover:cursor:pointer"
                          >Spring over
                          </button>

                          <button
                              type="button"
                              id="next2"
                              x-show="step === 2 || step === 3"
                              @click="step++"
                              class="xs:w-20 xs:py-2 w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-bold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                          >Næste
                          </button>

                          <input
                              id="next4"
                              type="button"
                              value="Opret profil"
                              x-show="step === 4"
                              @if (session('error'))
                                  @click=""
                              @else @click="step === 'complete'"
                              @endif
                              onclick="checkForm(this)"
                              class="step-4 xs:w-20 xs:py-2 w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-bold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                          >

                          <button
                          type="button"
                              id="next4"
                              x-show="step === 4"
                              @click="step = 'complete'"
                              class="relative step-4 xs:w-20 xs:py-2 w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #073e78; hover:cursor:pointer"" style="border: 1px solid #073e78; hover:cursor:pointer"
                          ><img src="/img/fb_logo1.png" alt="Opret profil med facebook" class="absolute left-0 top-1 h-16 w-16 rounded-full lg:top-px lg:h-12 lg:w-12"><a href="{{ route('social_auth', ['driver' => 'facebook']) }}" style="color: #073e78">{{ __('Opret profil') }}</a>
                          </button>

                      </div>
                    </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      
  </x-app-layout>

  {{-- Modal Login --}}
  
  <dialog id="login" class="bg-transparent z-0 relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0">
        <div class="flex rounded-lg w-1/2 relative" style="background-color: #f7f4f4">
            <div class="w-full mx-auto">
                <div class="p-7 flex items-center w-full">
                    <div class="text-gray-900 font-bold text-4xl w-full text-center">{{ __('Log ind') }}</div>
                    <svg onclick="modalClose('login')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>

                <div>
                  <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form class="w-10/12 mx-auto" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('E-mail')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Adgangskode')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                  <div class="px-7 overflow-x-hidden overflow-y-auto" style="max-height: 40vh;">
                      
                  </div>
                  
                  <div class="p-7 flex justify-end items-center w-full">
                    <div class="flex items-center justify-end mt-4">
                      <button
                      onclick="{{ route('login') }}"
                      class="xs:w-20 xs:py-2 w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-bold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                      >{{ __('Log ind') }}
                      </button>
                  
                      <a href="{{ route('social_auth', ['driver' => 'facebook']) }}" style="color: #073e78">
                      <button
                        type="button"
                        class="relative step-4 xs:w-20 xs:py-2 w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #073e78; hover:cursor:pointer"" style="border: 1px solid #073e78; hover:cursor:pointer"
                      ><img src="/img/fb_logo1.png" alt="Opret profil med facebook" class="absolute left-0 top-1 h-16 w-16 rounded-full lg:top-px lg:h-12 lg:w-12">{{ __('Log på med Facebook') }}</a>
                      </button>
                      <div class="w-full mx-auto">
                        @if (Route::has('password.request'))
                          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                              {{ __('Glemt adgangskode?') }}
                          </a>
                      @endif
                      </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</dialog>

<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<script>
function checkForm (param) {
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "{{ route('homeseekers_store') }}",
    data: $('#homeseekers_form').serialize(),
    success: function (data) {
      if(data.status) {
        $('.step-4').hide();
        $('#complete').show();
      }
    }
  });
}

function app() {
			return {
				step: 1, 
			}
		}

  let price_slider = document.getElementById("price_slider");
  let price_output = document.getElementById("write_price");

  price_output.innerHTML = price_slider.value;
  
  price_slider.oninput = function() {
    price_output.value = this.value;
    localStorage.setItem("max_price", price_slider.text);
  }

  let kvm_slider = document.getElementById("kvm_slider");
  let kvm_output = document.getElementById("min_kvm");
  kvm_output.innerHTML = kvm_slider.value;
  
  kvm_slider.oninput = function() {
    kvm_output.value = this.value;
  }
  
// Step 1
let price = $("#write_price");
let kvm = $("#min_kvm");
let building_age = $("#building_age");
let garden = $("#garden");
let plan = $("#plan");
let rooms = $("#rooms");
let toilets = $("#toilets");

$("#next1").click(function () { 
  localStorage.setItem("write_price", price.val());
  localStorage.setItem("min_kvm", kvm.val());
  localStorage.setItem("building_age", building_age.val());
  localStorage.setItem("garden", garden.val());
  localStorage.setItem("plan", plan.val());
  localStorage.setItem("rooms", rooms.val());
  localStorage.setItem("toilets", toilets.val());
});

// Step 2
let balcony = $('#balcony').checked;
let garage = $('#garage').checked;
let cellar = $('#cellar').checked;
let architect = $('#architect').checked;
let hobby_room = $('#hobby_room').checked;
let terrace = $('#terrace').checked;
let wood_stove = $('#wood_stove').checked;
let ready_to_move = $('#ready_to_move').checked;
let other = $('#other');
let green_area = $('#green_area').checked;
let institutions = $('#institutions').checked;
let sports_facilities = $('#sports_facilities').checked;
let shopping = $('#shopping').checked;
let transport = $('#transport').checked;
let beach = $('#beach').checked;
let priority_1 = $('#priority_1');
let priority_2 = $('#priority_2');
let priority_3 = $('#priority_3');

$("#next2").click(function () { 
  localStorage.setItem('balcony', document.getElementById('balcony').checked);
  localStorage.setItem('garage', document.getElementById('garage').checked);
  localStorage.setItem('cellar', document.getElementById('cellar').checked);
  localStorage.setItem('architect', document.getElementById('architect').checked);
  localStorage.setItem('hobby_room', document.getElementById('hobby_room').checked);
  localStorage.setItem('terrace', document.getElementById('terrace').checked);
  localStorage.setItem('wood_stove', document.getElementById('wood_stove').checked);
  localStorage.setItem('ready_to_move', document.getElementById('ready_to_move').checked);
  localStorage.setItem('other', other.val());
  localStorage.setItem('green_area', document.getElementById('green_area').checked);
  localStorage.setItem('institutions', document.getElementById('institutions').checked);
  localStorage.setItem('sports_facilities', document.getElementById('sports_facilities').checked);
  localStorage.setItem('shopping', document.getElementById('shopping').checked);
  localStorage.setItem('transport', document.getElementById('transport').checked);
  localStorage.setItem('beach', document.getElementById('beach').checked);
  localStorage.setItem('priority_1', priority_1.val());
  localStorage.setItem('priority_2', priority_2.val());
  localStorage.setItem('priority_3', priority_3.val());
  
});

  </script>
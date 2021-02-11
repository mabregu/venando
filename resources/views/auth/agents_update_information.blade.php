<div x-data="{ showModal: false }" :class="{'overflow-y-hidden': showModal}">
<!-- Step Content -->
<div class="w-full container mx-auto" style="background-color: #f7f4f4">
        <div class="container mx-auto">
            <h1 class="text-3xl text-center pb-2 font-raleway mt-10">
                {{ __('Opdater kontorets oplysninger') }}
            </h1>
            <div>
                <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
            </div>
            <form method="POST" action="">
                <div class="w-full mx-auto grid grid-cols-2 gap-2 mb-40">
                    @csrf

                    <div class="col-span-2 w-full h-12 font-raleway">
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none md:h-12 focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Admin’s fulde navn') }}"/>
                    </div>

                    <div class="col-span-2 md:col-span-1 w-full h-12 font-raleway">
                        <input type="text" id="butik" name="butik" value="{{ old('butik') }}" required autofocus class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none md:h-12 focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Butik') }}"/>
                    </div>

                    <div class="col-span-2 md:col-span-1 w-full h-12 font-raleway">
                        <input type="text" id="telephone" name="telephone" required value="{{ old('telephone') }}" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none md:h-12 focus:ring-4 placeholder-gray-900" placeholder="{{ __('Butik telefonnr.') }}"/>
                    </div>

                    <div class="col-span-2 md:col-span-1 w-full h-12 font-raleway">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none md:h-12 focus:ring-4 placeholder-gray-900" placeholder="{{ __('E-mail') }}"/>
                    </div>    

                    <div class="col-span-2 md:col-span-1 w-full h-12 font-raleway">
                        <input type="text" id="cvr" name="cvr" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none md:h-12 focus:ring-4 placeholder-gray-900" placeholder="{{ __('CVR. nr.') }}"/>
                    </div>

                    <div class="col-span-2 md:col-span-1 w-full h-12 font-raleway">
                        <input type="password" id="password" name="password" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none md:h-12 focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Adgangskode') }}"/>
                    </div>        

                    <div class="col-span-2 md:col-span-1 w-full h-12 font-raleway">
                        <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none md:h-12 focus:ring-4 placeholder-gray-900" placeholder="{{ __('Gentag Adgangskode') }}"/>
                    </div>

                </div>
                
                {{-- Breackpoint for extra-small devices --}}
                <div class="xs md:invisible md:fixed">
                    {{-- Basis package --}}
                    <div class="container w-full mx-auto rounded-md bg-white mt-20">
                        <div class="w-full grid grid-cols-4 space-x-6">
                            <div class="col-span-4 mt-4 w-full container mx-auto flex justify-center mb-6">
                                <img src="/img/package_basis.png" alt="" class="w-1/2" style="max-width: 100%;">
                            </div>
                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Køberkartotek') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Nofikation ved ny køber') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Favoritliste') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Udvidet viden om køberne') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Anbefalet mægler') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Bliv vist som lokal mægler') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            
                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Målrettet markedsføring') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            {{-- Toggle monthly or yearly pay --}}
                            <div class="xs:w-full xs:px-10 xs:col-span-4 sm:px-32">
                                <div class="relative text-center mb-2 w-32 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid gray">
                                    <div class="radio-group inline-flex flex-row flex-initial justify-center rounded-lg shadow-md">
                                        <div class="radio">
                                            <input type="radio" id="monthly" name="payment" value="monthly" class="invisible">
                                            <label for="monthly" class="text-gray-400 bg-gradient-to-r from-green-400 to-blue-500">
                                            <div class=""><p>Monthly</p></div>
                                            </label>
                                        </div>
                                        <div class="radio bg-white border border-grey border-l-0">
                                            <input type="radio" id="yearly" name="payment" value="yearly" class="invisible">
                                            <label for="yearly" class=" text-gray-400">
                                            <div class=""><p>Yearly</p></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mx-auto">
                                    <p class="text-xs mb-2">{{ __('Pr. område, pr. måned') }}</p>
                                    <p class="text-xl mb-2">{{ __('995 kr.') }}</p>
                                    <p class="text-xs mb-2 text-gray-500">{{ __('eks. moms') }}</p>
                                </div>
                                <button
                                    class="mb-4 py-2 w-28 mt-2 shadow-md no-underline rounded-full  text-green-700 font-sans font-semibold text-sm border-green btn-success hover:text-green-700 hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #117140"
                                        @click="showModal = true"
                                ><i class="fa fa-play"></i> {{ __('Se infovideo') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="sm:mx-40 bg-gray-500 mx-20 text-center mt-4 py-2 w-28 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">
                            <span class="text-center">Vælg</span>
                        </div>
                    </div>

                    {{-- Plus Package --}}

                    <div class="container w-full mx-auto rounded-md bg-white mt-20">
                        <div class="w-full grid grid-cols-4 space-x-6">
                            <div class="col-span-4 mt-4 w-full container mx-auto flex justify-center mb-6">
                                <img src="/img/package_plus.png" alt="" class="w-1/2" style="max-width: 100%;">
                            </div>
                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Køberkartotek') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Nofikation ved ny køber') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Favoritliste') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Udvidet viden om køberne') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Anbefalet mægler') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Bliv vist som lokal mægler') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            
                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Målrettet markedsføring') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            {{-- Toggle monthly or yearly pay --}}
                            <div class="xs:w-full xs:px-10 xs:col-span-4 sm:px-32">
                                <div class="relative text-center mb-2 w-32 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid gray">
                                    <div class="radio-group inline-flex flex-row flex-initial justify-center rounded-lg shadow-md">
                                        <div class="radio">
                                            <input type="radio" id="monthly" name="payment" value="monthly" class="invisible">
                                            <label for="monthly" class="text-gray-400 bg-gradient-to-r from-green-400 to-blue-500">
                                            <div class=""><p>Monthly</p></div>
                                            </label>
                                        </div>
                                        <div class="radio bg-white border border-grey border-l-0">
                                            <input type="radio" id="yearly" name="payment" value="yearly" class="invisible">
                                            <label for="yearly" class=" text-gray-400">
                                            <div class=""><p>Yearly</p></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mx-auto">
                                    <p class="text-xs mb-2">{{ __('Pr. område, pr. måned') }}</p>
                                    <p class="text-xl mb-2">{{ __('1.495 kr.') }}</p>
                                    <p class="text-xs mb-2 text-gray-500">{{ __('eks. moms') }}</p>
                                </div>
                                <button
                                    class="mb-4 py-2 w-28 mt-2 shadow-md no-underline rounded-full  text-green-700 font-sans font-semibold text-sm border-green btn-success hover:text-green-700 hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #117140"
                                        @click="showModal = true"
                                ><i class="fa fa-play"></i> {{ __('Se infovideo') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="sm:mx-40 bg-gray-500 mx-20 text-center mt-4 py-2 w-28 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">
                            <span class="text-center">Vælg</span>
                        </div>
                    </div>

                    {{-- Premium package --}}
                    <div class="container w-full mx-auto rounded-md bg-white mt-20">
                        <div class="w-full grid grid-cols-4 space-x-6">
                            <div class="col-span-4 mt-4 w-full container mx-auto flex justify-center mb-6">
                                <img src="/img/package_premium.png" alt="" class="w-1/2" style="max-width: 100%;">
                            </div>
                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Køberkartotek') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Nofikation ved ny køber') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Favoritliste') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Udvidet viden om køberne') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Anbefalet mægler') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Bliv vist som lokal mægler') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <p class="text-sm">1 valgfri mægler</p><p class="text-xs">(Flere kan tilkøbes)</p>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            
                            <div class="col-span-2">
                                <p class="font-normal">
                                    {{ __('Målrettet markedsføring') }}
                                </p>
                            </div>
                            <div class="col-span-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                            {{-- Toggle monthly or yearly pay --}}
                            <div class="xs:w-full xs:px-10 xs:col-span-4 sm:px-32">
                                <div class="relative text-center mb-2 w-32 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid gray">
                                    <div class="radio-group inline-flex flex-row flex-initial justify-center rounded-lg shadow-md">
                                        <div class="radio">
                                            <input type="radio" id="monthly" name="payment" value="monthly" class="invisible">
                                            <label for="monthly" class="text-gray-400 bg-gradient-to-r from-green-400 to-blue-500">
                                            <div class=""><p>Monthly</p></div>
                                            </label>
                                        </div>
                                        <div class="radio bg-white border border-grey border-l-0">
                                            <input type="radio" id="yearly" name="payment" value="yearly" class="invisible">
                                            <label for="yearly" class=" text-gray-400">
                                            <div class=""><p>Yearly</p></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mx-auto">
                                    <p class="text-xs mb-2">{{ __('Pr. område, pr. måned') }}</p>
                                    <p class="text-xl mb-2">{{ __('1.995 kr.') }}</p>
                                    <p class="text-xs mb-2 text-gray-500">{{ __('eks. moms') }}</p>
                                </div>
                                
                                    <button
                                    class="mb-4 py-2 w-28 mt-2 shadow-md no-underline rounded-full  text-green-700 font-sans font-semibold text-sm border-green btn-success hover:text-green-700 hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #117140"
                                        @click="showModal = true"
                                    ><i class="fa fa-play"></i> {{ __('Se infovideo') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="sm:mx-40 mx-20 text-center mt-4 py-2 w-28 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #117140">
                            <span class="text-center text-white">Aktiv</span>
                        </div>
                    </div>
                </div>

                {{-- Breakpoint for medium to large devices --}}
                <div class="sm_xl sm_xl xs:invisible fixed md:visible md:static mb-20">
                    <div class="container w-full mx-auto rounded-md bg-white mt-20 shadow-lg">
                        <div class="w-full grid grid-cols-4 space-x-6 relative -top-32">
                            <div class="col-start-2 col-span-1 mt-4 container ml-4 mb-6">
                                <img src="/img/package_basis.png" alt="" class="w-40 mx-auto" style="max-width: 100%;">
                            </div>
                            <div class="col-span-1 mt-4 container ml-4 mb-6">
                                <img src="/img/package_plus.png" alt="" class="w-40 mx-auto" style="max-width: 100%;">
                            </div>
                            <div class="col-span-1 mt-4 container ml-4 mb-6">
                                <img src="/img/package_premium.png" alt="" class="w-40 mx-auto" style="max-width: 100%;">
                            </div>
                            <div class="">
                                <p class="font-normal text-sm">
                                    {{ __('Køberkartotek') }}
                                </p>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            <div class="">
                                <p class="font-normal text-sm">
                                    {{ __('Nofikation ved ny køber') }}
                                </p>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            <div class="">
                                <p class="font-normal text-sm">
                                    {{ __('Favoritliste') }}
                                </p>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            <div class="">
                                <p class="font-normal text-sm">
                                    {{ __('Udvidet viden om køberne') }}
                                </p>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            <div class="">
                                <p class="font-normal text-sm">
                                    {{ __('Anbefalet mægler') }}
                                </p>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            <div class="">
                                <p class="font-normal text-sm">
                                    {{ __('Bliv vist som lokal mægler') }}
                                </p>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <span>
                                        <p class="text-sm">1 {{ __('valgfri mægler') }}</p><p class="text-xs">({{ __('Flere kan tilkøbes') }})</p>
                                    </span>
                                </span>
                            </div>
                            <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                            <div class="">
                                <p class="font-normal text-sm">
                                    {{ __('Målrettet markedsføring') }}
                                </p>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 mx-auto" stroke="currentColor" style="color: #71000c">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </div>
                            <div class="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 mx-auto" style="max-width: 100%; color: #37972a">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            
                            <div class="mt-10">
                                {{-- Toggle monthly or yearly pay --}}
                                <div class="xs:w-full xs:px-10 xs:col-span-4 sm:px-32 md:px-0 mt-4">
                                    <div class="relative text-center mb-2 w-32 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid gray">
                                        <div class="radio-group inline-flex flex-row flex-initial justify-center rounded-lg shadow-md">
                                            <div class="radio">
                                                <input type="radio" id="monthly" name="payment" value="monthly" class="invisible">
                                                <label for="monthly" class="text-gray-400 bg-gradient-to-r from-green-400 to-blue-500">
                                                <div class=""><p class="text-sm">Monthly</p></div>
                                                </label>
                                            </div>
                                            <div class="radio bg-white border border-grey border-l-0">
                                                <input type="radio" id="yearly" name="payment" value="yearly" class="invisible">
                                                <label for="yearly" class=" text-gray-400">
                                                <div class=""><p class="text-sm">Yearly</p></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <div class="w-full mx-auto">
                                    <p class="text-xs font-light mb-2">{{ __('Pr. område, pr. måned') }}</p>
                                    <p class="text-3xl font-raleway font-semibold mb-2 mx-5 lg:mx-2">{{ __('995 kr.') }}</p>
                                    <p class="text-xs mb-2 text-gray-500 mx-10">{{ __('eks. moms') }}</p>
                                </div>
                                <button
                                class="mx-4 mb-4 py-2 w-28 mt-2 shadow-md no-underline rounded-full  text-green-700 font-sans font-semibold text-sm border-green btn-success hover:text-green-700 hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #117140"
                                @click="showModal = true"
                                ><i class="fa fa-play"></i> {{ __('Se infovideo') }}
                                </button>
                            </div>
                            <div class="mt-10">
                                <div class="w-full mx-auto">
                                    <p class="text-xs font-light mb-2">{{ __('Pr. område, pr. måned') }}</p>
                                    <p class="text-3xl font-raleway font-semibold mb-2 mx-5 lg:mx-2">{{ __('1.495 kr.') }}</p>
                                    <p class="text-xs mb-2 text-gray-500 mx-10">{{ __('eks. moms') }}</p>
                                </div>
                                <button
                                class="mx-4 mb-4 py-2 w-28 mt-2 shadow-md no-underline rounded-full  text-green-700 font-sans font-semibold text-sm border-green btn-success hover:text-green-700 hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #117140"
                                @click="showModal = true"
                                ><i class="fa fa-play"></i> {{ __('Se infovideo') }}
                                </button>
                            </div>
                            <div class="mt-10">
                                <div class="w-full mx-auto">
                                    <p class="text-xs font-light mb-2">{{ __('Pr. område, pr. måned') }}</p>
                                    <p class="text-3xl font-raleway font-semibold mb-2 mx-5 lg:mx-2">{{ __('1.995 kr.') }}</p>
                                    <p class="text-xs mb-2 text-gray-500 mx-10">{{ __('eks. moms') }}</p>
                                </div>
                                <button
                                class="mx-4 mb-4 py-2 w-28 mt-2 shadow-md no-underline rounded-full  text-green-700 font-sans font-semibold text-sm border-green btn-success hover:text-green-700 hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="border: 1px solid #117140"
                                @click="showModal = true"
                                ><i class="fa fa-play"></i> {{ __('Se infovideo') }}
                                </button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="grid grid-cols-4">
                        <div class="md:col-start-2 bg-gray-500 mx-10 text-center mt-4 py-2 w-28 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">
                            <span class="text-center">Vælg</span>
                        </div>
                        <div class="bg-gray-500 mx-10 text-center mt-4 py-2 w-28 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">
                            <span class="text-center">Vælg</span>
                        </div>
                        <div class="mx-10 text-center mt-4 py-2 w-28 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #117140">
                            <span class="text-center text-white">Aktiv</span>
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </div>

{{-- Modal with video --}}

    <div
      class="fixed inset-0 w-full h-full z-20 bg-opacity-50 duration-300 overflow-y-auto"
      x-show="showModal"
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
          class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20 my-40"
          @click.away="showModal = false"
          x-show="showModal"
          x-transition:enter="transition transform duration-300"
          x-transition:enter-start="scale-0"
          x-transition:enter-end="scale-100"
          x-transition:leave="transition transform duration-300"
          x-transition:leave-start="scale-100"
          x-transition:leave-end="scale-0"
        >
          <main class="p-3 text-center">
            <img src="/img/video_presentation.png" alt="">
          </main>
          <footer class="flex justify-center bg-transparent">
            <button
              class="bg-green-600 font-semibold text-white py-3 w-full rounded-b-md hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
              @click="showModal = false"
            >
              Tæt
            </button>
          </footer>
        </div>
      </div>
    </div>
</div>
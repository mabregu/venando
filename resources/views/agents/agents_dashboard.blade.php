<x-app-layout>
    <style>
        main {
            /* max-height: 100vh; */
            background-color: #efe9e9;
        }

        [x-cloak] {
			display: none;
        }
        
    </style>
    
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
    <div class="w-full container mx-auto overflow-hidden" style="background-color: #f7f4f4">
        <div class="container mx-auto">
            <div x-data="app()" x-cloak>
                            
                <div x-show.transition="step === 'complete'">
                    <div class="">
                        <div>
                            <h1 class="text-3xl text-center pb-2 font-raleway">
                                {{ __(' Tak for din mægleroprettelse hos Venando') }}
                            </h1>
                            <div>
                                <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                            </div>
                            <p class="font-raleway">
                                {{ __('Your data has been uploaded.') }}
                            </p>
                            <br>
                            <br><button
                            class=" py-4 px-20 shadow-md no-underline rounded-full text-white font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2 font-raleway" style="background-color: #777"
                            ><a href="/">{{ __('Tilbage') }}</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div x-show.transition="step != 'complete'">

                    {{-- Step 1: Dashboard main --}}
                    
                    {{-- BREAKPONIT FOR EXTRA-SAMALL TO SMALL DEVICES --}}
                    <div class="mb-4 w-8/12 mx-auto" x-show.transition.in="step === 1">
                        <div class="xs md:invisible md:fixed">
                            {{-- Section Title --}}
                            <h1 class="text-3xl text-center pb-2 font-raleway pt-20 lg:col-span-2">
                                {{ __('Velkommen til dit mæglerkontor') }}
                            </h1>
                            <div class="lg:col-span-2">
                                <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                            </div>
                            <div class="w-full container mx-auto">
                                <div class="grid grid-cols-2 w-full mx-auto">
                                    <div class="col-span-1 lg:col-span-1" style="background-color: #ebe3e3">
                                        Navn: Dennis Smukke
                                    </div>
                                    <div class="col-span-1 lg:col-span-1" style="background-color: #ebe3e3">
                                        Butik tlf.: 23 54 54 78
                                    </div>
                                    <div class="col-span-1 lg:col-span-1">
                                        Butik: Home, Rødovre
                                    </div>
                                    <div class="col-span-1 lg:col-span-1">
                                        CVR-nr: 88935432
                                    </div>
                                    <div class="col-span-2" style="background-color: #ebe3e3">
                                        Email: ch@shitmain.dk
                                    </div>
                                </div>
                                <div class="flex justify-center col-span-1 lg:col-span-2 lg:gap:4 w-1/2 pt-4 mx-auto">
                                    <ul>
                                        <li>
                                            <p class="mb-1">Dette kontor kører pakken</p>
                                            <span class="mb-2 text-lg" style="color: #106eb9;">Premium</span>
                                            <br>
                                            <strong><a href="#">Skift pakke</a></strong>
                                            <br>
                                            <strong><a href="#">Se historik</a></strong>
                                            <br>
                                            Betalingsstatus: <span class="text-green-500">OK</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-4 w-full container mx-auto flex justify-center">
                                    <img src="/img/package_basis.png" alt="" class="w-1/2" style="max-width: 100%;">
                                </div>
                                <div class="mt-4 w-full container mx-auto flex justify-center">
                                    <button
                                    x-show="step === 1"
                                    @click="step++"
                                    class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                        Rediger oplysninger
                                    </button>
                                </div>
                                <hr class="mt-5 mb-5" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                    
                                <div class="mb-4 md:invisible md:absolute">
                                    <div class="w-full container mx-auto">
                                        <div class="grid grid-cols-4 w-10/12 mx-auto">
                                            <div class="col-span-4 md:col-span-1 mb-4">
                                                <span style="color: #106eb9">Dine mæglere</span>
                                            </div>
                                            <div class="col-span-4 md:col-span-1 mb-4 gap-4">
                                                Du kan fremhæve yderligere <strong>3 mæglere</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Navn</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <span class="mb-">Christian taco</span>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Email</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <span class="mb-">ct@home.dk</span>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Fremhæv Mægler</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <div class="w-10 mx-auto">
                                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                </div>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Handling</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <div class="col-span-4 md:col-span-1 flex space-x-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <hr class="mt-5 mb-5 w-full col-span-4" align="center" size="2" style="background-color: #9D9D9C" />
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Navn</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <span class="mb-">Torben Hansen</span>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Email</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <span class="mb-">th@home.dk</span>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Fremhæv Mægler</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <div class="w-10 mx-auto">
                                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                </div>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Handling</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <div class="col-span-4 md:col-span-1 flex space-x-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <hr class="mt-5 mb-5 w-full col-span-4" align="center" size="2" style="background-color: #9D9D9C" />
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Navn</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <span class="mb-">Torben Hansen</span>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Email</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <span class="mb-">th@home.dk</span>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Fremhæv Mægler</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <span>Kræver Premium</span>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <strong>Handling</strong>
                                            </div>
                                            <div class="col-span-2 md:col-span-1 mb-4">
                                                <div class="col-span-4 md:col-span-1 flex space-x-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <hr class="mt-5 mb-5 w-full col-span-4" align="center" size="2" style="background-color: #9D9D9C" />
                                        </div>
                                        <div class="flex justify-center col-span-1 w-1/2 pt-4 mx-auto">
                                            <ul>
                                                <li>
                                                    <p class="mb-1" style="color: #106eb9">{{ __('Hvad betyder “Fremhæv mægler”?') }}</p>
                                                    <p class="mb-2">
                                                        {{ __('Ejendomsmægleren bliver fremhævet på Venando med billede, navn og e-mail. Mægler vil dertil være fremhævet med visitkort') }}
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mt-4 w-full container mx-auto flex justify-center">
                                            <button
                                            x-show="step === 1"
                                            @click="step = 4"
                                            class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                                Tilføj sælger
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                                
                                <hr class="mt-5 mb-5 w-full col-span-4" align="center" size="2" style="background-color: #9D9D9C" />
                                
                                <div class="conainer w-full mx-auto">
                                    <h3 class="mb-4" style="color: #106eb9">Seneste indlæg på opslagstavlen</h3>
                                    <div class="w-full col-span-3 col-gap-4">
                                        <div><img src="/img/foot_img_1.png" alt=""></div>
                                        <div><img src="/img/foot_img_2.png" alt=""></div>
                                        <div><img src="/img/foot_img_1.png" alt=""></div>
                                    </div>
                                    <div class="py-4 w-full container mx-auto flex justify-center">
                                        <button class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                            {{ __('Se hele opslagstavlen') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- BREAKPOINT FOR MEDIUM TO LARGE DEVICES --}}    
                            <div class="sm_xl sm_xl xs:invisible fixed md:visible md:static">
                                {{-- Section Title --}}
                                <h1 class="text-3xl text-center pb-2 font-raleway pt-20 lg:col-span-2">
                                    {{ __('Velkommen til dit mæglerkontor') }}
                                </h1>
                                <div class="lg:col-span-2">
                                    <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                                </div>
        
                                <div class="container mx-auto">
                                    <div class="grid grid-cols-3 w-full">
                                        <div class="col-span-1 lg:col-span-1" style="background-color: #ebe3e3">
                                            Navn: Dennis Smukke
                                        </div>
                                        <div class="col-span-1 lg:col-span-1" style="background-color: #ebe3e3">
                                            Butik tlf.: 23 54 54 78
                                        </div>
                                        
                                        <div></div>
                                                                    
                                        <div class="col-span-1 lg:col-span-1">
                                            Butik: Home, Rødovre
                                        </div>
                                        <div class="col-span-1 lg:col-span-1">
                                            CVR-nr: 88935432
                                        </div>
        
                                        <div></div>
        
                                        <div class="col-span-2" style="background-color: #ebe3e3">
                                            Email: ch@shitmain.dk
                                        </div>
                                    </div>
                                    <div class="mt-4 w-10/12 containerflex justify-start">
                                        <button
                                        x-show="step === 1"
                                        @click="step++"
                                        class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                            Rediger oplysninger
                                        </button>
                                    </div>
                                </div>
        
                                <div class="relative md:-top-40 md:-right-60 lg:-top-32 lg:-right-40 lg:w-1/2 lg:float-right">
                                    <div class="flex justify-end">
                                        <ul>
                                            <li>
                                                <p class="mb-1 text-sm font-raleway">Dette kontor kører pakken</p>
                                                <span class="mb-2 text-2xl font-raleway" style="color: #106eb9;">Premium</span>
                                                <br>
                                                <strong class="underline font-semibold"><a href="#">Skift pakke</a></strong>
                                                <br>
                                                <strong class="underline font-semibold"><a href="#">Se historik</a></strong>
                                                <br>
                                                <span class="text-sm font-raleway font-light">Betalingsstatus: </span><span class="text-green-500">OK</span>
                                            </li>
                                        </ul>
                                        <div class="flex justify-start h-30 w-60">
                                            <img src="/img/package_basis.png" alt="" class="w-1/2" style="max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-5 mb-5" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                                <div class="grid grid-cols-2 divide-x-2 divide-black w-screen overflow-hidden">
                                    <div class="w-full container">
                                        <div class="grid grid-cols-4 gap-4 w-full mx-auto">
                                            <div class="col-span-2">
                                                <span style="color: #106eb9">Dine mæglere</span>
                                            </div>
                                            <div class="col-span-2">
                                                Du kan fremhæve yderligere <strong>3 mæglere</strong>
                                            </div>
                                            <div class="">
                                                <strong>Navn</strong>
                                            </div>
                                            <div class="">
                                                <strong>E-mail</strong>
                                            </div>
                                            <div class="">
                                                <strong>Fremhæv mægler</strong>
                                            </div>
                                            <div class="">
                                                <strong>Handling</strong>
                                            </div>
                                        </div>
                                        <hr class="mt-5 mb-5 h-px" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                                        <div class="grid grid-cols-4 gap-4 w-full mx-auto">
                                            <div class="mb-4">
                                                <span>Christian Taco</span>
                                            </div>
                                            <div class="mb-4">
                                                <span>ct@home.dk</span>
                                            </div>
                                            <div class="mb-4">
                                                <div class="w-10 mx-auto">
                                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="col-span-4 md:col-span-1 flex space-x-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4 w-full mx-auto">
                                            <div class="mb-4">
                                                <span>Torben Hansen</span>
                                            </div>
                                            <div class="mb-4">
                                                <span>th@home.dk</span>
                                            </div>
                                            <div class="mb-4">
                                                <div class="w-10 mx-auto">
                                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="col-span-4 md:col-span-1 flex space-x-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4 w-full mx-auto">
                                            <div class="mb-4">
                                                <span>Torben Hansen</span>
                                            </div>
                                            <div class="mb-4">
                                                <span>th@home.dk</span>
                                            </div>
                                            <div class="mb-4 text-center">
                                                <span>Kræver Premium</span>
                                            </div>
                                            <div class="mb-4">
                                                <div class="col-span-4 md:col-span-1 flex space-x-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="2xl:w-60 xl:w-60 lg:w-60 md:w-40">
                                        <h5 class="ml-5 text-xl text-left" style="color: #106eb9">Hvad betyder “Fremhæv mægler”?</h5>
                                        <p class="text-sm mx-5">Ejendomsmægleren bliver fremhævet på Venando med billede, navn og e-mail.</p>
                                        <p class="text-sm mx-5">Mægler vil dertil være fremhævet med visitkort</p>
                                    </div>
                                </div>
                                <div class="mt-4 w-full container mx-auto flex justify-start">
                                    <button
                                    x-show="step === 1"
                                    @click="step = 4"
                                    class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                        Tilføj sælger
                                    </button>
                                </div>
                                <hr class="mt-5 mb-10" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
    
                                <div class="conainer w-full mx-auto">
                                    <h3 class="mb-4" style="color: #106eb9">Seneste indlæg på opslagstavlen</h3>
                                    <div class="w-full grid grid-cols-3 gap-4">
                                        <div><img src="/img/foot_img_1.png" alt=""></div>
                                        <div><img src="/img/foot_img_2.png" alt=""></div>
                                        <div><img src="/img/foot_img_1.png" alt=""></div>
                                    </div>
                                    <div class="py-4 w-full container mx-auto flex justify-start">
                                        <button class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer">
                                            {{ __('Se hele opslagstavlen') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                    </div>

                    {{-- Step 2: Edit info and update package --}}
                    <div class="mb-4 w-8/12 mx-auto" x-show.transition.in="step === 2">
                        @include('auth.agents_update_information')
                    </div>
                
                    {{-- Step 3: Address info and see package --}}
                    <div class="mb-4  w-8/12 mx-auto" x-show.transition.in="step === 3">
                        @include('agents.agents_order_confirm')
                    </div>

                    {{-- Step 4: Add Seller --}}
                    <div class="mb-4 w-8/12 mx-auto" x-show.transition.in="step === 4">
                        @include('agents.agents_add_seller')
                    </div>
                    
                    {{-- Step 5: See basket --}}
                    <div class="mb-4 w-8/12 mx-auto" x-show.transition.in="step === 5">
                        @include('agents.agents_basket')
                    </div>

                </div>

                {{-- Buttons navigation --}}
                <div class="py-6 inline-flex col-span-2 mx-auto md:w-full" x-show="step != 'complete'">
                    <div class="inline-flex col-span-2 xl:pl-20 lg:mx-64 md:mx-40 space-x-4 md:h-12">
                        <button
                            x-show="step > 1 && step !== 4"
                            @click="step--"
                            class=""
                            ><img src="/img/back-arrow.svg" alt="" style="height: 3rem;">
                        </button>

                        <button
                            x-show="step === 4"
                            @click="step-=3"
                            class=""
                            ><img src="/img/back-arrow.svg" alt="" style="height: 3rem;">
                        </button>

                        {{-- on step 2 --}}
                        <button
                            x-show="step === 2"
                            @click=""
                            class="w-20 py-2 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #86020c; hover:cursor:pointer"
                        >Slet Kontor
                        </button>
                        
                        <button
                            x-show="step === 2"
                            @click="step++"
                            class="w-20 py-2 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                        >Gem ændringer
                        </button>
                        
                        {{-- on step 3. Button on step 3 sheet --}}

                        {{-- on step 4 --}}
                        <button
                            x-show="step === 4"
                            @click="step++"
                            class="py-2 px-12 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                        >Tilføj og se kurv
                        </button>
                        
                        <button
                            x-show="step === 4"
                            @click="step++"
                            class="py-2 px-12 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #86020c; hover:cursor:pointer"
                        >Nej tak. Se kurv
                        </button>

                        {{-- <button
                            x-show="step === 5"
                            @click="step = "
                            class="w-20 py-2 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                        >Godkend og videre
                        </button> --}}
                    </div>
                </div>
                {{-- End button section --}}
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script>
// Navbar Toggle
function app() {
    return {
        step: 1, 
    }
}
document.addEventListener('DOMContentLoaded', function () {


    // Get all "navbar-burger" elements
    let $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {

        // Get the "main-nav" element
        var $target = document.getElementById('main-nav');

        // Toggle the class on "main-nav"
        $target.classList.toggle('hidden');

        });
    });
    }

});
</script>
</x-app-layout>
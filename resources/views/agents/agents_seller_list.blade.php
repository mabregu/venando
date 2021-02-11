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
                        <h1 class="text-3xl text-center pb-2 font-raleway font-normal">
                            {{ __('Sælgerliste') }}
                        </h1>
                        <h2 class="text-2xl text-center pb-2 font-raleway font-base" style="color: #229ddd">
                            {{ __('Kommer snart på Venando!') }}
                        </h2>
                        <div>
                            <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                        </div>
                        <div class="text-center">
                            <p class="w-1/2 mx-auto text-xl mb-4">{{ __('Sælgerlisten giver dig som ejendomsmægler, et indblik i hvem der sælger deres bolig og hvor i landet det er.') }}</p>
                            <span class="font-semibold text-base text-center mb-4 font-raleway">{{ __('Sælgerlisten launches medio marts') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</x-app-layout>
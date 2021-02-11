<footer class="relative bg-gray-300 pt-8 pb-6" style="background-color: #efe9e9">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center md:inline-flex md:w-full">
            <div class="w-full lg:w-6/12 px-8">
                {{-- <h4 class="text-3xl font-semibold">Let's keep in touch!</h4> --}}
                <img class="w-32 my-6" src="/img/venando_logo.png" alt="">
                <h5 class="mt-0 mb-2 text-gray-700 text-xs">
                    Copyright {{ date('Y') }} | Venando | All Rights Reserved
                </h5>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span
                        class="block text-sm font-semibold mb-2"
                        style="color: #2693c7">Kontakt</span
                        >
                        <ul class="list-unstyled">
                            <li>
                                <p
                                class="text-gray-700 hover:text-gray-900 block pb-2 text-xs font-normal font-raleway"
                                href="{{ route('about') }}">
                                Hovedvagtsgade 8, 5. sal
                                <br>
                                1103 København K.
                                <br>
                                info@venando.dk
                                <br>
                                +45 40 40 78 58</p
                                >
                            </li>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span
                        class="block text-sm font-semibold mb-2"
                        style="color: #2693c7">Nyttige links</span
                        >
                        <ul class="list-unstyled">
                            <li>
                                <a
                                class="text-gray-700 hover:text-gray-900 block pb-0 text-xs font-normal font-raleway"
                                href="{{ route('about') }}"
                                >Hvordan fungerer det?</a
                                >
                                <a
                                class="text-gray-700 hover:text-gray-900 block pb-0 text-xs font-normal font-raleway"
                                href="{{ route('about') }}"
                                >Handelsbetingelser</a
                                >
                                <a
                                class="text-gray-700 hover:text-gray-900 block pb-0 text-xs font-normal font-raleway"
                                href="{{ route('about') }}"
                                >Persondatapolitik</a
                                >
                                <a
                                class="text-gray-700 hover:text-gray-900 block pb-0 text-xs font-normal font-raleway"
                                href="{{ route('about') }}"
                                >Om Venando</a
                                >
                                <a
                                class="text-gray-700 hover:text-gray-900 block pb-0 text-xs font-normal font-raleway"
                                href="{{ route('about') }}"
                                >Kontakt</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span
                        class="block text-sm font-semibold mb-2"
                        style="color: #2693c7">Følg os på</span
                        >
                        <ul class="list-unstyled">
                            <li class="flex mr-10">
                                <a
                                class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-xs"
                                href="#"
                                ><i class="flex fab fa-facebook ml-2 mr-5"></i></a
                                >
                            <a href="#"><i class="flex fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div
        class="flex flex-wrap items-center md:justify-between justify-center"
        >
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class=" text-xs text-gray-400 font-semibold py-1">
            Design by 
            <a
                href="/"
                class= text-gray-400 hover:text-gray-900"
                >{{ 'Adjust' }}</a
            > | Development by <a href="/"
            class= text-gray-400 hover:text-gray-900"
            >{{ 'Backbone Agency.' }}</a>
            </div>
        </div>
        </div>
    </div>
</footer>
    {{-- <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px);"
    >
        <svg
        class="absolute bottom-0 overflow-hidden"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none"
        version="1.1"
        viewBox="0 0 2560 100"
        x="0"
        y="0"
        >
        <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
        ></polygon>
        </svg>
    </div> --}}
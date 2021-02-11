<x-app-layout>
    @include('layouts.agents_navigation')
    <main>
        {{--===================== 
                  HEADER
           =====================--}}
        <div class="relative">
            <div>
                <div class="relative pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
                    <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:h-60" style="max-width: 100%;">
                        <img src="img/agents_banner.png" alt="" style="max-width: 100%">
                    </div>
                </div>
                <div class="container relative xl:-top-30 lg:-top-80 md:-top-72 mx-auto top-20 lg:w-6/12 md:w-6/12 sm:w-6/12" style="z-index: 2;">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-12/12 ml-auto mr-auto text-center">
                            <div class="p-auto">
                                <h1 class="text-blue-500 text-7xl font-raleway font-light pb-0">
                                {{ __('Fremtidens værktøj') }}
                                </h1>
                                <p class="mt-4 text font-semibold text-gray-300 text-4.5xl">
                                {{ __("til dig som er lokal ejendomsmægler") }}
                                </p>
                                {{-- CITY SEARCH --}}
                                <div class="justify-center pt-12">
                                    <ul class="flex justify-center">
                                        <li><button class="py-4 xl:px-24 lg:16 sm:12 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #117a44"><a href="{{ route('welcome') }}">Opret mæglerkontor</a></button></li>
                                        <li><button class="py-4 xl:px-24 lg:16 sm:12 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #2197d5">Har du flere butikker?</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" lg:-top-19 md:-top-64 relative w-20 lg:w-10/12 md:w-10/12 sm:w-10/12 mx-auto" style="z-index: 2;">
                <section class="w-full lg:w-10/12 md:w-8/12 px-20 m-auto" style="background-color: #ffffff">
                    <div class="w-full mx-auto text-center">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-3/12 px-16 py-6">
                                {{-- <svg class="h-10 w-10 mb-2 mx-auto pb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" style="left: 15%" />
                                </svg> --}}
                                <img src="/img/agents_circle.png" alt="" class="h-10 w-10 mb-2 mx-auto py-2">
                            <span
                            class="block uppercase text-gray-600 text-sm font-semibold mb-2 font-raleway"
                            >{{ __('Fakta 1') }}</span
                            >
                            <ul class="list-unstyled">
                                <li>
                                    <p class="font-raleway text-xs">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-16 py-6">
                                <img src="/img/agents_circle.png" alt="" class="h-10 w-10 mb-2 mx-auto py-2">
                            <span
                            class="block uppercase text-gray-600 text-sm font-semibold mb-2 font-raleway"
                            >{{ __('Fakta 2') }}</span
                            >
                            <ul class="list-unstyled">
                                <li>
                                    <p class="font-raleway text-xs">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-16 py-6">
                                <img src="/img/agents_circle.png" alt="" class="h-10 w-10 mb-2 mx-auto py-2">
                            <span
                            class="block uppercase text-gray-600 text-sm font-semibold mb-2 font-raleway"
                            >{{ __('Fakta 3') }}</span
                            >
                            <ul class="list-unstyled">
                                <li>
                                    <p class="font-raleway text-xs">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-16 py-6">
                                <img src="/img/agents_circle.png" alt="" class="h-10 w-10 mb-2 mx-auto py-2">
                            <span
                            class="block uppercase text-gray-600 text-sm font-semibold mb-2 font-raleway"
                            >{{ __('Fakta 4') }}</span
                            >
                            <ul class="list-unstyled">
                                <li>
                                    <p class="font-raleway text-xs">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
                <div class="relative md:-top-52">
                    <section class="w-full lg:w-6/12 md:w-6/12 sm:w-10/12 px-4 mr-auto sm:w-12/12 mx-auto md:mt-0 sm:mt-60">
                        <h2 class="text-left text-4xl leading-3">
                        <h3 class="text-gray-600 text-4xl font-extralight mb-8 lg:w-6/12 font-raleway">Udviklet fra erfaring</h3>
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-6/12 px-auto my-auto pr-6">
                                <ul class="list-unstyled text-left">
                                    <li>
                                        <p class="text-xs lg:w-12/12 font-raleway">
                                            Med erfaring fra branchen og viden om at struktur og be- hovsafdækning er de vigtigste egenskaber for at være en pro- duktiv og dygtig sælger, ønskede vi at udvikle en platform, der kunne varetage den proaktive opgave, det er at matche dig med boligsøgende i din by. Ideen og visionen startede for mere end 3 år siden, og vi har indtil nu arbejdet på at koncep- tualisere og udvikle Venando.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-6/12 px-auto my-auto">
                                <ul class="list-unstyled">
                                    <li>
                                        <p class="text-xs align-text-bottom lg:w-6/12 font-raleway">
                                            Efter lang tids udvikling, i tæt samarbejde med over 30 forskellige ejendomsmæglere, kan vi nu præsentere ”Venan- do.dk”. Vi bliver ved med at videreudvikle og optimere syste- met, i samarbejde med jer, så vi kan tilbyde det bedst mulige værktøj.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
        {{-- VIDEO PRESENTATION --}}
        <div class="top-20">
            <section>
                <div class="overflow-visible relative" style="max-height: 600px">
                <div class="bg-top overflow-hidden absolute inset-x-0 top-0 object-top mx-auto" style="top: -30%;height: auto;width: 45%;">
                    <img class="w-full object-contain h-full" src="/img/video_presentation.png" alt="" style="max-width: 100%">
                </div>
                <div class="bg-top overflow-hidden absolute inset-x-0 top-0 object-top mx-auto" style="top: 15%;height: 50%;width: 25%;left: -65%;">
                    <img class="w-full object-contain h-full transform-gpu -rotate-15" src="/img/agent_hvorfor_venando.png" alt="" style="max-width: 100%">
                </div>
                <div class="overflow-hidden" style="max-height: 500px">
                    <img class="object-cover" src="/img/agents_buildings_1.png" alt="">
                </div>
                </div>
            </section>
        </div>
        
        <div class="w-screen bg-white py-16 relative">
            <div class="w-20 lg:w-8/12 md:w-10/12 sm:w-8/12 mx-auto" style="z-index: 2;">
                <section class="w-full lg:w-10/12 md:w-12/12 sm:w-12/12" style="background-color: #ffffff">
                    <div class="w-full mx-auto text-center">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-3/12 px-4">
                                <span
                                class="block uppercase text-gray-600 text-sm mb-2" style="color: #229fde"
                                >Stå stærkere</span
                                >
                                <ul class="list-unstyled">
                                    <li>
                                        <p class="text-sm font-raleway">
                                            Tag et nyt univers af købere med i mappen hver gang du skal på vurdering
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-3/12 px-4">
                                <span
                                class="block uppercase text-gray-600 text-sm mb-2" style="color: #229fde"
                                >Eksponer din butik</span
                                >
                                <ul class="list-unstyled">
                                    <li>
                                        <p class="text-sm font-raleway">
                                            Bliv en del af Venando og byd køberne velkommen når de ønsker at bo i dit postnummer
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-3/12 px-4">
                                <span
                                class="block uppercase text-gray-600 text-sm mb-2" style="color: #229fde"
                                >Flere vurderinger</span
                                >
                                <ul class="list-unstyled">
                                    <li>
                                        <p class="text-sm font-raleway">
                                            Med dit visit kort på Venando så er du altid tæt på køberne, også når de skal sælge
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- AGENT --}}
                    <div class="absolute flex flex-wrap lg:visible md:invisible sm:invisible" style="bottom: 0; right:0; width:25%">
                        <img src="/img/agent_dialog.png" alt="" style="max-width: 100%;max-height: 15rem;position: absolute;bottom: 0%;right: 75%;top: 2rem;z-index: 2;">
                        <img src="/img/agent.png" alt="" style="max-width: 100%; max-height: 25rem; margin-right: 5rem;">
                    </div>
                </section>
            </div>
        </div>

        {{-- CONTACT US --}}
        
        <div class="top-20">
            <section>
                <div class="overflow-visible relative" style="max-height: 600px">
                    <div class="bg-top overflow-hidden absolute inset-x-0 top-5 object-top my-10 mx-auto" style="background-color: white;height: 75%;width: 75%;">
                        <div class="lg:w-12/12 md:w-12/12 sm:w-12/12">
                            <div class="bg-white mx-auto top-40" style="background-color: white">
                                <div class="flex flex-wrap px-6">
                                    <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                                        <div class="bg-white">
                                            <div class="">
                                                <h1 class="text-4xl text-center pb-0 font-raleway">
                                                    {{ __('Vil du vide mere?') }}
                                                </h1>
                                                <h5 class="text-3xl text-center pb-6 font-raleway" style="color: #106eb9">
                                                    {{ __('Bliv ringet op') }}
                                                </h5>
                                                <form action="#" class="flex flex-col space-y-5">
                                                    <div class="flex flex-col space-y-1">
                                                      <input type="text" id="name" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" placeholder="Navn"/>
                                                    </div>                      
                                                    <div class="flex flex-col space-y-1">
                                                      <input type="email" id="email" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" placeholder="E-mail"/>
                                                    </div>                      
                                                    <div class="flex flex-col space-y-1">
                                                      <input type="text" id="telephone" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" placeholder="Telefonnummer"/>
                                                    </div>
                                                    <div class="w-full lg:w-8/12 ml-auto mr-auto text-center">
                                                        <input type="submit" value="send"  class="py-2 px-40 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438">
                                                        <div class="pt-6 flex flex-wrap">
                                                            <input class="form-checkbox text-green-600 mr-2" type="checkbox" name="" id=""><p class="text-sm">Godkend Venando’s vilkår og betingelser</p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/2  md:px-4 lg:px-6 py-5">
                                        <div class="bg-white">
                                            <div class="">
                                                <img src="/img/magazine.png" class="mx-auto" style="max-width: 100%; height: 15rem">
                                                <div class="w-full lg:w-8/12 ml-auto mr-auto text-center">
                                                    <h5 class="text-3xl text-center pb-6">
                                                        Læs mere om Venando i vores brochure
                                                    </h5>
                                                    <button class="py-2 px-4 no-underline rounded-full bg-blue text-gray-500 font-sans font-semibold text-sm focus:outline-none mr-2" style="border: 1px solid #9e9d9e; color: #9e9d9e">Download PDF</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden" style="max-height: 80vh">
                        <img class="object-cover" src="/img/agents_buildings.png" alt="">
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-app-layout>
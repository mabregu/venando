<x-app-layout>
    <style>
        main {
            /* max-height: 100vh; */
            background-color: #efe9e9;
        }
        
    </style>
    
    @include('layouts.agents_navigation')
    
    <div class="relative pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
        <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:h-60" style="max-width: 100%;">
            <img src="/img/agents_buildings_poligon.png" alt="" style="max-width: 100%">
        </div>
    </div>
    <div class="xl:-top-96 lg:-top-60 md:top-140 relative w-full h-80 mx-auto sm:-top-80" style="z-index: 2;">
        <section class="w-8/12 lg:w-8/12 md:w-8/12 px-4 m-auto py-2" style="background-color: #f7f4f4;">
            <div class="w-9/12 mx-auto text-center">
                <div class="flex flex-wrap px-auto">
                    <div class="w-full lg:w-12/12 py-5">
                        <div class="" style="background-color: #f7f4f4">
                            <div class="">
                                <h1 class="text-3xl text-center py-2 font-raleway">
                                    {{ __('Velkommen til Venando') }}
                                </h1>
                                <br>
                                <h1 class="text-xl text-center pb-2 font-raleway w-1/2 mx-auto" style="color: #106eb9">
                                    {{ __('Vi ved at tiden er knap, men vi håber du alligevel læser med!') }}
                                </h1>
                                <div>
                                    <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                                </div>
                                <div class="w-full mx-auto text-left">
                                    <div class="flex flex-wrap items-top mb-6">
                                        <div class="w-full lg:w-6/12 px-2 py-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="font-raleway text-base font-light">
                                                        {{ __('Tid er penge! - og Venando bestræber sig efter at skabe begge dele til din forretning! Vores vigtigste opgave er at finde købere via vores algoritmer og sørge for de er behovsafdækket i de kroge og hjørner hvor jeres markedsføring på en salgsopstilling ikke når ud! Vi ønsker ikke i skal sidde til sen aften og ringe forgæves til købere i vores univers da vi opdater dem så i kan ligge tiden anderledes!') }}
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-2 py-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="font-raleway text-base font-light">
                                                        {{ __('Venando er langt mere end et kartotek, og vi ønsker at du ved mest muligt om køberne, så du kan formindske dit antal af fremvisninger. Det betyder at hvis køberen arbejder hjemme og elsker at sejle kajak, så ved du at hurtigt internet og en sø i nærheden er en fantastisk egenskab når du skal præsentere.') }}
                                                    </p>
                                                    <br>
                                                    <p class="font-raleway text-gray-900 text-base font-medium">
                                                        {{ __('Teamet bag Venando ønsker dig god arbejdslyst') }}
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="w-1/2 mx-auto">
                                        <button
                                        class="w-full mx-auto py-4 px-20 shadow-md no-underline rounded-full text-white font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2 font-raleway" style="background-color: #41a438"
                                        ><a href="{{ route('information') }}">{{ __('Forsæt') }}</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
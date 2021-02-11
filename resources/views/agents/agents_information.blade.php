<x-app-layout>

  <style>
    main {
      background-color: #ebe3e3;
    }
  </style>

    @include('layouts.agents_navigation')
        
      <div class="relative pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
        <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:h-60" style="max-width: 100%;">
            <img src="/img/agents_buildings_poligon.png" alt="" style="max-width: 100%">
        </div>
        <div class="absolute flex flex-wrap w-full mx-auto top-40">
            <div class="w-full lg:w-1/2 md:px-4 lg:px-6 mt-10">
                <h1 class=" text-5xl font-light text-left pb-0 text-white font-raleway mx-auto w-1/2" style="color: #229fde">
                    {{ __('Venando\'s') }}
                </h1>
                <h1 class=" text-6xl font-light text-left pb-0 text-white font-raleway mx-auto w-1/2">
                    {{ __('Pakkeløsninger') }}
                </h1>
                <p class="text-left font-raleway font-medium text-3xl pb-0 text-white mx-auto w-1/2 md:invisible sm:invisible">
                  {{ __('   Pakkeløsninger
                  Valg af pakke og område kan først foretages efter oprettelse') }}
                </p>
            </div>
        </div>
      </div>

      {{-- Cards Section --}}
      <section>
        <div class="container max-w-full mx-auto px-6">
          <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
            <div class="relative flex flex-col md:flex-row items-center 2xl:-top-20 2xl:h-full lg:top-10" style="z-index: 2">
              <div class="absolute w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 md:relative sm:relative z-0 rounded-lg bottom-0">
                <article class="bottom-0 left-0 bg-white mb-10 w-72 lg:px-10 md:px-10 sm:px-10 px-10 text-center rounded-lg" style="border-bottom: 0.5rem solid #46ace4; z-index: 2">
                  <div class="relative md:visible sm:invisible">
                    <img src="/img/package_basis.png" class="w-64 mx-auto -top-40 absolute left-3" alt="">
                  </div>
                  <h2 class="pb-4 pt-12 flex justify-center font-raleway">
                    <span class="text-5xl font-light" style="color: #46ace4">{{ __('Basis') }}</span>
                  </h2>
                  <div>
                    <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                  </div>
                  <ul class="text-sm font-raleway font-normal">
                    <li class="py-2">{{ __('Søg kartotek') }}</li>
                    <li class="py-2">{{ __('Nofikation hver gang en ny skriver sig op') }}</li>
                    <li class="py-2">{{ __('Favorit liste') }}</li>
                    <hr align="center" noshade="noshade" size="2" width="90%" />
                    <li class="pt-4 pb-2 text-xs">{{ __('Pr. område, pr. måned') }}</li>
                    <li class="py-2 text-5xl font-medium">{{ __('995 kr.') }}</li>
                    <li class="pb-4 font-extralight text-gray-500">{{ __('eks. moms') }}</li>
                  </ul>
                </article>
              </div>
              <div class="absolute w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 md:relative sm:relative z-0 rounded-lg md:-mr-4 bottom-6">
                <article class="inset-x-0 bottom-0 bg-white mb-10 w-72 lg:px-10 md:px-10 sm:px-10 px-10 text-center rounded-lg" style="border-bottom: 0.5rem solid #be9b46; z-index: 2">
                  <div class="relative md:visible sm:invisible">
                    <img src="/img/package_plus.png" class="w-64 mx-auto -top-40 absolute left-3" alt="">
                  </div>
                    <h2 class="pb-4 pt-12 flex justify-center font-raleway">
                      <span class="text-5xl font-light" style="color: #be9b46">{{ __('Plus') }}</span>
                    </h2>
                    <div>
                      <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                    </div>
                    <ul class=" text-sm font-raleway font-normal">
                      <li class="py-2">{{ __('Søg kartotek') }}</li>
                      <li class="py-2">{{ __('Nofikation hver gang en ny skriver sig op') }}</li>
                      <li class="py-2">{{ __('Favorit liste') }}</li>
                      <li class="py-2">{{ __('Forøg salget med udvidet viden om køberne') }}</li>
                      <hr align="center" noshade="noshade" size="2" width="90%" />
                      <li class="pt-4 pb-2 text-xs">{{ __('Pr. område, pr. måned') }}</li>
                      <li class="py-2 text-5xl font-medium">{{ __('1.495 kr.') }}</li>
                      <li class="pb-4 font-extralight text-gray-500">{{ __('eks. moms') }}</li>
                    </ul>
                  </article>
              </div>
              <div class="absolute w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 md:relative sm:relative z-0 rounded-lg md:-mr-4 bottom-32">
                <article class="bottom-0 right-0 bg-white mb-10 w-72 lg:px-10 md:px-10 sm:px-10 px-10 text-center rounded-lg" style="border-bottom: 0.5rem solid #1586aa; z-index: 2">
                  <div class="relative md:visible sm:invisible">
                    <img src="/img/package_premium.png" class="w-64 mx-auto -top-40 absolute left-3" alt="">
                  </div>
                    <h2 class="pb-4 pt-12 flex justify-center font-raleway">
                      <span class="text-5xl font-light" style="color: #1586aa">{{ __('Premium') }}</span>
                    </h2>
                    <div>
                      <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                    </div>
                    <ul class="text-sm font-raleway font-normal">
                      <li class="py-2">{{ __('Søg kartotek') }}</li>
                      <li class="py-2">{{ __('Nofikation hver gang en ny skriver sig op') }}</li>
                      <li class="py-2">{{ __('Favorit liste') }}</li>
                      <li class="py-2">{{ __('Forøg salget med udvidet viden om køberne') }}</li>
                      <li class="py-2">{{ __('Markedsføringspakke som anbefalet mægler hvor du præsenterer Venando') }}</li>
                      <li class="py-2">{{ __('Dit visitkort vises som lokal mægler hos de boligsøgende') }}</li>
                      <li class="py-2">{{ __('Se hvem som drømmer sig væk fra dit postnummer og målret din flyer markedsføring') }}</li>
                      <hr align="center" noshade="noshade" size="2" width="90%" />
                      <li class="pt-4 pb-2 text-xs">{{ __('Pr. område, pr. måned') }}</li>
                      <li class="py-2 text-5xl font-medium">{{ __('1.995 kr.') }}</li>
                      <li class="pb-4 font-extralight text-gray-500">{{ __('eks. moms') }}</li>
                    </ul>
                  </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="w-full flex flex-wrap mx-auto lg:w-9/12">
        <div class="mx-auto flex flex-row">
          <p class="text-xl font-raleway mr-20 font-normal">{{ __('Er du i tvivl om pakkevalg eller ønsker mere end ét område?') }}</p>
            <button
                class="w-44 py-2 shadow-md no-underline rounded-full text-lg text-gray-900 font-raleway btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid black; hover:cursor:pointer"
            >Bliv ringet op
            </button>
        </div>
      </div>
      
      <div class="pt-32">
        <section>
            <div class="overflow-visible relative" style="max-height: 600px">
              <div class="bg-top overflow-hidden absolute -top-40 -left-40 object-top mx-auto" style="height: auto;width: 50%;">
                  <img class="w-full object-contain h-full" src="/img/laptop_preview.png" alt="" style="max-width: 100%">
              </div>
              <div class="overflow-hidden" style="max-height: 75vh">
                <img src="/img/agents_houses.png" alt="">
              </div>
              <div class="bg-top overflow-hidden absolute top-0 right-0 object-top mx-auto" style="height: auto;width: 50%;">
                <h1 class=" text-5xl font-light text-left pb-0 text-white font-raleway mx-auto w-1/2" style="color: #229fde">
                    {{ __('Sådan bliver du') }}
                </h1>
                <br>
                <h1 class=" text-6xl font-extralight text-left pb-0 text-white font-raleway mx-auto w-1/2">
                    {{ __('mere synlig') }}
                </h1>
                <br>
                <p class="text-left font-raleway font-medium text-xl pb-0 text-white mx-auto w-1/2">
                  {{ __('Lad os sige hej’ til Dennis, der er indehaver af Estate Rødovre, og elsker at differentiere sin markedsføring') }}
                </p>
                <br>
                <p class="text-left font-raleway font-medium text-sm pb-0 text-white mx-auto w-1/2">
                  {{ __('Lige nu har Dennis sagt ja til at blive byens mægler i Rødovre, hvilket betyder, at Dennis nu byder enhver boligsøgende i Rødovre velkommen til platformen, og guider dem igennem deres boligdrøm step by step, han er derfor ansigtet udadtil for enhver tilflytter') }}
                </p>
              </div>
              <div class="absolute w-full pt-6 flex flex-wrap col-span-2 mx-auto bottom-0 pb-10">
                <div class="flex flex-wrap col-span-2 mx-auto space-x-4">
                  <button class=""><img src="/img/back-arrow.svg" alt="" style="height: 3rem;"><a href="{{ route('welcome') }}"></a></button>
                  <button class="w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"><a href="{{ route('agent.register') }}">{{ __('Næste trin') }}</a>
                  </button>
                </div>
              </div>
            </div>
        </section>
    </div>


</x-app-layout>
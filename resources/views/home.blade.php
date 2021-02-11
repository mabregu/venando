    <x-app-layout>
      @include('layouts.navigation')
        <main>
          {{--===================== 
                    HEADER
             =====================--}}
             <div>
              <div class="relative pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
                  <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:h-60" style="max-width: 100%;">
                      <img src="img/header-img.png" alt="" style="max-width: 100%">
                  </div>
              </div>
          </div>
          <div class="container absolute left-24 top-40 mx-auto xs-top-60 xs-left-32" style="z-index: 2">
              <div class="items-center flex flex-wrap">
                  <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                      <div class="pr-12">
                          <h1 class="font-font-raleway text-white font-light text-center text-6xl w-10/12 mx-auto">
                          {{ __('Det første skridt når du skal købe ny bolig') }}!
                          </h1>
                          <p class="font-raleway mt-4 text-3xl font font-semibold text-white">
                          {{ __("Lad Venando vise dig vej") }}
                          </p>
                          {{-- CITY SEARCH --}}
                          <div class="shadow py-2 flex bg-white rounded-md mt-24">
                            <input class="w-full rounded p-2 border-none" type="text" placeholder="Hvor vil du gerne flytte hen?">
                            <button class="bg-white rounded-full py-o pl-4 pr-4 mr-4 mt-1 w-24" style="border: 1px solid #9e9d9e; color: #9e9d9e">
                                    <p class="font-semibold text-sm">Se kort</p>
                            </button>
                        </div>
                        </div>
                          <div>
                              <input type="submit" value="Start rejsen" class="mt-6 py-2 px-8 shadow-md no-underline rounded-full text-white font-raleway font-semibold text-lg border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color:#40a337">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          {{-- ROUNDED IMAGES --}}
  
          <div>
          <section class="static pt-32 pb-10" style="background-color: #ebe3e3">
            <div class="container w-10/12 mx-auto px-10 xs:pt-12">
              <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-2/12 lg:mb-0 mb-12">
                  <div class="">
                    <img
                      alt="..."
                      src="/img/housing_types/villa.png"
                      class="max-w-full mx-auto w-48"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="font-raleway text-lg">Villa</h5>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-2/12 lg:mb-0 mb-12">
                  <div class="">
                    <img
                      alt="..."
                      src="/img/housing_types/ejerlejlighed.png"
                      class="max-w-full mx-auto w-48"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="font-raleway text-lg">Ejerlejlighed</h5>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-2/12 lg:mb-0 mb-12">
                  <div class="">
                    <img
                      alt="..."
                      src="/img/housing_types/håndværkertilbud.png"
                      class="max-w-full mx-auto w-48"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="font-raleway text-lg">Håndværkertilbud</h5>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-2/12 lg:mb-0 mb-12">
                  <div class="">
                    <img
                      alt="..."
                      src="/img/housing_types/rækkehus.png"
                      class="max-w-full mx-auto w-48"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="font-raleway text-lg">Rækkehus</h5>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-2/12 lg:mb-0 mb-12">
                  <div class="">
                    <img
                      alt="..."
                      src="/img/housing_types/andelsbolig.png"
                      class="max-w-full mx-auto w-48"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="font-raleway text-lg">Andelsbolig</h5>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-2/12 lg:mb-0 mb-12">
                  <div class="">
                    <img
                      alt="..."
                      src="/img/housing_types/sommerhus.png"
                      class="max-w-full mx-auto w-48"
                    />
                    <div class="pt-6 text-center">
                      <h5 class="font-raleway text-lg">Sommerhus</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="md:flex md:justify-center mb-6 mt-5 w-10/12 mx-auto">
              <div class="form-group rounded-full py-3 mx-auto w-6/12">
                <select id="my-select" class="w-full rounded lg:w-12/12 py-4 px-4 ml-auto mr-auto text-center border-none text-sm text-gray-400" name="">
                  <option selected disabled value="" class="font-raleway">Anden boligtype? Vælg på listen her.</option>
                  <option value="" class="font-raleway">Villa.</option>
                  <option value="" class="font-raleway">Ejerlejlighed.</option>
                  <option value="" class="font-raleway">Håndværkertilbud.</option>
                  <option value="" class="font-raleway">Rækkehus.</option>
                  <option value="" class="font-raleway">Andelsbolig.</option>
                  <option value="" class="font-raleway">Sommerhus</option>
                </select>
                <div class="justify-center mt-16 select-none flex">
                  <a href="{{ route('homeseekers_register') }}"><button class="px-28 py-5 shadow-md no-underline rounded-full text-center font-semibold text-white font-raleway text-xl border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #117a44">Opret boligønske</button></a>
                </div>
              </div>
            </div>
          </section>
        </div>
      {{-- WHY VENANDO --}}
      <section class="pt-16 pb-48" style="background-color: #ffffff">
        <div class="md:flex md:justify-center mb-20 mt-5 xs:w-full xs:mx-auto xs:pl-32">
          <p class="font-raleway font-extralight text-3xl">{{ __('Hvorfor skal du bruge Venando') }}?</p>
        </div>
        <div class="container mx-auto px-64">
          <div class="md:flex md:justify-around mb-6 mt-5 space-x-6 w-full jus">
             <div class="flex-1 md:w-6/12 lg:w-3/12 lg:mb-0 justify-center">
               <img src="/img/circles.png" class=" w-16 mx-auto">
               <h5 class="text-center font-raleway font-thin text-xs px-1 mb-3" style="color: #229ddd">Start til slut</h6>
               <p class="font-raleway text-center text-xs">år du skal købe ny bolig, og vi udvikler os hver dag så du er i de tryggeste hænder fra start til slut.</p>
             </div>
             <div class="flex-1 md:w-6/12 lg:w-3/12 lg:mb-0 justify-center">
               <img src="/img/circles.png" class=" w-16 mx-auto">
               <h5 class="text-center font-raleway font-thin text-xs px-1 mb-3" style="color: #229ddd">Spar tid</h6>
               <p class="font-raleway text-center text-xs">Vi bestræber os efter at samle ejen- domsmæglerne et sted, så du ikke skal have hele byens mæglere i telefonen, hver gang du har rettelser til din boligsøgning!</p>
             </div>
             <div class="flex-1 md:w-6/12 lg:w-3/12 lg:mb-0 justify-center">
               <img src="/img/circles.png" class=" w-16 mx-auto">
               <h5 class="text-center font-raleway font-thin text-xs px-1 mb-3" style="color: #229ddd">Gratis for dig</h6>
               <p class="font-raleway text-center text-xs">Det er gratis at skrive sig op som boligsøgende på Venando, og vi glæder os til at hjælpe dig godt videre.</p>
             </div>
             <div class="flex-1 md:w-6/12 lg:w-3/12 lg:mb-0 justify-center">
               <img src="/img/circles.png" class=" w-16 mx-auto">
               <h5 class="text-center font-raleway font-thin text-xs px-1 mb-3" style="color: #229ddd">Tyvstart</h6>
               <p class="font-raleway text-center text-xs">Kom forrest i køen, til de boliger som bliver udbudt før de annonceres, ved at skrive dig op som boligsøgende sammen med Venando</p>
             </div>
          </div>
        </div>
      </section>

      {{-- VIDEO PRESENTATION --}}

      <div class="top-20">
        <section>
            <div class="overflow-visible relative" style="max-height: 600px">
              <div class="bg-top overflow-hidden absolute inset-x-0 top-0 object-top mx-auto" style="top: -30%;height: auto;width: 45%;">
                  <img class="w-full object-contain h-full" src="/img/video_presentation.png" alt="" style="max-width: 100%">
              </div>
              <div class="overflow-hidden" style="max-height: 500px">
                  <img class="object-cover" src="/img/buildings_img.png" alt="">
              </div>
            </div>
        </section>
      </div>
      
      {{-- FOOTER --}}
      
      {{-- <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                  >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Awarded Agency</h6>
                  <p class="font-raleway mt-2 mb-4 text-gray-600">
                    Divide details about your product or agency work into parts.
                    A paragraph describing a feature will be enough.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                  >
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Free Revisions</h6>
                  <p class="font-raleway mt-2 mb-4 text-gray-600">
                    Keep you user engaged by providing meaningful information.
                    Remember that by this time, the user is curious.
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                  >
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Verified Company</h6>
                  <p class="font-raleway mt-2 mb-4 text-gray-600">
                    Write a few lines about each one. A paragraph describing a
                    feature will be enough. Keep you user engaged!
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
              <div
                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
              >
                <i class="fas fa-user-friends text-xl"></i>
              </div>
              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Working with us is a pleasure
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
              >
                Don't let your uses guess by attaching tooltips and popoves to
                any element. Just make sure you enable them first via
                JavaScript.
              </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
              >
                The kit comes with three pre-built pages to help you get started
                faster. You can change the text and images and you're good to
                go. Just make sure you enable them first via JavaScript.
              </p>
              <a
                href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                class="font-bold text-gray-800 mt-8"
                >Check Tailwind Starter Kit!</a
              >
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600"
              >
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                  >
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-pink-600 fill-current"
                    ></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    Top Notch Services
                  </h4>
                  <p class="font-raleway text-md font-light mt-2 text-white">
                    The Arctic Ocean freezes every winter and much of the
                    sea-ice then thaws every summer, and that process will
                    continue whatever happens.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="relative py-20">
        <div
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
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                >
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold">A growing company</h3>
                <p class="font-raleway mt-4 text-lg leading-relaxed text-gray-600">
                  The extension comes with three pre-built pages to help you get
                  started faster. You can change the text and images and you're
                  good to go.
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-fingerprint"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                          Carefully crafted components
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fab fa-html5"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Amazing page examples</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="far fa-paper-plane"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Dynamic components</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">Here are our heroes</h2>
              <p class="font-raleway text-lg leading-relaxed m-4 text-gray-600">
                Our great team of human resources will guide you in the process of finding that special place.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/img/team-1-800x800.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="font-raleway text-xl font-bold">Ryan Tompson</h5>
                  <p class="font-raleway mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Web Developer
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i></button
                    ><button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-dribbble"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/img/team-2-800x800.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="font-raleway text-xl font-bold">Romina Hadid</h5>
                  <p class="font-raleway mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Marketing Specialist
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/img/team-3-800x800.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="font-raleway text-xl font-bold">Alexa Smith</h5>
                  <p class="font-raleway mt-1 text-sm text-gray-500 uppercase font-semibold">
                    UI/UX Designer
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="/img/team-4-470x470.png"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="font-raleway text-xl font-bold">Jenna Kardi</h5>
                  <p class="font-raleway mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Founder and CEO
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-dribbble"></i></button
                    ><button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-20 relative block bg-gray-900">
        <div
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
              class="text-gray-900 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Build something</h2>
              <p class="font-raleway text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Put the potentially record low maximum sea ice extent tihs year
                down to low ice. According to the National Oceanic and
                Atmospheric Administration, Ted, Scambos.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-medal text-xl"></i>
              </div>
              <h6 class="text-xl mt-5 font-semibold text-white">
                Excelent Services
              </h6>
              <p class="font-raleway mt-2 mb-4 text-gray-500">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-poll text-xl"></i>
              </div>
              <h5 class="font-raleway text-xl mt-5 font-semibold text-white">
                Grow your market
              </h5>
              <p class="font-raleway mt-2 mb-4 text-gray-500">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-lightbulb text-xl"></i>
              </div>
              <h5 class="font-raleway text-xl mt-5 font-semibold text-white">Launch time</h5>
              <p class="font-raleway mt-2 mb-4 text-gray-500">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
              >
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                  <p class="font-raleway leading-relaxed mt-1 mb-4 text-gray-600">
                    Complete this form and we will get back to you in 24 hours.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="full-name"
                      >Full Name</label
                    ><input
                      type="text"
                      class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Full Name"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="email"
                      >Email</label
                    ><input
                      type="email"
                      class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Email"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="message"
                      >Message</label
                    ><textarea
                      rows="4"
                      cols="80"
                      class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Type a message..."
                    ></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                      style="transition: all 0.15s ease 0s;"
                    >
                      Send Message
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
    </main>

</x-app-layout>
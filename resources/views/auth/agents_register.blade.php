<x-app-layout>
    <style>
		[x-cloak] {
			display: none;
        }
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
    <div class="container relative lg:visible sm:invisible xl:-top-33 lg:-top-96 md:invisible mx-auto top-20 xl:mt-12 lg:mt-14" style="z-index: 2;">
        <div class="flex flex-wrap px-6">
            <div class="w-full lg:w-1/2 md:px-4 lg:px-6 mt-10">
                <h1 class="text-3xl text-center pb-0 text-white font-raleway">
                    {{ __('“Jeg er glad for du stadig er her, og nu hvor du er blevet klogere på os, så glæder jeg mig til at blive klogere på hvem du er.”') }}
                </h1>
            </div>
            <div class="w-full lg:w-1/2  md:px-4 lg:px-6 py-5">
                <div class="">
                    <div class="">
                        <img src="/img/agent.png" class="mx-auto absolute" style="max-width: 100%;height: 25rem">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="xl:-top-96 lg:-top-60 md:top-140 relative w-full h-80 mx-auto sm:-top-80" style="z-index: 2;">
        <section class="w-8/12 lg:w-8/12 md:w-8/12 px-4 m-auto py-2" style="background-color: #f7f4f4;">
            <div class="w-9/12 mx-auto text-center">
                <div class="flex flex-wrap px-auto">
                    <div class="w-full lg:w-12/12 py-5">
                        <div class="" style="background-color: #f7f4f4">
                            <div class="">
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
                                                        {{ __('Før end du kan tage kontoen i brug, skal den godkendes hos os. Dette kan tage op til 1 time.') }}
                                                    </p>
                                                    <br>
                                                    <h6 class="text-lg text-center pb-2 font-raleway" style="color: #106eb9">
                                                        {{ __('Imens du venter på godkendelse....') }}
                                                    </h6>
                                                    <br>
                                                    <h4 class="b-4 font-raleway">
                                                        {{ __('Se en introduktionsvideo af hvordan Venando fungerer') }}                                                        
                                                    </h4>
                                                    <div class="mb-6">
                                                        <img class="w-full object-contain h-full" src="/img/video_presentation.png" alt="" style="max-width: 100%">
                                                    </div>
                            
                                                    <button
                                                    type="button"
                                                    class=" py-4 px-20 shadow-md no-underline rounded-full text-white font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2 font-raleway" style="background-color: #777"
                                                    ><a href="/">{{ __('Tilbage') }}</a>
                                                    </button>

                                                    <button
                                                    type="button"
                                                    class=" py-4 px-20 shadow-md no-underline rounded-full text-white font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2 font-raleway" style="background-color: #41a438"
                                                    ><a href="#">{{ __('Log ind') }}</a>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div x-show.transition="step != 'complete'">

                                            <div x-show="step === 1">
                                                <h1 class="text-3xl text-center pb-2 font-raleway">
                                                    {{ __('Indtast din butiks oplysninger') }}
                                                </h1>
                                                <div>
                                                    <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                                                </div>
                                            </div>

                                            <div x-show="step === 2">
                                                <h1 class="text-3xl text-center pb-2 font-raleway">
                                                    {{ __('Tilføj mæglere til din konto') }}
                                                </h1>
                                                <div>
                                                    <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
                                                </div>
                                                <h6 class=" font-raleway">
                                                    {{ __('Du kan springe dette trin over og udfylde senere') }}
                                                </h6>
                                            </div>

                                            <!-- Step Content -->
                                            <form id="agents_form" method="post" action="">
                                                @csrf

                                                <div class="mb-4 grid grid-cols-1 lg:grid-cols-2 gap-2 w-8/12 mx-auto" x-show.transition.in="step === 1">
                            
                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="text" id="butik" name="name" value="{{ old('butik') }}" required autofocus class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Butik') }}"/>
                                                    </div>
                            
                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="number" id="telephone" name="phone" required value="{{ old('telephone') }}" required class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 placeholder-gray-900" placeholder="{{ __('Butik telefonnr.') }}"/>
                                                    </div>
                            
                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 placeholder-gray-900" placeholder="{{ __('E-mail') }}"/>
                                                    </div>
                            
                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="number" id="cvr" name="cvr" required class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 placeholder-gray-900" placeholder="{{ __('CVR. nr.') }}"/>
                                                    </div>
                            
                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="password" id="password" name="password" required class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Adgangskode') }}"/>
                                                    </div>
                            
                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="password" id="password_confirmation" name="password_confirmation" required class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 placeholder-gray-900" placeholder="{{ __('Gentag Adgangskode') }}"/>
                                                    </div>
                            
                                                    <div class="w-full h-12 flex flex-wrap font-raleway space-x-4">
                                                        <input class="form-checkbox transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2" type="checkbox" name="terms_and_conditions" required id=""><p class="text-xs text-gray-600">{{ __('Godkend Venando’s vilkår og betingelser') }}</p>
                                                    </div>

                                                    {{-- <button
                                                    type="submit"
                                                    x-show="step === 1"
                                                    @click="step++"
                                                    class="w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438"
                                                    >Næste trin</button> --}}

                                                </div>

                                                {{-- Step 2 --}}
                                                <div class="step2 mb-4 grid grid-cols-1 lg:grid-cols-2 gap-2 w-8/12 mx-auto" x-show.transition.in="step === 2">

                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="text" name="seller_name_1" id="" autofocus class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Mægler 1') }}"/>
                                                    </div>

                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="text" name="" id="seller_mail_1" autofocus class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('E-mail') }}"/>
                                                    </div>

                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="text" name="seller_name_2" id="" autofocus class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Mægler 2') }}"/>
                                                    </div>

                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="text" name="seller_mail_2" id="" autofocus class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('E-mail') }}"/>
                                                    </div>

                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="text" name="seller_name_3" id="" autofocus class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Mægler 3') }}"/>
                                                    </div>

                                                    <div class="w-full h-12 font-raleway">
                                                        <input type="text" name="seller_name_3" id="" autofocus class="lg:lg:w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('E-mail') }}"/>
                                                    </div>
                                                
                                                    <div class="w-full mx-auto col-span-2">
                                                        <button
                                                            class="w-48 py-2 shadow-md no-underline rounded-full text-gray-500 font-raleway text-xs btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid #9e9d9e; hover:cursor:pointer"
                                                        >Opret mægler +
                                                        </button>
                                                    </div>

                                                </div>
                                            
                                        </div>
                            
                                        <!-- Bottom Navigation -->	
                                        <div class="pt-6 flex flex-wrap col-span-2 mx-auto" x-show="step != 'complete'">
                                            <div class="flex flex-wrap col-span-2 mx-auto space-x-4">
                                                <button
                                                type="button"
                                                    x-show="step === 1"
                                                    class=""
                                                    ><a href="{{ route('information') }}"><img src="/img/back-arrow.svg" alt="" style="height: 3rem;"></a>
                                                </button>
                        
                                                <button
                                                type="button"
                                                    x-show="step > 1"
                                                    @click="step--"
                                                    class=""
                                                    ><img src="/img/back-arrow.svg" alt="" style="height: 3rem;">
                                                </button>
                        
                                                <button
                                                type="button"
                                                    x-show="step === 1"
                                                    @click="step++"
                                                    class="w-60 py-4 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                                                >Næste trin
                                                </button>

                                                <input
                                                type="button"
                                                value="Spring over"
                                                x-show="step === 2"
                                                @if (session('error'))
                                                    @click=""
                                                @else @click="step === 'complete'"
                                                @endif
                                                onclick="checkForm(this)"
                                                class="step2 w-60 px-20 cursor-pointer shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #777; hover:cursor:pointer"
                                                >

                                                <input
                                                type="button"
                                                value="Opret"
                                                x-show="step === 2"
                                                @if (session('error'))
                                                    @click=""
                                                @else @click="step === 'complete'"
                                                @endif
                                                onclick="checkForm(this)"
                                                class="step2 w-60 py-2 px-20 cursor-pointer shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer"
                                                >
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <script>

        // $('.step2').click(function () { 
        //     alert($('#agents_form'));
            
        // });
        function checkForm (param) {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('agent_store') }}",
                data: $('#agents_form').serialize(),
                success: function (data) {
                if(data.status) {
                    $('.step2').hide();
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
        
        
	</script>
</x-app-layout>
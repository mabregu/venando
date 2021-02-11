<div class="w-full container mx-auto" style="background-color: #f7f4f4">
    <div class="container mx-auto">
        <h1 class="text-3xl text-center pb-2 font-raleway mt-10 mb-5" style="color: #f48133">
            {{ __('Fremhæv flere af jeres mæglere') }}
        </h1>
        <p class="text-sm text-center mb-2">
            {{ __('Lad jeres mæglere få endnu større synlighed på Venando ved at købe en eller flere ekstra “Fremhæv mægler” pakker. Vores PREMIUM pakke indeholder standard muligheden for én fremhævet mægler.') }}
        </p>
        <p class="text-sm text-center">
            {{ __('Det er også muligt at vente og tilkøbe senere.') }}
        </p>
        <hr class="mt-5 mb-5 col-span-4 md:invisible" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

        <div class="xs md:invisible md:fixed">
            <div class="container">
                <div class="grid grid-cols-2">
                    <div class="w-30">
                        <img src="/img/fremhaev-package.png" alt="">
                    </div>
                    <div class="">
                        <h5 style="color: #f48133">
                        {{ __('Større eksponering') }} 
                        </h5>
                        <p class="text-base">
                            {{ __('Mægler bliver vist i Venando’s oprettelsesproces for boligsøgende med billede, mail og mægler- kontor. Det er en geografisk eksponering og derfor bliver du som mægler i Rødovre kun vist for boligsøgende i Rødovre') }}
                        </p>
                    </div>
                    <hr class="mt-5 mb-5 col-span-2" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                    <div class="w-10 h-10">
                        <p class="text-xs">
                            {{ ('Pr. mægler, pr. måned') }}
                        </p>

                        <p class="text-lg">
                        {{ __('695 kr.') }} 
                        </p>
                        <p class="text-xs text-gray-500">
                            {{ __('eks. moms') }}
                        </p>
                    </div>
                    <div class="">
                        <h5 style="color: #f48133">
                        {{ __('Personligt visitkort') }} 
                        </h5>
                        <p class="text-base">
                            {{ __('Mæglerens personlige visitkort vil blive fremhæ- vet på siden “Lokale mæglere” under Venando anbefaler. Boligsøgende kan tilgå denne side for at finde deres kommende mægler.') }}
                        </p>
                    </div>
                    <hr class="mt-10 mb-5 col-span-2" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                    
                </div>
            </div>
            
            <form method="POST" action="">
                <div class="w-full mx-auto grid grid-cols-2 mt-2">
                    @csrf

                    <div class="w-full h-12 font-raleway">
                        <label for="pack_amount" class="text-base">{{ __('Antal packer') }}</label>
                    </div>
                    <div class="w-full h-12 font-raleway">
                        <input type="number" id="pack_amount" name="pack_amount" value="{{ old('pack_amount') }} stk" autofocus class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900 rounded-md" placeholder="{{ __('0 stk') }}"/>
                    </div>
                </div>
            </form>
        </div>
        {{-- Breakpoint for medium to large devices --}}
        <div class="sm_xl sm_xl xs:invisible fixed md:visible md:static">
            <div class="grid grid-cols-2">
                <div>
                    <img src="/img/laptop_preview.png" alt="">
                </div>
                
                <div class="grid grid-cols-3">
                    <hr class="mt-10 mb-5 col-span-3" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                    <div class="w-32">
                        <img src="/img/fremhaev-package.png" alt="">
                    </div>
                    <div class="text-left col-span-2 mb-2">
                        <h5 style="color: #f48133">
                        {{ __('Større eksponering') }} 
                        </h5>
                        <p class="text-sm">
                            {{ __('Mægler bliver vist i Venando’s oprettelsesproces for boligsøgende med billede, mail og mægler- kontor. Det er en geografisk eksponering og derfor bliver du som mægler i Rødovre kun vist for boligsøgende i Rødovre') }}
                        </p>
                    </div>
                    <div class="text-center mr-2">
                        <p class="text-xs">
                            {{ ('Pr. mægler, pr. måned') }}
                        </p>

                        <p class="text-3xl">
                        {{ __('695 kr.') }} 
                        </p>
                        <p class="text-xs text-gray-500">
                            {{ __('eks. moms') }}
                        </p>
                    </div>
                    <div class="col-span-2">
                        <h5 style="color: #f48133">
                        {{ __('Personligt visitkort') }} 
                        </h5>
                        <p class="text-sm">
                            {{ __('Mæglerens personlige visitkort vil blive fremhæ- vet på siden “Lokale mæglere” under Venando anbefaler. Boligsøgende kan tilgå denne side for at finde deres kommende mægler.') }}
                        </p>
                    </div>
                    <hr class="mt-10 mb-5 col-span-3" align="center" size="2" width="90%" style="background-color: #9D9D9C" />

                    <form method="POST" action="">
                        <div class="w-full mx-auto grid grid-cols-2 mt-2">
                            @csrf
        
                            <div class="w-full h-12 font-raleway">
                                <label for="pack_amount" class="text-base">{{ __('Antal packer') }}</label>
                            </div>
                            <div class="w-full h-12 font-raleway">
                                <input type="number" id="pack_amount" name="pack_amount" value="{{ old('pack_amount') }} stk" autofocus class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900 rounded-md" placeholder="{{ __('0 stk') }}"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
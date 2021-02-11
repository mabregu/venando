<div x-data="{ payment: false }" :class="{'overflow-y-hidden': payment}">
    <div class="w-full container mx-auto" style="background-color: #f7f4f4">
        <div class="container w-full mx-auto mt-20">
            <h1 class="text-3xl text-center pb-2 font-raleway mt-10">
                {{ __('Kurv') }}
            </h1>
            <div>
                <img src="/img/divider.svg" class="mx-auto max-h-8 mb-8" alt="" style="">
            </div>
        
            {{-- Breakpoint for Extra-small to small devices --}}
            <div class="xs md:invisible md:fixed">
            {{-- Product description --}}
                <div class="w-full grid grid-cols-3 space-x-6">
                    <div class="col-span-1">
                        <p class="font-bold">
                            {{ __('Produkt') }}
                        </p>
                    </div>
                    <div class="col-span-2 w-full container mx-auto flex justify-center">
                        <img src="/img/fremhaev-package.png" alt="Premium package" class="w-10" style="max-width: 100%;">
                        <span class="text-sm">{{ __('Fremhæv mægler pakke') }}</span>
                    </div>
                    <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                    
                    <div class="col-span-1">
                        <span class="font-bold">
                            {{ __('Antal') }}
                        </span>
                    </div>
                    <div class="col-span-2">
                        <span>
                            3 {{ __('stk') }}
                        </span>
                    </div>
                    <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
            
                    <div class="col-span-1">
                        <p class="font-bold">
                            {{ __('Pris') }}
                        </p>
                    </div>
                    <div class="col-span-2">
                        <span>
                            2.085 kr.
                        </span>
                    </div>
                    <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
            
                    <div class="col-span-1">
                        <p class="font-bold">
                            {{ __('Subtotal') }}
                        </p>
                    </div>
                    <div class="col-span-2">
                        <span>
                            2.085 kr.
                        </span>
                    </div>
                    <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
            
                    <div class="col-span-1">
                        <p class="font-normal">
                            {{ __('Moms') }}
                        </p>
                    </div>
                    <div class="col-span-2">
                        <span>
                            499 kr.
                        </span>
                    </div>
                    <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
            
                    <div class="col-span-1">
                        <p class="font-bold">
                            {{ __('Total') }}
                        </p>
                    </div>
                    <div class="col-span-2">
                        <span class="font-bold">
                            2085 kr.
                        </span>
                    </div>
                    <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="90%" style="background-color: #9D9D9C" />
                </div>
                <div class="w-1/2 mx-auto">
                    <input type="text" name="voucher" class="rounded-md w-full" placeholder="voucher">
                    <button class="mx-auto col-span-1 bg-gray-500 text-center mt-4 py-2 w-full shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">
                        <input type="submit" value="{{ __('Indløs') }}" class="bg-gray-500 text-white">
                    </button>
                </div>
            </div>
            <div class="sm_xl sm_xl xs:invisible fixed md:visible md:static">
                <div class="grid grid-cols-3">
                    <div class="col-span-1">
                        <p class="font-bold">
                            {{ __('Produkt') }}
                        </p>
                    </div>
                    <div class="col-span-1 text-center">
                        <span class="font-bold">
                            {{ __('Antal') }}
                        </span>
                    </div>
                    <div class="col-span-1 text-right">
                        <p class="font-bold">
                            {{ __('Pris') }}
                        </p>
                    </div>
                    <hr class="mt-5 mb-5 h-px col-span-4" align="center" size="2" width="100%" style="background-color: #9D9D9C" />

                    <div class="col-span-1 w-full container mx-auto flex">
                        <img src="/img/fremhaev-package.png" alt="Premium package" class="w-10" style="max-width: 100%;">
                        <span class="text-sm">{{ __('Venando Premium pakke') }}</span>
                    </div>
                    <div class="col-span-1 text-center">
                        <span>
                            3 {{ __('stk') }}
                        </span>
                    </div>
                    <div class="col-span-1 text-right">
                        <span>
                            2.085 kr.
                        </span>
                    </div>
                    <hr class="mt-5 mb-5 col-span-4" align="center" size="2" width="100%" style="background-color: #9D9D9C" />

                    <div class="col-span-2">
                        <p class="font-bold">
                            {{ __('Subtotal') }}
                        </p>
                        <p class="font-light">
                            {{ __('Moms') }}
                        </p>
                    </div>
                    <div class="col-span-2 text-right">
                        <strong class="font-bold">
                            2.085 kr.
                        </strong>
                        <p>
                            499 kr
                        </p>
                    </div>
                    <hr class="mt-5 mb-5 h-px col-span-4" align="center" size="2" width="100%" style="background-color: #9D9D9C" />

                    <div class="col-span-2">
                        <p class="font-bold">
                            {{ __('Total') }}
                        </p>
                    </div>
                    <div class="col-span-1 text-right">
                        <span class="font-bold">
                            2.085 kr.
                        </span>
                    </div>
                    <hr class="mt-5 mb-10 h-px col-span-4" align="center" size="2" width="100%" style="background-color: #9D9D9C" />
                    <div class="w-full inline-flex col-span-2">
                        <input type="text" name="voucher" class="rounded-md w-1/2" placeholder="voucher">
                        <button class="mx-10 col-span-1 bg-gray-500 text-center mt-4 py-2 w-32 left-1 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">
                            <input type="submit" value="{{ __('Indløs') }}" class="bg-gray-500 text-white">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <button
        @click="payment = true"
        class="relative w-60 py-2 px-20 lg:mx-64 md:mx-40 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm border-green btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #41a438; hover:cursor:pointer; bottom: -5.5rem"
        >Fortsæt til betaling
        </button>
        
        <div
        class="fixed inset-0 w-full h-full z-20 bg-opacity-50 duration-300 overflow-y-auto"
        x-show="payment"
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
                class="relative bg-white shadow-lg text-gray-900 z-20 mt-40 mb-10"
                @click.away="payment = false"
                x-show="payment"
                x-transition:enter="transition transform duration-300"
                x-transition:enter-start="scale-0"
                x-transition:enter-end="scale-100"
                x-transition:leave="transition transform duration-300"
                x-transition:leave-start="scale-100"
                x-transition:leave-end="scale-0"
                style="border-top: 5px solid #229ddd"
                >
                    <header class="flex flex-col justify-center items-center p-3">
                        <div class="flex justify-center w-60 h-28 mx-auto mb-4">
                            <img src="/img/venando_logo.png" alt="">
                        </div>
                        <h2 class="font-semibold text-base mb-3">{{ __('Opdater kredit- eller debitko') }}</h2>
                        <div class="w-20 mb-2">
                            <img src="/img/cards.png" alt="">
                        </div>
                        <h2>
                            <span class="font-semibold">1995 kr.</span>
                        </h2>
                    </header>
                    <main class="p-3 text-center" style="background-color: #f7f4f4">
                        <form action="">
                            <div class="col-span-2 w-full h-12 font-raleway">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Fornavn') }}"/>
                            </div>
                            <div class="col-span-2 w-full h-12 font-raleway">
                                <input type="text" id="surname" name="surname" value="{{ old('surname') }}" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Efternavn') }}"/>
                            </div>
                            <div class="col-span-2 w-full h-12 font-raleway">
                                <input type="text" id="card" name="card" value="{{ old('card') }}" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Kort nummer') }}"/>
                            </div>
                            <div class="col-span-2 w-full h-12 font-raleway">
                                <input type="text" id="expiration" name="expiration" value="{{ old('expiration') }}" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Udløbsdato (MM/ÅÅ)') }}"/>
                            </div>
                            <div class="col-span-2 w-full h-12 font-raleway">
                                <input type="text" id="security_number" name="security_number" value="{{ old('security_number') }}" required class="w-full md:w-full py-2 mb-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4-200 placeholder-gray-900" placeholder="{{ __('Kort nummer') }}"/>
                            </div>
                        </form>
                    </main>
                    <footer class="flex justify-center bg-transparent">
                        <button
                        class="text-base font-semibold text-black py-3 w-full rounded-b-md focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
                        @click="payment = false"
                        >
                        {{ __('Nyt kort') }}?
                        </button>
                    </footer>
                </div>
                <div class="container mx-auto">
                    <div class="flex flex-col justify-center items-center mx-auto">
                        <button
                        type="submit"
                        @click="step = 'complete"
                        class="w-60 py-2 px-20 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm btn-success hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2" style="background-color: #229ddd; hover:cursor:pointer"
                        >{{ __('Gem') }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
            </div>
        </div>
    </div>
</div>
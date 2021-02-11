<div class="flex w-screen">
    <nav x-data="{ open: false }" class="absolute w-screen pt-5" style="z-index: 3">
        <!-- Primary Navigation Menu -->
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> --}}
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    {{-- <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                        </a>
                    </div> --}}

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> --}}
                        <x-nav-link>
                            <p class="font-raleway text-white">{{ __('Hvordan fungerer det?') }}</p>
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        {{-- <x-nav-link :href="route('properties.index')" :active="request()->routeIs('properties.index')"> --}}
                        <x-nav-link>
                            <p class="font-raleway text-white">{{ __('Om Venando') }}</p>
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link>
                            <p class="font-raleway text-white">{{ __('Kontakt') }}</p>
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <button class="font-raleway text-white"
                            onclick="location.href = '{{ route('subscriptions.plans') }}';"
                        >
                            {{ __('Plans') }}
                        </button>
                    </div>
                </div>

            {{-- VENANDO LOGO --}}
                <div class="w-1/2 mx-auto">
                    <a href="/"><img class="h-10 mt-3 mx-auto" src="/img/venando_logo_white.png" alt="" style="width: 10rem"></a>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6 justify-end pr-6">
                    @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>
                                    {{ Auth::user()->name }}
                                </div>
                                {{-- <div class="ml-1">
                                    <img src="/img/venando-icon.svg" alt="">
                                </div> --}}
                            </button>
                        </x-slot>
                        <x-dropdown-link :href="route('profile')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-slot name="content">
                            <!-- Authentication -->

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <p class="font-raleway text-black">{{ __('Logout') }}</p>
                                </x-dropdown-link>
                            </form>
                            <x-dropdown-link :href="route('billing.credit_card_form')">
                                <p class="font-raleway text-black">
                                    {{ __('Credit card') }}
                                </p>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('messages.create')">
                                <p class="font-raleway text-black">{{ __('Send message') }}</p>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('messages.received')">
                                <p class="font-raleway text-black">
                                    {{ __('Notifications') }}
                                    <span class="badge">1</span>
                                </p>
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    @else
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        {{-- <x-nav-link :href="route('agents')" :active="request()->routeIs('register')">
                            <p class="font-raleway text-white">{{ __('Er du ejendomsmægler?') }}</p>
                        </x-nav-link> --}}
                        <a href="/agents"><p class="font-raleway py-2 px-4 shadow-md no-underline rounded-full text-white font-semibold text-sm border-green btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid white">{{ __('Er du ejendomsmægler?') }}</p></a>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            <p class="font-raleway py-2 px-4 shadow-md no-underline rounded-full text-white font-semibold text-sm border-green btn-success focus:outline-none active:shadow-none mr-2" style="border: 1px solid white">{{ __('Log ind') }}</p>
                        </x-nav-link>
                    </div>
                    @endauth

                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden absolute" style="z-index: 3;">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color: #FFFFFF">
                    <p class="font-raleway text-white">{{ __('Dashboard') }}</p>
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <div class="ml-3">
                        @auth
                            <div class="font-medium text-base text-gray-800">
                                {{ Auth::user()->name }}
                            </div>

                            <div class="font-medium text-sm text-gray-500">
                                {{ Auth::user()->email }}
                            </div>
                        @endauth
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" style="color: #FFFFFF">
                            <p class="font-raleway text-white">{{ __('Logout') }}</p>
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>

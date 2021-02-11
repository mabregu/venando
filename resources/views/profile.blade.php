<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    @auth


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5 pb-32">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="PUT" action="{{ route('user.update') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mt-4">
                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{ Auth::user()->name }}" />
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <div>
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus value="{{ Auth::user()->email }}" />
                            </div>
                        </div>

                        <!-- Display Name -->
                        <div class="mt-4">
                            <div>
                                <x-label for="display_name" :value="__('Display Name')" />

                                <x-input id="display_name" class="block mt-1 w-full" type="text" name="display_name" required autofocus value="{{ Auth::user()->display_name }}" />
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <div>
                                <x-label for="phone" :value="__('Phone')" />

                                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required autofocus value="{{ Auth::user()->phone }}" />
                            </div>
                        </div>

                        <!-- Role -->
                        <div class="mt-4">
                            <div>
                                <x-label for="role" :value="__('Role')" />

                                <x-input id="role" class="block mt-1 w-full" type="text" name="role" required autofocus value="{{ Auth::user()->role }}" />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endauth


</x-app-layout>

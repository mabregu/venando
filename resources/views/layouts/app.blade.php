<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Venando') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        {{-- Area de landing - testeo --}}
        <link rel="stylesheet" href="/vendor/@fortawesome/fontawesome-free/css/all.min.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->

        {{-- Jquery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-full bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="px-4 sm:px-6 lg:px-8">
                    {{-- {{ $header }} --}}
                    {{-- @include('layouts.navigation') --}}
                    {{-- @include('layouts.agents_navigation') --}}
                </div>
            </header>

            <!-- Page Content -->
            {{-- DESPUÉS PONER ESTE ESTILO PARA EL MAIN --}}
            {{-- <main style="background-color: #ebe3e3"> --}}
            <main>
                <div id="app">
                    @if (session('message'))
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="alert alert-{{ session('message')[0] }}" role="alert">
                                    <h4 class="alert-heading">{{ __('Message of system') }}</h4>
                                    <p>{{ session('message')[1] }}</p>
                                </div>
                            </div>
                        </div>
                        {{-- @include('partials.alert') --}}
                    @endif
                    {{ $slot }}
                </div>
            </main>
        </div>

        @include('components.footer')

        <script>
            function openModal(login) {
                document.getElementById(login).showModal(); 
                document.body.setAttribute('style', 'overflow: hidden;'); 
                document.getElementById(login).children[0].scrollTop = 0; 
                document.getElementById(login).children[0].classList.remove('opacity-0'); 
                document.getElementById(login).children[0].classList.add('opacity-100')
            }
        
            function modalClose(login) {
                document.getElementById(login).children[0].classList.remove('opacity-100');
                document.getElementById(login).children[0].classList.add('opacity-0');
                setTimeout(function () {
                    document.getElementById(login).close();
                    document.body.removeAttribute('style');
                }, 100);
            }    
         </script>
    </body>
</html>

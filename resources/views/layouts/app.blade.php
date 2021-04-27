<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- SweetAlert CSS-->
        <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
        
        <!-- adminlte Styles -->
        {{-- Base Stylesheets --}}
        @if(!config('adminlte.enabled_laravel_mix'))
            <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

            {{-- Configured Stylesheets --}}
            @include('adminlte::plugins', ['type' => 'css'])

            <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        @else
            <link rel="stylesheet" href="{{ mix(config('adminlte.laravel_mix_css_path', 'css/app.css')) }}">
        @endif

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
        @stack('css_after')

        {{-- Favicon --}}
        @if(config('adminlte.use_ico_only'))
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
        @elseif(config('adminlte.use_full_favicon'))
            <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
            <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
            <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
            <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
            <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
            <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
            <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
            <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
            <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
            <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
            <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
        @endif


        <!-- Scripts -->

        {{-- Base Scripts --}}
        @if(!config('adminlte.enabled_laravel_mix'))
            
            <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

            {{-- Configured Scripts --}}
            @include('adminlte::plugins', ['type' => 'js'])

            <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
        @else
            <script src="{{ mix(config('adminlte.laravel_mix_js_path', 'js/app.js')) }}"></script>
        @endif

        <!-- SweetAlert JS-->
        <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <!-- <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->
        
        
        <script src="{{ asset('js/app.js') }}" defer></script>
        

        @stack('js_after')
    </head>


    <body  class="sidebar-mini layout-fixed" style="height: auto;">
    
        <div class="wrapper">
            
                @include('layouts.partials.navbar')
           
                @include('layouts.partials.sidebar')

                 <!-- Page Content -->
                <main class="content-wrapper card">
                    @yield('content')
                </main>

                @include('layouts.partials.footer')
        </div>
         
           

           
       
    </body>
</html>

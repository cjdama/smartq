{{-- DO NOT EDIT THIS FILE --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="{{ asset('lunoz/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('lunoz/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('lunoz/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('styles')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body class="font-sans antialiased">

    <div id="layout-wrapper">
        <x-lunoz.dashboard-navbar />
        <x-lunoz.dashboard-sidebar />

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
            <x-lunoz.dashboard-footer />
        </div>
    </div>
    <div class="menu-overlay"></div>

    @stack('modals')

    @livewireScripts


    <!-- jQuery  -->
    <script src="{{ asset('lunoz/js/jquery.min.js') }}"></script>
    <script src="{{ asset('lunoz/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lunoz/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('lunoz/js/waves.js') }}"></script>
    <script src="{{ asset('lunoz/js/simplebar.min.js') }}"></script>

    <!-- Morris Js-->
    <script src="{{ asset('lunoz/plugins/morris-js/morris.min.js') }}"></script>
    <!-- Raphael Js-->
    <script src="{{ asset('lunoz/plugins/raphael/raphael.min.js') }}"></script>

    <!-- Morris Custom Js-->
    <script src="{{ asset('lunoz/pages/dashboard-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('lunoz/js/theme.js') }}"></script>

    @stack('scripts')
</body>

</html>

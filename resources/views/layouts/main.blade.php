<!DOCTYPE html>
<html lang="en" class="light-style  layout-menu-fixed   " dir="ltr" data-theme="theme-default"
    data-assets-path="http://full-version.dev.com/assets/" data-base-url="http://full-version.dev.com"
    data-framework="laravel" data-template="vertical-menu-theme-default-light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <!-- Include Styles -->
    @include('layouts/sections/styles')


</head>

<body>
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            @yield('header')

            @yield('sidebar')

            <div class="layout-page">
                @yield('navbar')

                @yield('content')
                @yield('scripts')
                @yield('script1')

                {{-- @include('layouts.sections.footer.footer') --}}
            </div>
        </div>



    </div>



    <!-- Include Scripts -->
    @include('layouts/sections/scripts')
    @include('sweetalert::alert')
</body>

</html>

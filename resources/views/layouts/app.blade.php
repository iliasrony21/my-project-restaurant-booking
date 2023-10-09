<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('backend')}}/images/favicon.png">
    <!-- Page Title  -->
    <title>Sales Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/dashlite.css?ver=2.9.0">
    <link id="skin-default" rel="stylesheet" href="{{asset('backend')}}/css/theme.css?ver=2.9.0">
</head>
<body>
    <div id="app">
        <!-- root @s -->
        <div class="nk-app-root">
            <!-- main @s -->
            <div class="nk-main ">
                <!-- sidebar @s -->
                @if(Request::is('admin*'))
               @include('layouts.partial.sidebar')
               @endif
                <!-- sidebar @e -->
                <!-- wrap @s -->
                <div class="nk-wrap ">
                    <!-- main header @s -->
                    @if(Request::is('admin*'))
                   @include('layouts.partial.header')
                   @endif
                    <!-- main header @e -->
                    <!-- content @s -->
                    <div class="nk-content ">
                        @yield('content')
                    </div>
                    <!-- content @e -->
                    <!-- footer @s -->
                    @if(Request::is('admin*'))
                    @include('layouts.partial.footer')
                    <!-- footer @e -->
                    @endif
                </div>
                <!-- wrap @e -->
            </div>
            <!-- main @e -->
        </div>
        <!-- app-root @e -->

    </div>



    <!-- JavaScript -->
    <script src="{{asset('backend')}}/js/bundle.js?ver=2.9.0"></script>
    <script src="{{asset('backend')}}/js/scripts.js?ver=2.9.0"></script>
    <script src="{{asset('backend')}}/js/charts/gd-default.js?ver=2.9.0"></script>
</body>
</html>

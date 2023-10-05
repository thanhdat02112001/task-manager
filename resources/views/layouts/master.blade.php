<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>
   
    {{--Styles css common--}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    <script src="{{mix('js/task_detail.js')}}" defer></script>
    <script src="{{mix('js/myday.js')}}" defer></script>
    <script src="{{mix('js/search.js')}}" defer></script>
    <script src="{{mix('firebase-messaging-sw.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- @yield('style-libraries') --}}
    {{--Styles custom--}}
    @yield('styles')
</head>
<body>
    @include('partials.header')
    <div id="app">
        <div class="leftColumn leftColumn-entered">
            @include('partials.sidebar')
        </div>
        <div class="centerColumn">
            @yield('content')
        </div>
        <div class="rightColumn">
            @include('partials.rightside')
        </div>
    </div>

    {{--Scripts link to file or js custom--}}
    @yield('scripts')
</body>
</html>
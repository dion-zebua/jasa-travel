<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--  --}}

    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="description" content="{{ $desc ?? config('app.name') }}" />

    <meta property="og:title" content="{{ $title ?? config('app.name') }}" />
    <meta property="og:description" content="{{ $desc ?? config('app.name') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="{{ $thumbnail ?? asset('img/travel.jpg') }}" />

    <link rel="apple-touch-icon" href="{{ asset('img/travel.jpg') }}" />
    <link rel="icon" size="16x16" href="{{ asset('img/travel.jpg') }}" />
    <link rel="icon" size="32x32" href="{{ asset('img/travel.jpg') }}" />
    <link rel="icon" size="180x180" href="{{ asset('img/travel.jpg') }}" />
    <link rel="shortcut icon" href="{{ asset('img/travel.jpg') }}" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <link rel="canonical" href="{{ url()->full() }}" />

    @vite('resources/css/app.css')
    @livewireStyles

    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('{{ asset('font/Poppins-Regular.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
    </style>

</head>

<body class="font-poppins bg-slate-50 text-slate-600">
    <x-layouts.header />

    @yield('content')

    @vite('resources/js/app.js')
    @livewireScripts

</body>


</html>

<!doctype html>
<html lang="id">

<head>
    <!-- Google tag (gtag.js) -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-0K1KNV8K8K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0K1KNV8K8K');
    </script> --}}


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- preload -->
    <link rel="preload" fetchpriority="high" as="image" href="{{ asset('img/blob.svg') }}" type="image/svg+xml">
    <link rel="preload" fetchpriority="high" href="{{ asset('font/Poppins-Regular.ttf') }}" as="font"
        type="font/ttf" crossorigin="anonymous">


    <style>
        html,
        body {
            touch-action: manipulation;
            overflow-x: hidden;
        }

        @font-face {
            font-family: 'Poppins';
            src: url('{{ asset('font/Poppins-Regular.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
    </style>

    @vite('resources/css/app.css')
    @livewireStyles

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


    @if (isset($productSchema) && $productSchema)
        @php
            $now = new \DateTime();
            $startOfYear = new \DateTime($now->format('Y') . '-01-01');
            $diff = $now->getTimestamp() - $startOfYear->getTimestamp();
            $oneDay = 1000 * 60 * 60 * 24;

            $reviewCount = $now->format('Y') - 2020 + floor($diff / $oneDay) + 1;
            $ratingValue = $reviewCount % 2 === 0 ? 4.9 : 4.8;

            $dataSchema = [
                '@context' => 'https://schema.org/',
                '@type' => 'Product',
                'name' => $page,
                'description' => $desc,
                'image' => $thumbnail,
                'brand' => [
                    '@type' => 'Brand',
                    'name' => config('app.name'),
                ],
                'offers' => [
                    '@type' => 'AggregateOffer',
                    'lowPrice' => 100000,
                    'highPrice' => 250000,
                    'priceCurrency' => 'IDR',
                    'offerCount' => $reviewCount,
                ],
                'review' => [
                    '@type' => 'Review',
                    'positiveNotes' => [
                        '@type' => 'ItemList',
                        'itemListElement' => [
                            [
                                '@type' => 'ListItem',
                                'position' => 1,
                                'name' => 'Harga ' . $page . ' yang sangat terjangkau.',
                            ],
                            [
                                '@type' => 'ListItem',
                                'position' => 2,
                                'name' => 'Mobil travel sangat nyaman, bersih, dan terawat.',
                            ],
                            [
                                '@type' => 'ListItem',
                                'position' => 3,
                                'name' => 'Sopir ' . $page . ' ramah dan profesional.',
                            ],
                        ],
                    ],
                    'reviewRating' => [
                        '@type' => 'Rating',
                        'ratingValue' => $ratingValue,
                        'bestRating' => 5,
                    ],
                    'author' => [
                        '@type' => 'Person',
                        'name' => developer(),
                    ],
                ],
                'aggregateRating' => [
                    '@type' => 'AggregateRating',
                    'ratingValue' => $ratingValue,
                    'reviewCount' => $reviewCount,
                    'bestRating' => 5,
                ],
            ];
        @endphp

        <!-- Product Schema -->
        <script type="application/ld+json">{!! preg_replace('/\\\/', '', json_encode($dataSchema)) !!}</script>
    @endif


</head>

<body class="font-poppins bg-slate-100 text-slate-600 overflow-x-visible">
    <x-layouts.header />

    @yield('content')

    <x-alert />
    <x-layouts.footer />


    @vite('resources/js/app.js')
    @livewireScripts

</body>


</html>

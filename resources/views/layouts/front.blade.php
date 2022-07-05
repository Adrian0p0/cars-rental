<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="Civil, industrial and infrastructure buildings">
    <meta property="og:type" content="website"><meta name="description" content="High quality services from the full range of operations, management and execution of civil, industrial and infrastructure construction works">

    <meta property="og:description" content="High quality services from the full range of operations, management and execution of civil, industrial and infrastructure construction works">

    <title> {{ config('app.name', 'Laravel') }} | {{ Request::route()->getName() }}</title>

    <link href="{{asset('fav/favicon-ibb-3Pt4J29lwB.png')}}" type="image/x-icon" rel="icon">
    <link href="{{asset('fav/favicon-ibb-3Pt4J29lwB.png')}}" type="image/x-icon" rel="shortcut icon">
    <link rel="apple-touch-icon" href="{{asset('fav/favicon-ibb-6JDl1g3FgT.png')}}">
    <link rel="apple-touch-icon" href="{{asset('fav/favicon-ibb-Xtz7KnBjlC.png')}}" sizes="180x180">
    <link rel="icon" href="{{asset('fav/favicon-ibb-fVNqmBX2JX.png')}}" sizes="32x32">
    <link rel="icon" href="{{asset('fav/favicon-ibb-3Pt4J29lwB.png')}}" sizes="16x16">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <x-front-nav-bar/>
    <main>
        @yield('body')
    </main>
    <x-front-footer/>
    @yield('footerScripts')
    <script src="{{asset('js/footer.js')}}"></script>
</body>
</html>

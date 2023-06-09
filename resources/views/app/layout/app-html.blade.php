<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MediaService</title>

    <link rel="preload" as="style" href="{{ asset('assets/fonts/style.css') }}"/>
    <link rel="preload" as="style" {{ asset('assets/fonts/fonts.css') }}/>
    <link rel="preload" as="style" {{ asset('assets/css/plugins.css') }}/>
    <link rel="preload" as="style" {{ asset('assets/css/fm.revealator.jquery.min.css') }}/>
    <link rel="preload" as="style" {{ asset('assets/css/jquery-ui.css') }}/>
    <link rel="preload" as="style" {{ asset('assets/css/style.css') }}/>
    <link rel="preload" as="style" {{ asset('assets/css/media.css') }}/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/fonts.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fm.revealator.jquery.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/media.css') }}"/>

    @vite(['resources/scss/app/app.scss'])

</head>
<body>
<div class="wrapper">

    @include('app.layout.header')

    <div class="content">
        @yield('content')
    </div>

    @include('app.layout.footer')

    @include('app.layout.modals')

</div>


{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js"--}}
{{--        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>--}}

<script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
<script src="{{ asset('assets/js/simpleParallax.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.spincrement.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

@vite(['resources/js/app/app.js'])
</body>
</html>

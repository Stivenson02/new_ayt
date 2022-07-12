<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <title>{{ config('app.name', 'Foxy Lukran Heaven') }}</title>

    <!-- Styles -->
    @include('layouts.partials.styles')
</head>
<body>
{{--
<nav class="navbar navbar-light">
    <div class="container d-block">
        <a href="index.html"><i class="bi bi-chevron-left"></i></a>
        <a class="navbar-brand ms-6" href="index.html">
            <img src="assets/images/logo.png">
        </a>
    </div>
</nav>--}}

{{ $slot }}

<!-- Scripts -->
@include('layouts.partials.scripts')

</body>
</html>

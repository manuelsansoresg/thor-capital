<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor_assets/pagepiling/jquery.pagepiling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/fontawesome/css/all.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<?php

$classEsActive = (session('lang') == null) ? 'linkActive' : '';
$classEnActive = '';
$classFrActive = '';

if (session('lang') != null && session('lang') == 'es') {
    $classEsActive = 'linkActive';
}

if (session('lang') != null && session('lang') == 'en') {
    $classEnActive = 'linkActive';
}

if (session('lang') != null && session('lang') == 'fr') {
    $classFrActive = 'linkActive';
}
?>

    <div class="intro">
        {{--<img src="{{ asset('img/TORCAPITAL_POSITIVO_RGB.gif') }}" alt="">--}}
        <video  autoplay="autoplay" muted >
            <source src="{{ asset('video/TORCAPITAL.mp4') }}" type="video/mp4">

        </video>
    </div>



{{--movil--}}
<nav class="navbar navbar-expand-lg navbar-light" style="display: none">
    <a class="navbar-brand" href="#about">
        <img class="img-fluid" src="{{ asset('img/TorCapital.svg') }}" alt="">
    </a>
    <ul class="list-inline menu__lang-movil">
        <li class="list-inline-item {{ $classEsActive }}"><a href="{{ url('lang', ['es']) }}">ES</a> </li>
        <li class="list-inline-item {{ $classEnActive }}"><a href="{{ url('lang', ['en']) }}">EN</a> </li>
        <li class="list-inline-item {{ $classFrActive }}"><a href="{{ url('lang', ['fr']) }}">FR</a> </li>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#about" > {!! trans('menu.about') !!} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#investment-criteria"> {!! trans('menu.criteria') !!}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#the-team"> {!! trans('menu.team') !!}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#transactions"> {!! trans('menu.transaction') !!}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#contact"> {!! trans('menu.contact') !!}</a>
            </li>


        </ul>

    </div>
</nav>

{{--movil--}}

    <div class="logo">
        <a href="#about"><img class="img-fluid" src="{{ asset('img/TorCapital.svg') }}" alt=""></a>
    </div>
    <div class="menu ">

        <ul class="list-inline menu__lang">
            <li class="">
                <a class="{{ $classEsActive }}" href="{{ url('lang', ['es']) }}">
                    ES
                </a>
            </li>
            <li class="">
                <a class="{{ $classEnActive }}" href="{{ url('lang', ['en']) }}">
                    EN
                </a>
            </li>
            <li class="">
                <a class="{{ $classFrActive }}" href="{{ url('lang', ['fr']) }}">
                    FR
                </a>
            </li>
        </ul>
        <ul class="menu__nav list-inline d-none">
            <li>
                <a href="#about">
                    {!! trans('menu.about') !!}
                </a>
            </li>
            <li>
                <a href="">
                    <a href="#contact" class="text-primary"> {!! trans('menu.contact') !!}</a>
                </a>
            </li>
            <li class="item list-inline-item">
                <a href="#investment-criteria"> {!! trans('menu.criteria') !!}</a>
            </li>

            <li class="item list-inline-item">
                <a href="#the-team"> {!! trans('menu.team') !!}</a>
            </li>

            <li class="item list-inline-item">
                <a href="#transactions"> {!! trans('menu.transaction') !!}</a>
            </li>

        </ul>
    </div>
    @yield('content')
    <div class="footer">
        <ul class="list-inline">
            <li class="list-inline-item">
                <img class="footer__img" id="moveUp" src="{{ asset('img/Flechaarriba.svg') }}" alt="">
            </li>
            <li class="list-inline-item">
                <img class="footer__img" id="moveDown" src="{{ asset('img/Flechaabajo.svg') }}" alt="">
            </li>
        </ul>
    </div>
    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="{{ asset('vendor_assets/accordion/index.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor_assets/pagepiling/jquery.pagepiling.min.js') }}"></script>
</body>

</html>

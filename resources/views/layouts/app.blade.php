<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor_assets/pagepiling/jquery.pagepiling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/fontawesome/css/all.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="intro">
    LOGO
</div>
<div class="logo">
    <img class="img-fluid" src="{{ asset('img/TorCapital.svg') }}" alt="">
</div>
<div class="menu">
    <?php

        $classEsActive = (session('lang') == null)? 'linkActive' : '';
        $classEnActive = '';
        $classFrActive = '';

        if(session('lang') != null && session('lang') == 'es'){
            $classEsActive = 'linkActive';
        }

        if(session('lang') != null && session('lang') == 'en'){
            $classEnActive = 'linkActive';
        }

        if(session('lang') != null && session('lang') == 'fr'){
            $classFrActive = 'linkActive';
        }
    ?>
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
    <ul class="menu__nav list-inline">
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
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor_assets/pagepiling/jquery.pagepiling.min.js') }}"></script>
</body>
</html>





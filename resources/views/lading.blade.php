@extends('layouts.app')

@section('content')
    <?php
        //$about = get_section(1, 'title');

    ?>
    <input type="hidden" id="menu_about" value="{!! trans('menu.about') !!}">
    <input type="hidden" id="menu_criteria" value="{!! trans('menu.criteria') !!}">
    <input type="hidden" id="menu_contact" value="{!! trans('menu.contact') !!}">
    <input type="hidden" id="menu_team" value="{!! trans('menu.team') !!}">
    <input type="hidden" id="menu_transaction" value="{!! trans('menu.transaction') !!}">
    <input type="hidden" id="error-title" value="{!! trans('contact.error_title') !!}">
    <input type="hidden" id="error-description" value="{!! trans('contact.error_description') !!}">
    <input type="hidden" id="ok-title" value="{!! trans('contact.ok_title ') !!}">
    <input type="hidden" id="ok-description" value="{!! trans('contact.ok_description ') !!}">
    <div class="movil">
        <a id="about"></a>

        <div class="about-movil">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p class="about__title px-4">
                            {!!  get_section(1, 'title')->description !!}
                        </p>
                    </div>

                </div>
            </div>
            <div>
                <?php $image = get_images(1, true); ?>

                @if($image != null)
                    <img src="{{ asset('img/about').'/'.$image->image }}" alt="">
                @endif
            </div>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="about__description ml-0 ml-md-5 px-4">
                            {!! get_section(1, 'description')->description !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="about-movil__description-blue px-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            {!! get_section(1, 'description2')->description !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
      {{--criteria--}}
        <div class="criteria-movil">
            <a id="investment-criteria"></a>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="criteria__title px-4 text-uppercase">
                            {!! get_section(2, 'title')->description !!}
                        </p>
                    </div>
                    <?php $image = get_images(2, true); ?>
                    <div class="col-12 text-center">
                        @if($image != null)
                            <img src="{{ asset('img/criteria/').'/'.$image->image }}" alt="">
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="mt-3 px-4">
                            {!! get_section(2, 'description')->description !!}
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div id="integration-list" class="criteria__list">
                            <ul>
                                <?php
                                $lists = get_section(2, '', 'ul', 1);
                                ?>
                                @foreach($lists as $list)
                                    <li>
                                        <a class="expand">
                                            <div class="right-arrow text-white">+</div>
                                            <div>
                                                <p class="object-bold text-white mb-0">{!! strtoupper ($list->name) !!}</p>
                                            </div>
                                        </a>

                                        <div class="detail">

                                            <div id="right" class="criteria__list-right">
                                                <div class="text-white">
                                                    {!! $list->description !!}

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      {{--criteria--}}
        {{-- team movil--}}
        <div class="team-movil">
            <a id="the-team"></a>

        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <p class="team-movil__title px-4"> {!! get_section(4, 'person_lbltitle')->description !!} </p>
                </div>
                <div class="col-12">
                    <div class="team__flex">
                        <div class="team__title ">

                        </div>
                        {{--first card--}}
                        <div class="team__card1" >
                            {{--card--}}
                            <div class="card card1" >
                                <!-- Face 2 -->
                                <div class="card-face face-2 card__content">
                                    <!-- Back trigger -->
                                    {{-- <button class="card-face__back-button" data-card-back="data-card-back">
                                         <img src="http://imgh.us/arrow_1.svg" width="19" height="19" draggable="false" />
                                     </button>--}}
                                    <div class="card__title">
                                        <p class="color-blue "> {!! get_section(4, 'person_title1')->description !!} </p>
                                    </div>
                                    <div class="card__description">

                                        <div>
                                            {!! get_section(4, 'person_description1')->description !!}
                                        </div>

                                    </div>

                                    <div class="card-face-footer">
                                        <div class="float-right team__icon-more">
                                            <a class="" data-card-back="data-card-back">
                                                <i class="fas fa-arrow-left color-blue"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Face 1 -->
                                <div class="card-face face-1">
                                    <!-- Menu trigger -->

                                    <div class="card-face__avatar">
                                        <!-- Bullet notification -->
                                        <?php $image = get_images(4, false, 0 , 1); ?>
                                        @if($image != null)
                                            <img src="{{ asset('img/team').'/'.$image->image }}"  draggable="false" />
                                        @endif
                                    </div>

                                    <!-- Cart Footer -->
                                    <div class="card-face-footer">
                                        <p class="team__footer-title mb-0">{!! get_section(4, 'person_title1')->description !!} </p>
                                        <p class="team__footer-subtitle mb-0"> {!! get_section(4, 'person_position1')->description !!} </p>
                                        <div class="float-right team__icon-more">
                                            <a class="" data-card-back="data-card-back">
                                                <i class="fas fa-plus color-blue"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--card--}}
                        </div>
                        {{--first card--}}

                        {{-- second card--}}
                        <div class="team__card2">
                            {{--card--}}
                            <div class="card card2">
                                <!-- Face 2 -->
                                <div class="card-face face-2 card__content">
                                    <!-- Back trigger -->
                                    {{-- <button class="card-face__back-button" data-card-back="data-card-back">
                                         <img src="http://imgh.us/arrow_1.svg" width="19" height="19" draggable="false" />
                                     </button>--}}
                                    <div class="card__title card__title2">
                                        <p class="color-blue "> {!! get_section(4, 'person_title2')->description !!} </p>
                                    </div>

                                    <div class="card__description">

                                        <div>
                                            {!! get_section(4, 'person_description2')->description !!}
                                        </div>

                                    </div>

                                    <div class="card-face-footer">
                                        <div class="float-right team__icon-more">
                                            <a class="" data-card-back2="data-card-back">
                                                <i class="fas fa-arrow-left color-blue"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Face 1 -->
                                <div class="card-face face-1">
                                    <!-- Menu trigger -->

                                    <div class="card-face__avatar">
                                        <!-- Bullet notification -->
                                        <?php $image = get_images(4, false, 0 , 2); ?>
                                        @if($image != null)
                                            <img src="{{ asset('img/team').'/'.$image->image }}"  draggable="false" />
                                        @endif
                                    </div>

                                    <!-- Cart Footer -->
                                    <div class="card-face-footer">
                                        <p class="team__footer-title mb-0">{!! get_section(4, 'person_title2')->description !!} </p>
                                        <p class="team__footer-subtitle mb-0"> {!! get_section(4, 'person_position2')->description !!} </p>
                                        <div class="float-right team__icon-more">
                                            <a class="" data-card-back2="data-card-back">
                                                <i class="fas fa-plus color-blue"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--card--}}
                        </div>
                        {{-- second card--}}
                    </div>
                </div>
            </div>
        </div>

        </div>
        {{-- team movil--}}


        {{-- transaction movil--}}
        <div class="trasaction-movil">
            <a id="transactions"></a>

            <div class="transaction__content">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 col-md-3">
                            <div class="align-self-center transaction__left">
                                <p class="transaction__title text-uppercase px-4">{!! get_section(5, 'title')->description !!}</p>
                               
                                <p>
                                    {!! get_section(5, 'description')->description !!}
                                </p>
                            </div>

                        </div>

                        <div class="col-12">
                            <div id="integration-list" class="criteria__list">
                                <ul>
                                    <?php
                                    $lists = get_section(5, '', 'ul', 1);
                                    ?>
                                    @foreach($lists as $list)
                                            <li>
                                                <a class="expand">
                                                    <div class="right-arrow text-white">+</div>
                                                    <div>
                                                        <div class="transaction__title-ul object-bold text-white mb-0">
                                                            {{--France/Kenia/Japan (2019)--}}
                                                            {!! $list->name !!}
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="detail">
                                                  
                                                    <div id="right" class="criteria__list-right">
                                                        <div class="text-white">
                                                            
                                                            @if ($list->image != '')
                                                                <div class="col-12 text-center pb-3">
                                                                    <img class="img-fluid" src="{{ asset('img/transaction').'/thumb_'.$list->image }}" alt="">
                                                                </div>
                                                            @endif
                                                           {!! $list->description !!}

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        {{-- transaction movil--}}
        {{-- contacto --}}
        <div class="contacto-movil">
            <a id="contact"></a>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="contact__title px-4">  {!! get_section(3, 'title')->description !!}  </p>
                    </div>
                    <div class="col-12">
                        <form id="contactanosmovil" class="mt-n0 mt-md-n4" autocomplete="off">
                            @include('contact')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- contacto--}}
    </div>
    <div id="pagepiling">
        <div class="section about" id="section1">
            <div class="about__content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 align-self-center">
                            <p class="about__title text-uppercase">
                                {!!  get_section(1, 'title')->description !!}
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <p class="about__description ml-0 ml-md-5">
                                        {!! get_section(1, 'description')->description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-10 about__content-box">
                                    <div class="about__box mt-4 about__box__hidden">
                                        <div class="about__box__description">
                                            {!! get_section(1, 'description2')->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 py-0 px-0 about__img">
                            <?php $image = get_images(1); ?>

                            @if($image != null)
                                <img class="img-fluid" src="{{ asset('img/about').'/'.$image->image }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section criteria" id="section2" style="display: none">
            <div class="criteria__content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-md-flex justify-content-between">
                            <div class="criteria__left">
                                <div class="criteria__left-content">
                                    <p class="criteria__title text-uppercase">
                                        {!! get_section(2, 'title')->description !!}
                                    </p>
                                    <div class="ml-0 ml-md-5 criteria__description">
                                        {!! get_section(2, 'description')->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="criteria__img">
                                <?php $image = get_images(2); ?>

                                @if($image != null)
                                    <img class="" src="{{ asset('img/criteria').'/'.$image->image }}" alt="">
                                @endif
                            </div>
                            <div id="integration-list" class="criteria__list">
                                <ul>
                                    <?php
                                        $lists = get_section(2, '', 'ul', 1);
                                    ?>
                                    @foreach($lists as $list)
                                    <li>
                                        <a class="expand">
                                            <div class="right-arrow text-white">+</div>
                                            <div>
                                                <p class="object-bold text-white mb-0">{!! strtoupper ($list->name) !!}</p>
                                            </div>
                                        </a>

                                        <div class="detail">

                                            <div id="right" class="criteria__list-right">
                                                <div class="text-white">
                                                    {!! $list->description !!}

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="section team" id="section4" style="display: none">
            <div class="team__content" >
                <div class="container">
                    <div class="row">
                        <div class="team__flex">
                            <div class="team__title ">
                                <p class="team__title__content">{!! get_section(4, 'person_lbltitle')->description !!}</p>
                            </div>
                            {{--first card--}}
                            <div class="team__card1">
                                {{--card--}}
                                <div class="card card1">
                                    <!-- Face 2 -->
                                    <div class="card-face face-2 card__content">
                                        <!-- Back trigger -->

                                        <div class="card__title">
                                            <p class="color-blue "> {!! get_section(4, 'person_title1')->description !!} </p>
                                        </div>
                                        <div class="card__description">

                                            <div>
                                                {!! get_section(4, 'person_description1')->description !!}
                                            </div>

                                        </div>

                                        <div class="card-face-footer">
                                            <div class="float-right team__icon-more">
                                                <a class="" data-card-back="data-card-back">
                                                    <i class="fas fa-arrow-left color-blue"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Face 1 -->
                                    <div class="card-face face-1">
                                        <!-- Menu trigger -->

                                        <div class="card-face__avatar">
                                            <!-- Bullet notification -->
                                            <?php $image = get_images(4, false, 0 , 1); ?>
                                            @if($image != null)
                                                <img src="{{ asset('img/team').'/'.$image->image }}"  draggable="false" />
                                            @endif
                                        </div>

                                        <!-- Cart Footer -->
                                        <div class="card-face-footer">
                                            <p class="team__footer-title mb-0">{!! get_section(4, 'person_title1')->description !!} </p>
                                            <p class="team__footer-subtitle mb-0"> {!! get_section(4, 'person_position1')->description !!} </p>
                                            <div class="float-right team__icon-more">
                                                <a class="" data-card-back="data-card-back">
                                                    <i class="fas fa-plus color-blue"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--card--}}
                            </div>
                            {{--first card--}}

                            {{-- second card--}}
                            <div class="team__card2">
                                {{--card--}}
                                <div class="card card2">
                                    <!-- Face 2 -->
                                    <div class="card-face face-2 card__content">
                                        <!-- Back trigger -->

                                        <div class="card__title card__title2">
                                            <p class="color-blue "> {!! get_section(4, 'person_title2')->description !!} </p>
                                        </div>

                                        <div class="card__description">

                                            <div>
                                                {!! get_section(4, 'person_description2')->description !!}
                                            </div>

                                        </div>

                                        <div class="card-face-footer">
                                            <div class="float-right team__icon-more">
                                                <a class="" data-card-back2="data-card-back">
                                                    <i class="fas fa-arrow-left color-blue"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Face 1 -->
                                    <div class="card-face face-1">
                                        <!-- Menu trigger -->

                                        <div class="card-face__avatar">
                                            <!-- Bullet notification -->
                                            <?php $image = get_images(4, false, 0 , 2); ?>
                                            @if($image != null)
                                                <img src="{{ asset('img/team').'/'.$image->image }}"  draggable="false" />
                                            @endif
                                        </div>

                                        <!-- Cart Footer -->
                                        <div class="card-face-footer">
                                            <p class="team__footer-title mb-0">{!! get_section(4, 'person_title2')->description !!} </p>
                                            <p class="team__footer-subtitle mb-0"> {!! get_section(4, 'person_position2')->description !!} </p>
                                            <div class="float-right team__icon-more">
                                                <a class="" data-card-back2="data-card-back">
                                                    <i class="fas fa-plus color-blue"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--card--}}
                            </div>
                            {{-- second card--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- transaction--}}
        <div class="section transaction" id="section5" style="display: none">
         @include('transaction')
        </div>
        {{-- transaction--}}

        {{-- contacto--}}
        <div class="section contact" id="section3" style="display: none">
            <?php

            $image = get_images(3);
            $vimage = ' background: url("/img/contact/2019-09-10.png") no-repeat center;  height: 100vh;
            background-size: cover;';
            ?>

            @if($image != null)
                    <?php $vimage = "background: url('/img/contact/$image->image') no-repeat center;  height: 100vh;
            background-size: cover;"; ?>
            @endif
            <div class="contact__content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact__left__content"  style="{{ $vimage }}">

                            </div>
                        </div>
                        <div class="col-md-8 contact-form">

                            <div class="row justify-content-center">
                                <div class="col-md-10 offset-md-1">
                                    <p class="contact__title">  {!! get_section(3, 'title')->description !!}  </p>
                                    <form id="contactanos" class="mt-n0 mt-md-n4" autocomplete="off">
                                        @include('contact')
                                    </form>
                                </div>
                            </div>
                            {{-- footer --}}
                            <div class="row mt-5">
                                <div class="col-12 col-md-4 col-lg-3">
                                    <p class="objectsans-bold mb-0">{!! get_section(3, 'txt_address')->description !!}</p>
                                    <p class="">{!! get_section(3, 'val_address')->description !!}</p>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3">
                                    <p class="objectsans-bold mb-0">{!! get_section(3, 'txt_phone')->description !!}</p>
                                    <p>{!! get_section(3, 'val_phone')->description !!}</p>

                                </div>
                                <div class="w-100 d-md-block d-lg-flex"></div>
                                <div class="col-12 col-md-5">
                                    <p class="objectsans-bold mb-0">{!! get_section(3, 'txt_email')->description !!}</p>
                                    <p>{!! get_section(3, 'val_email')->description !!}</p>
                                </div>
                            </div>
                            {{-- footer --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- contacto--}}
    </div>
@endsection

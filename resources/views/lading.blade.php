@extends('layouts.app')

@section('content')
    <?php
        $about = get_section(1, 'title');
    ?>
    <div id="pagepiling">
        <div class="section about" id="section1">
            <div class="about__content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 align-self-center">
                            <p class="about__title animated fadeInUp delay-1s">
                                {!!  get_section(1, 'title')->description !!}
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <p class="about__description ml-0 ml-md-5 animated zoomInRight delay-1s">
                                        {!! get_section(1, 'description')->description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-10 about__content-box">
                                    <div class="about__box mt-4 about__box__hidden">
                                        <div class="about__box__description animated fadeInUp delay-1s">
                                            {!! get_section(1, 'description2')->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 py-0 px-0 about__img animated fadeInUp delay-1s">
                            <img class="img-fluid" src="{{ asset('img/About.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section criteria" id="section2">
            <div class="criteria__content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-md-flex justify-content-between">
                            <div class="criteria__left" style="display: none">
                                <div class="criteria__left-content">
                                    <p class="criteria__title">
                                        {!! get_section(2, 'title')->description !!}
                                    </p>
                                    <p class="ml-0 ml-md-5">
                                        {!! get_section(2, 'description')->description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="criteria__img" style="display: none">
                                <img class="" src="{{ asset('img/criteria/Investment_Criteria.png') }}" alt="">
                            </div>
                            <div id="integration-list" class="criteria__list" style="display: none">
                                <ul>
                                    <?php
                                        $lists = get_section(2, '', 'ul', 1);
                                    ?>
                                    @foreach($lists as $list)
                                    <li>
                                        <a class="expand">
                                            <div class="right-arrow text-white">+</div>
                                            <div>
                                                <p class="object-bold text-white">{!! $list->name !!}</p>
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
        <div class="section contact" id="section3">
            <div class="contact__content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-md-flex justify-content-between">
                            <div class="contact__left" style="display: none">
                                <div class="contact__left__content"></div>
                            </div>
                            <div class="contact__right" style="display: none">
                                <div class="contact__right__content">
                                    <p class="contact__title">  {!! get_section(3, 'title')->description !!}
                                    <form id="contactanos" class="mt-n0 mt-md-n4" autocomplete="off">
                                        <div class="row">
                                            <div class="col-12 col-md-8 ">
                                                <div class="mat-input mt-5 float-left">
                                                    <div class="mat-input-outer">
                                                        <input type="text" name="name" autocomplete="off">
                                                        <label class="">{!! get_section(3, 'name')->description !!}*</label>
                                                        <div class="border"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col-12 col-md-4">
                                                <div class="mat-input  float-left">
                                                    <div class="mat-input-outer mt-4">
                                                        <input type="text" name="email" autocomplete="off">
                                                        <label class="">{!! get_section(3, 'email')->description !!}*</label>
                                                        <div class="border"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mat-input float-left">
                                                    <div class="mat-input-outer mt-4 ml-md-n6">
                                                        <input type="text" name="phone" autocomplete="off">
                                                        <label class="">{!! get_section(3, 'phone')->description !!}*</label>
                                                        <div class="border"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col-12 col-md-8 ">
                                                <div class="mat-input mt-5 float-left">
                                                    <div class="mat-input-outer">
                                                        <textarea name="message" cols="30" rows="10"></textarea>
                                                        <label class="">{!! get_section(3, 'message')->description !!}*</label>
                                                        <div class="border"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col-12 col-md-6 text-center">
                                                <div class="" id="spinner-contacto" style="display: none">
                                                    <div class="col-12 text-center mt-1 pb-5">
                                                        <i class="fas fa-spinner fa-spin text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-10 float-left">
                                                <div class="mat-input mt-3 text-center ">
                                                    <div class="mat-input-outer">
                                                        <button type="button" onclick="sendContact()" class="btn btn-primary col-md-2 btn-sectionCircle ml-0 ml-md-3">
                                                            Enviar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100"></div>

                                        <div class="row mt-5">
                                            <div class="col-12 offset-md-4">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- footer--}}
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <p class="objectsans-bold mb-0">{!! get_section(3, 'txt_address')->description !!}</p>
                                        <p class="">{!! get_section(3, 'val_address')->description !!}</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="objectsans-bold mb-0">{!! get_section(3, 'txt_phone')->description !!}</p>
                                        <p>contacto@thor-capital.com</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="objectsans-bold mb-0">{!! get_section(3, 'txt_email')->description !!}</p>
                                        <p>071-246-3165</p>
                                    </div>
                                </div>
                                {{-- footer--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="section4">
            <div class="intro">
                <h1>Compatible</h1>
                <p>Designed to work on tablet and mobile devices.</p>
                <p>Oh! And its compatible with old browsers such as IE 8 or Opera 12!</p>
            </div>
        </div>
    </div>
@endsection

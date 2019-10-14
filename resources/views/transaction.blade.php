<div class="transaction__content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-3">
                <div class="align-self-center transaction__left">
                    <p class="transaction__title text-uppercase"> {!! get_section(5, 'title')->description !!}</p>
                    <p>
                        {!! get_section(5, 'description')->description !!}
                    </p>
                </div>

            </div>

            <div class="col-12 col-md-12 col-lg-8 offset-lg-1">
                <div class="transaction__right">
                    <div>
                        <ul class="ul-transaction scroll" id="">
                            <?php
                            $lists = get_section(5, '', 'ul', 1);
                            ?>
                            @foreach($lists as $list)
                                <li class="active">
                                    <div class="section-title">
                                        <p>
                                            {!! $list->name !!}

                                        </p>


                                    </div>
                                    <div class="section-content scroll">
                                      
                                        <p>
                                            @if ($list->image != '')
                                                <img class="img-fluid mt-2" src="{{ asset('img/transaction').'/thumb_'.$list->image }}" alt="">
                                                <div class="w-100"></div>
                                            @endif
                                            {!! $list->description !!}

                                        </p>
                                    </div>
                                </li>
                            @endforeach
                            {{--<li class="">
                                <div class="section-title">
                                    <p>
                                        Finland/Germany
                                        <br>
                                        <span class="transaction__subtitle">2019</span>
                                    </p>
                                </div>
                                <div class="section-content">
                                    <p>
                                        Högfors Oy, a Finnish manufacturer of butterfly valves, sold all outstanding shares to ARI-Armaturen Group, a German industrial company.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="section-title">
                                    <p>
                                        Norway/US
                                        <br>
                                        <span class="transaction__subtitle">2019</span>
                                    </p>
                                </div>
                                <div class="section-content">
                                            <span>
                                                Feelgood Scene Film was sold by Sony Music Norway and other minority owners to Monday Media. Feelgood is the leading comedy production company in Norway featuring established successes in scripted comedy and studio comedy programs.

                                            </span>
                                </div>
                            </li>
                            <li>
                                <div class="section-title">
                                    <p>
                                        UK/Spain
                                        <br>
                                        <span class="transaction__subtitle">2019</span>
                                    </p>
                                </div>
                                <div class="section-content">
                                            <span>
                                                IDE Systems, a supplier of temporary power equipment for events, construction work and facilities management companies, completed an MBO with the backing  of Santander.

                                            </span>
                                </div>
                            </li>--}}
                        </ul>

                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

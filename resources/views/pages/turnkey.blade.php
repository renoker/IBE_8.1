@extends('layouts.main')
@section('title', 'IBE - Turnkey')
@section('boby', 'main_body')
@section('content')
    <div class="conten_padre">
        <div class="banner_general">
            <img src="{{ url('images/turnkey.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Turnkey</h1>
                    <p class="text">
                        {{ __('At IBE we have our most complete comprehensive service “Turnkey contract” in which we integrate each of our specialties, to start up any plant, from: civil works, electrical installation (high, medium, low voltage), machine installation, programming of components, pneumatic and hydraulic systems, until delivery and commissioning.') }}
                    </p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/Sello.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- Banner --}}
        <div class="box_banner_azul">
            <div class="content_banner_azul">
                <div class="part_one">
                    <div class="b">
                        <h1 class="h1">{!! htmlspecialchars_decode(__("TURNKEY PROJECT <br> 'Turnkey contract'.")) !!}</h1>
                        <div class="box_amarillo">
                            <p>Turnkey</p>
                        </div>
                    </div>
                    <p class="text">
                        {!! htmlspecialchars_decode(
                            __(
                                '<span>IBE</span> we have our most complete comprehensive <span>“Turnkey contract”</span> or <span>“Turnkey contract”</span> service in which we integrate each and every one of our specialties, to start up any plant, from: civil works, electrical installation (high, medium, low tension), installation of machines, programming of components, pneumatic and hydraulic systems, until turnkey delivery. <br><br> <span>We want to be your best option to ensure each of your processes, taking into account; quality, production, competitiveness and satisfaction.</span>',
                            ),
                        ) !!}
                    </p>
                    <a href="{{ route('turnkey.index') }}">
                        <div class="href_blanco">
                            <p class="p_a">{{ __('Know more') }}</p>
                            <x-icons.arrowDerecha />
                        </div>
                    </a>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/hand_key.png') }}" alt="">
                </div>
            </div>
            {{-- Iconos --}}
            <div class="content_icons_info">
                <div class="inter">
                    <div class="item">
                        <div class="icon_1"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Civil Works')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(__('Preparation of the building from the foundations, civil works, etc.')) !!}</p>
                    </div>
                    <div class="item">
                        <div class="icon_2"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Design and manufacturing')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(__('Manufacturing of <br> equipment.')) !!}</p>
                    </div>
                    <div class="item">
                        <div class="icon_3"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Electrical <br> Installation')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(
                            __("Base installation 'Electrical installation' (high, medium, low <br> voltage) pipelines, <br> trays, etc.."),
                        ) !!}</p>
                    </div>
                    <div class="item">
                        <div class="icon_4"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Automation')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(__('Automation and <br> equipment control.')) !!}</p>
                    </div>
                    <div class="item">
                        <div class="icon_5"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Plant Layout <br> Distribution')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(__('Machinery design <br> and plant layout <br> distribution.')) !!}</p>
                    </div>
                    <div class="item">
                        <div class="icon_6"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Machinery <br> Installation')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(
                            __('Machinery installation, connection <br> and components, <br> programming, <br> hydraulics, etc.'),
                        ) !!}</p>
                    </div>
                    <div class="item">
                        <div class="icon_7"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Commissioning')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(__('Commissioning <br> and full <br> operation.')) !!}</p>
                    </div>
                    <div class="item">
                        <div class="icon_8"></div>
                        <h6 class="h6">{!! htmlspecialchars_decode(__('Personnel <br> Training')) !!}</h6>
                        <p class="text">{!! htmlspecialchars_decode(__('Training for <br> assigned personnel <br> for operation.')) !!}</p>
                    </div>
                </div>
            </div>
            {{-- Barras --}}
            <div class="content_barras">
                <div class="item_barra">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_1.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">{{ __('Civil Works') }}</h1>
                            <p class="p">
                                {{ __('Area review and feasibility, environmental impact study, plot of land with topographic references, work design. natural displacement of land and general construction.') }}
                            </p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_1.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_1" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_1.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider DOS --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_2.jpg') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_2" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_1.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">{{ __('Design and manufacturing') }}</h1>
                            <p class="p">
                                {{ __('Design and manufacturing of machinery according to specifications, requirements or customer expectations, based on the integration of machinery, taking care of each of the applicable legal compliances and quality standards for each process.') }}
                            </p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- Slider TRES --}}
                <div class="item_barra mt-10">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_3.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">{!! htmlspecialchars_decode(__('Electrical Installation')) !!}</h1>
                            <p class="p">{!! htmlspecialchars_decode(
                                __(
                                    'Includes feasibility study with energy supplier, design bases, aerial-underground transition, medium voltage, medium voltage lines to electrical substation, medium voltage single-line diagram. Low voltage, diagrams, load charts, lighting and contacts in the warehouse, home automation, physical ground system, SPDA, emergency system and catalog of concepts.',
                                ),
                            ) !!}</p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_1.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_3" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_1.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider CUATRO --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_4.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_4" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_d_4.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">{{ __('Automation') }}</h1>
                            <p class="p">{!! htmlspecialchars_decode(
                                __(
                                    'Process line automation integrating each of the machines, being programmed to efficiently achieve the final result.',
                                ),
                            ) !!}</p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_4.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- Slider CINCO --}}
                <div class="item_barra mt-10">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_5.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">{!! htmlspecialchars_decode(__('Plant Layout Distribution')) !!}</h1>
                            <p class="p">{!! htmlspecialchars_decode(
                                __(
                                    'Design and process flow from reception to final packaging taking into account the dimensions with which the client costs and also distribute them areas.',
                                ),
                            ) !!}</p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_1.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_5" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_1.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider SEIS --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_6.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_6" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_d_4.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">{!! htmlspecialchars_decode(__('Machinery Installation')) !!}</h1>
                            <p class="p">{!! htmlspecialchars_decode(__('Installation of the entire process line and peripherals')) !!}</p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_6.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- Slider SIETE --}}
                <div class="item_barra mt-10">
                    <div class="part_one">
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_7.png') }}" alt="">
                        </div>
                        <div class="box_info">
                            <h1 class="h1">{!! htmlspecialchars_decode(__('Commissioning')) !!}</h1>
                            <p class="p">{!! htmlspecialchars_decode(__('Mechanical, pneumatic, electrical and control operation tests.')) !!}</p>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/barra_7.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_7" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_e_7.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_2.jpg') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_b_3.jpg') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- Slider OCHO --}}
                <div class="item_barra mt-10">
                    <div class="part_two">
                        <img src="{{ url('images/barra_8.png') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <section class="splide" id="barra_8" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_d_4.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_2.png') }}" class="img_slid" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{ url('images/slider_c_3.png') }}" class="img_slid" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="part_one_r">
                        <div class="box_info">
                            <h1 class="h1">{{ __('Personnel Training') }}</h1>
                            <p class="p">{!! htmlspecialchars_decode(__('We provide the training to be able to operate your plant without any problem.')) !!}</p>
                        </div>
                        <div class="box_img">
                            <img src="{{ url('icons/icon_b_8.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Nuestros Valores --}}
            <div class="box_general mt-10">
                <h1 class="h1">{{ __('Certifications') }}</h1>
                <div class="content_slider">
                    <div class="slider">
                        <section class="splide" id="certificaciones" aria-label="Certificaciones">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <p class="txt_slider">
                                            {{ __('Our ISO 9001:2015 certification reinforces and ensures the quality of the services and products that we offer to our interested parties, complying with each of the highest quality standards of each of our processes.') }}
                                        </p>
                                    </li>
                                    <li class="splide__slide">
                                        <p class="txt_slider">
                                            {{ __('We have an IQNET certificate related to the largest, most credible and reliable certification network in the world and will have your data present in the international database of certified companies evaluated as world-renowned suppliers.') }}
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="sellos">
                        <img src="{{ url('icons/sello_1.png') }}" class="img_sello" alt="">
                        <img src="{{ url('icons/sello_2.png') }}" class="img_sello" alt="">
                        <img src="{{ url('icons/iso_9001.png') }}" class="img_sello" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    @vite('resources/js/turnkey.js')
@endsection

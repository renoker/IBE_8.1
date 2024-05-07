@extends('layouts.main')
@section('title', 'IBE - Servicios')
@section('boby', 'main_body')
@section('content')
    <div class="content_padre_servicios">
        {{-- Envabezado y Logo --}}
        <div class="video_servicios">
            <img src="{{ url('images/servicios.png') }}" class="img" alt="">
        </div>
        <div class="espaciador"></div>
        {{-- Slider --}}
        {{-- Bloques informativos --}}
        <div class="contenedor_background_servicios">
            <section class="splide" id="principal" aria-label="">
                <div class="splide__track">
                    @if ($language == 'es')
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <img src="{{ url('images/servicios/32.png') }}" style="width: 100%" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <img src="{{ url('images/servicios/33.png') }}" style="width: 100%" alt="">
                                </div>
                            </li>
                        </ul>
                    @else
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <img src="{{ url('images/servicios/32.png') }}" style="width: 100%" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <img src="{{ url('images/servicios/33.png') }}" style="width: 100%" alt="">
                                </div>
                            </li>
                        </ul>
                    @endif
                </div>
            </section>
        </div>
        <div class="espaciador"></div>
        {{-- Bloques informativos --}}
        <div class="contenedor_background_servicios">
            <section class="splide" id="servicios_cumplidos" aria-label="">
                <div class="splide__track">
                    @if ($language == 'es')
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/3.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/5.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/7.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/9.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/11.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/13.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/15.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/17.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/19.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/21.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/23.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/25.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/27.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/es/29.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                        </ul>
                    @else
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/4.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/6.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/8.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/10.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/12.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/14.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/16.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/18.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <img src="{{ url('videos/en/20_imagen.png') }}" style="width: 100%" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/22.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/24.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/26.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/28.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box_parallax">
                                    <video src="{{ url('videos/en/30.mp4') }}" autoplay preload loop="true"></video>
                                </div>
                            </li>
                        </ul>
                    @endif
                </div>
            </section>
        </div>

        <div class="content_banner_azul mt">
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
                <img src="{{ url('images/hand_key.png') }}" alt="">
            </div>
        </div>

        <div class="content_nuestros_clientes">
            <h1 class="encabezado_servicios">{!! htmlspecialchars_decode(__('Our Brands')) !!}</h1>
            <section class="splide" id="nuestros_clientes" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/1.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/2.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/3.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/4.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/5.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/6.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/7.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/8.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/9.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/10.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/11.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/12.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/13.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/14.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/15.png') }}" alt="">
                        </li>5
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/16.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/17.png') }}" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ url('images/marcas/18.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/servicios.js')
@endsection

@extends('layouts.main')
@section('title', 'IBE - Home')
@section('boby', 'main_body')
@section('content')
    <div class="conten_padre">
        <div class="content_banner_slider">
            <div class="opa"></div>
            <video id="videoPrincipal" muted loop class="img_banner">
                <source src="{{ url('videos/corporativo.mp4') }}" type="video/mp4">
            </video>
            <div class="content_inter_banner">
                <div class="part_one">
                    <section class="splide" id="principal" aria-label="">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <h1 class="encabezado">{{ __('Manufacturing of food grade machinery') }}</h1>
                                    <p class="text">
                                        {{ __('Specialists in manufacturing machinery for food processes, post-harvest and conservation processes, carried out under the highest quality standards evaluated and endorsed under the ISO 9001:2015 standard.') }}
                                    </p>
                                    {{-- <a href="">
                                        {{ __('Know more') }} <x-icons.arrowDerecha />
                                    </a> --}}
                                </li>
                                <li class="splide__slide">
                                    <h1 class="encabezado">{{ __('Automation') }}</h1>
                                    <p class="text">
                                        {{ __('Integration of industrial control systems geographically distributed in a plant or machinery.') }}
                                    </p>
                                </li>
                                <li class="splide__slide">
                                    <h1 class="encabezado">{{ __('Refubish and maintenance') }}</h1>
                                    <p class="text">
                                        {{ __('Preventive and corrective maintenance on national and international equipment.') }}
                                    </p>
                                </li>

                            </ul>
                        </div>
                    </section>
                </div>
                <div class="part_two">
                    <img src="{{ url('images/prew.png') }}" id="btnPrev" alt="">
                    <img src="{{ url('images/next.png') }}" id="btnNext" alt="">
                </div>
            </div>
        </div>
        <div class="content_full_image">
            <div class="box_ibe_integral">
                <div class="part_two">
                    <img src="{{ url('images/icon_home_iqnet.png') }}" alt="">
                </div>
                <div class="part_one">
                    <div class="left">
                        <img src="{{ url('images/IBE-Logotipo_06.png') }}" alt="" class="logo_footer">
                        <div>
                            <h6 class="h6_logo">Integral Solutions</h6>
                            <p class="p_logo">
                                {!! htmlspecialchars_decode(__('Productive Processes <br> Agroindustrial')) !!}
                            </p>
                        </div>
                    </div>
                    <p class="text">
                        {!! htmlspecialchars_decode(
                            __(
                                'At <span>IBE SOLUTIONS</span> we offer the design and manufacturing service of food grade agro-industrial equipment and industry in general. We have an extensive catalog of products, however, in our company we have the scope to make personalized designs based on the needs and expectations of our interested parties.',
                            ),
                        ) !!}
                    </p>
                </div>
            </div>
            {{-- Nuestros Valores --}}
            <div class="box_general mt-10">
                <div class="content_certificaciones">
                    <div class="slider">
                        <h1 class="h1_h">{{ __('Certifications') }}</h1>
                        <div class="iso">
                            <p>ISO9001</p>
                        </div>
                        <p class="txt_slider">
                            {!! htmlspecialchars_decode(
                                __(
                                    'It requires that our manufacturing meet the <span>highest quality and safety standards</span> to guarantee and ensure each of the processes in your plant.',
                                ),
                            ) !!}
                        </p>
                        <a href="">
                            <div class="href">
                                <p class="p">{{ __('Know more') }}</p>
                                <x-icons.arrowDerecha />
                            </div>
                        </a>
                    </div>
                    <div class="sellos">
                        <img src="{{ url('images/s_2.png') }}" class="img_sello" alt="">
                        <img src="{{ url('images/s_1.png') }}" class="img_sello" alt="">
                        <img src="{{ url('images/iso_9001.png') }}" class="img_sello" alt="">
                    </div>
                </div>
            </div>
            {{-- Barras --}}

            {{-- Maquinas --}}
            <div class="container_mquinaria">

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
                        <img src="{{ url('images/hand_key.png') }}" alt="">
                    </div>
                </div>

                {{-- NUESTROS CLIENTES --}}
                <div class="content_nuestros_clientes">
                    <h1 class="encabezado_servicios">{!! htmlspecialchars_decode(__('Our Clients')) !!}</h1>
                    <section class="splide" id="nuestros_clientes" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/fresh.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/Frutival.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/sagroexport.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/jonson_controls.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/axis.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/Motus.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/texbel.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/villita.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/agroexport.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/calavo.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/Coliman1.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/EASTMAN.png') }}" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ url('images/clientes/Evofrut.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    @vite('resources/js/home.js')
    <script>
        const video = document.getElementById('videoPrincipal');

        // Espera a que los metadatos del video estén listos
        video.addEventListener('loadedmetadata', () => {
            // Establece el tiempo de inicio al minuto 10 (600 segundos)
            video.currentTime = 10;
        });

        // Opcional: Reproduce automáticamente cuando el video está listo
        video.addEventListener('canplay', () => {
            video.play();
        });
    </script>
@endsection

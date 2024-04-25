@extends('layouts.main')
@section('title', 'IBE - Home')
@section('boby', 'main_body')
@section('content')
    <div class="conten_padre">
        <div class="content_banner_slider">
            <img src="{{ url('images/tortilla.gif') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <img src="{{ url('images/logo_color.png') }}" class="logo" alt="">
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
                        <img src="{{ url('images/sello_1.png') }}" class="img_sello" alt="">
                        <img src="{{ url('images/sello_2.png') }}" class="img_sello" alt="">
                    </div>
                </div>
            </div>
            <div class="box_ibe_integral">
                <div class="part_two">
                    <img src="{{ url('images/icon_home_iqnet.png') }}" alt="">
                </div>
                <div class="part_one">
                    <h1 class="h1">IBE Integral Solutions</h1>
                    <p class="text">
                        {!! htmlspecialchars_decode(
                            __(
                                'We are a Mexican company dedicated to the manufacture of agro-industrial machinery including design, automation and maintenance; Made under the highest standards of quality and safety, thanks to this we have <span>ISO 9001:2015</span> certification. In addition to this compliance, we are positioned as one of the globally recommended and recognized suppliers registered in the <span>IQnet network.</span>',
                            ),
                        ) !!}
                    </p>
                </div>
            </div>
            {{-- Barras --}}
            <div class="content_barra">
                <div class="item_barra">
                    <div class="part_one">
                        <div class="box_info">
                            <h1 class="h1">{{ __('Our catalog') }}</h1>
                            <p class="p">
                                {!! htmlspecialchars_decode(
                                    __(
                                        'We have <span>an extensive catalog of products and services where we have food grade machinery after harvest, processing, disposal, storage and conservation.</span>',
                                    ),
                                ) !!}
                            </p>
                            <a href="{{ route('directory.index') }}">
                                <div class="href_blanco">
                                    <p class="p_a">{{ __('Know more') }}</p>
                                    <x-icons.arrowDerecha />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="part_two">
                        <img src="{{ url('images/home_catalogo.jpg') }}" alt="">
                    </div>
                    <div class="part_two_slider">
                        <img src="{{ url('images/home_catalogo_b.png') }}" class="img_slid" alt="">
                    </div>
                </div>
                {{-- Titulo --}}
                <h1 class="h1_encabezado">{{ __('Agroindustrial Machinery') }}</h1>
            </div>
            {{-- Maquinas --}}
            <div class="container_mquinaria">
                <div class="int">
                    @foreach ($list as $item)
                        <div class="box_maquina">
                            <img src="{{ url($item->image) }}" alt="">
                            <h1 class="h1">{{ $item->name }}</h1>
                            <div class="iso">
                                <p>{{ $item->model }}</p>
                            </div>
                            <p class="txt_slider">
                                {{ $item->objetivo }}
                            </p>
                            <a href="{{ route('directory.show', $item) }}">
                                <div class="hre">
                                    <p class="p">{{ __('Know more') }}</p>
                                    <x-icons.arrowDerecha />
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="content_button_maquinas">
                    <a href="{{ route('directory.index') }}"><button type="button">{{ __('See everything') }}
                            <x-icons.arrowDerechaBig /></button></a>
                </div>
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
                {{-- Mosaico --}}
                <div class="content_mosaico">
                    <img src="{{ url('images/IMG_1359.jpg') }}" alt="">
                    <img src="{{ url('images/IMG_7441.jpg') }}" alt="">
                    <img src="{{ url('images/IMG_4516.jpg') }}" alt="">
                    <img src="{{ url('images/IMG_9544.jpg') }}" alt="">
                </div>
                {{-- Barras --}}
                <div class="content_horizontal">
                    <h1 class="encabezado_servicios">{{ __('Services') }}</h1>

                    <div class="item_barra">
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_1.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_1.png') }}" class="img_slid" alt="">
                        </div>
                        <div class="part_one">
                            <div class="box_info">
                                <h1 class="h1">{!! htmlspecialchars_decode(__('Manufacturing')) !!}</h1>
                                <p class="p">{!! htmlspecialchars_decode(
                                    __(
                                        'We carry out the manufacturing process from start to finish for each designed machinery. We produce serial parts using high-precision laser cutting in steel and aluminum',
                                    ),
                                ) !!}</p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">{{ __('Know more') }}</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_one_l">
                            <div class="box_info">
                                <h1 class="h1">{!! htmlspecialchars_decode(__('Design')) !!}</h1>
                                <p class="p">{!! htmlspecialchars_decode(
                                    __(
                                        'At IBE Solutions, we have the capacity to develop specific customized designs based on meeting the objectives of our clients, while adhering to the same quality standards.',
                                    ),
                                ) !!}</p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">{{ __('Know more') }}</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_2.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_2.png') }}" class="img_slid" alt="">
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_3.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_3.png') }}" class="img_slid" alt="">
                        </div>
                        <div class="part_one">
                            <div class="box_info">
                                <h1 class="h1">{!! htmlspecialchars_decode(__('Automation')) !!}</h1>
                                <p class="p">{!! htmlspecialchars_decode(
                                    __(
                                        'Supply, integration, and installation of motor control panels; development, modification, and support for programming and application and development of automation for equipment.',
                                    ),
                                ) !!}</p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">{{ __('Know more') }}</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_one_l">
                            <div class="box_info">
                                <h1 class="h1">{!! htmlspecialchars_decode(__('Maintenance')) !!}</h1>
                                <p class="p">{!! htmlspecialchars_decode(
                                    __(
                                        '<span>Repair, preventive maintenance</span>, and corrective maintenance of electronic and electromechanical equipment. Manufacture of electromechanical equipment.',
                                    ),
                                ) !!}</p>
                                <a href="">
                                    <div class="href_blanco">
                                        <p class="p_a">{{ __('Know more') }}</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_4.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_4.png') }}" class="img_slid" alt="">
                        </div>
                    </div>
                    <div class="item_barra mt-10">
                        <div class="part_two">
                            <img src="{{ url('images/Rectangle_5.png') }}" alt="">
                        </div>
                        <div class="part_two_slider">
                            <img src="{{ url('images/Rectangle_b_5.png') }}" class="img_slid" alt="">
                        </div>
                        <div class="part_one">
                            <div class="box_info">
                                <h1 class="h1">{!! htmlspecialchars_decode(__('Industrial Electrical Services')) !!}</h1>
                                <p class="p">{!! htmlspecialchars_decode(
                                    __(
                                        'Installation of low/medium voltage systems, preventive and corrective maintenance in low/medium voltage, energy consumption studies. Electrical substations, lighting system installations, installation of audio systems for personnel communication. Corrective maintenance of electronic and electromechanical equipment.',
                                    ),
                                ) !!}</p>
                                <a href="">
                                    <div class="href_blanco_s">
                                        <p class="p_a">{{ __('Know more') }}</p>
                                        <x-icons.arrowDerechaBig />
                                    </div>
                                </a>
                            </div>
                        </div>
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
@endsection

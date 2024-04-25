@extends('layouts.main')
@section('title', 'IBE - Catálogo')
@section('boby', 'main_body')
@section('popups')
    <div id="popup">
        <div class="opacity" id="closePopUp">
            <div class="content_contacto">
                <h1 class="h1">Cuestionario</h1>
                <p class="p">En IBE Solutions queremos ser un auxiliar primordial para el desarrollo de su empresa.
                    compártenos tus datos de contacto y un asesor se comunicará contigo.</p>
                <form action="{{ route('cotizacion.store') }}" method="post">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="directorie_id" value="{{ $row->id }}">
                    <div class="box_input">
                        <div class="icon_input">
                            <img src="{{ url('icons/user.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Nombre" name="name">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/ping.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Compañia" name="company">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cel.png') }}" alt="">
                        </div>
                        <input type="tel" placeholder="Teléfono" name="phone">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cartita.png') }}" alt="">
                        </div>
                        <input type="email" placeholder="Correo" name="email">
                    </div>
                    <div class="box_input mt-15">
                        <textarea name="message" id="" cols="30" rows="5" class="textarea" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="content_button_footer_send">
                        <button type="submit">Envíar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content_padre_catalogo">
        <div class="banner_general">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Nuestro catálogo</h1>
                    <p class="text">En IBE SOLUTIONS ofrecemos el servicio de diseño y desarrollo de equipos para
                        cualquier
                        sector industrial y grado alimenticio. Contamos con un extenso catálogo de productos, sin embargo,
                        en nuestra compañía contamos con el alcance para realizar diseños personalizados basados en las
                        necesidades y expectativas de nuestras partes interesadas.</p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/Sello.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="box_general mt-4">
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
                    <img src="{{ url('icons/iso_9001.png') }}" class="img_sello_2" alt="">
                </div>
            </div>
        </div>
        {{-- Categoria --}}
        <div class="content_padre_detalle_catologo" id="detalle_maquina">
            <div class="conteiner_detalle_categoria">
                <div class="left">
                    <h1 class="h1">{{ $row->name }}</h1>
                    <div class="box_model">
                        <h6 class="h6">Modelo: </h6>
                        <div class="iso">
                            <p>{{ $row->model }}</p>
                        </div>
                    </div>
                    <h1 class="encabezado">Especificaciones</h1>
                    <h6 class="h6_g">Fabricación:</h6>
                    <p class="parrafo">{{ $row->fabricacion }}</p>
                    <h6 class="h6_g">Capacidad:</h6>
                    <p class="parrafo">{{ $row->capacidad }}</p>
                    <h6 class="h6_g">Componentes y transmición:</h6>
                    <p class="parrafo">{{ $row->componentes }}</p>
                    <h6 class="h6_g">Objetivo</h6>
                    <p class="parrafo pb">{{ $row->objetivo }}</p>
                    <div class="content_frutas">
                        @foreach ($frutas as $item)
                            <div class="item">
                                <img src="{{ url($item->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="right">
                    <div class="content_img_maquina">
                        <img src="{{ url($row->image) }}" class="maquina" alt="">
                        <img src="{{ url($row->logo_servicio) }}" class="modelo_img" alt="">
                    </div>
                    <div class="contenedor_botones_detalle">
                        <button type="button" class="btn_large" id="openPopUp">Cotizar</button>
                        <div class="cont_slider_buttons">
                            <input type="hidden" value="{{ $row->id }}" id="posicion">
                            <button type="button" class="btn_large" id="prew"><x-icons.arrowIzq />
                                Anterior</button>
                            <button type="button" class="btn_large" id="next">Siguiente
                                <x-icons.arrowDerechaBig /></button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Productos relacionados --}}
            <div class="conteiner_productos_relacionados">
                <h1 class="h1_g">Productos realcionados</h1>
                <div class="box_relacionados">
                    @foreach ($relacionados as $item)
                        <div class="item_m">
                            <img src="{{ url($item->image) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="content_banner_azul" style="margin: 6rem auto">
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
        </div>

    </div>
@endsection

@section('scripts')
    @vite('resources/js/detalle.js')
@endsection

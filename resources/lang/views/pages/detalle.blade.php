@extends('layouts.main')
@section('title', 'IBE - Catálogo')
@section('boby', 'main_body')
@section('popups')
    <div id="popup">
        <div class="opacity" id="closePopUp">
            <div class="content_contacto">
                <h1 class="h1">{{ __('Questionnaire') }}</h1>
                <p class="p">
                    {{ __('At IBE Solutions we want to be a primary assistant for the development of your company. Share your contact information with us and an advisor will contact you.') }}
                </p>
                <form action="{{ route('cotizacion.store') }}" method="post">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="directorie_id" value="{{ $row->id }}">
                    <div class="box_input">
                        <div class="icon_input">
                            <img src="{{ url('images/user.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Nombre" name="name">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('images/ping.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="Compañia" name="company">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('images/cel.png') }}" alt="">
                        </div>
                        <input type="tel" placeholder="Teléfono" name="phone">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('images/cartita.png') }}" alt="">
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
                    <h1 class="encabezado">{{ __('Our catalog') }}</h1>
                    <p class="text">
                        {{ __('At IBE SOLUTIONS we offer the design and development service of equipment for any industrial sector and food grade. We have an extensive catalog of products, however, in our company we have the scope to make personalized designs based on the needs and expectations of our interested parties.') }}
                    </p>
                </div>
                <div class="part_two">
                    <img src="{{ url('images/Sello.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="content_certificaciones mt-detalle">
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
        {{-- Categoria --}}
        <div class="content_padre_detalle_catologo" id="detalle_maquina">
            <div class="conteiner_detalle_categoria">
                <div class="left">
                    <h1 class="h1">{{ $row->name }}</h1>
                    <h1 class="encabezado">{{ __('Specifications') }}</h1>
                    <h6 class="h6_g">{{ __('Manufacturing:') }}</h6>
                    <p class="parrafo">{{ $row->fabricacion }}</p>
                    <h6 class="h6_g">{{ __('Capacity:') }}</h6>
                    <p class="parrafo">{{ $row->capacidad }}</p>
                    <h6 class="h6_g">{{ __('Components and transmission:') }}</h6>
                    <p class="parrafo">{{ $row->componentes }}</p>
                    <h6 class="h6_g">{{ __('Objetive') }}</h6>
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
                        <button type="button" class="btn_large" id="openPopUp">{{ __('Quote') }}</button>
                        <div class="cont_slider_buttons">
                            <input type="hidden" value="{{ $row->id }}" id="posicion">
                            <button type="button" class="btn_large" id="prew"><x-icons.arrowIzq />
                                {{ __('Former') }}</button>
                            <button type="button" class="btn_large" id="next">{{ __('Following') }}
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
                    <img src="{{ url('images/hand_key.png') }}" alt="">
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    @vite('resources/js/detalle.js')
@endsection

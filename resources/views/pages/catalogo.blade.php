@extends('layouts.main')
@section('title', 'IBE - Catálogo')
@section('boby', 'main_body')
@section('content')
    <div class="content_padre_catalogo">
        <div class="content_banner_slider_catalogo">
            <div class="opa"></div>
            <video src="{{ url('videos/catalogo.mp4') }}" autoplay loop class="img_banner"></video>
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">{{ __('Our catalog') }}</h1>
                    <p class="pro_line">Pro line process</p>
                    <p class="text">
                        {{ __('At IBE SOLUTIONS we offer the design and development service of equipment for any industrial sector and food grade. We have an extensive catalog of products, however, in our company we have the scope to make personalized designs based on the needs and expectations of our interested parties.') }}
                    </p>
                </div>
            </div>
        </div>
        {{-- <div class="banner_general">
            <img src="{{ url('images/nosotros.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">{{ __('Our catalog') }}</h1>
                    <p class="pro_line">Pro line process</p>
                    <p class="text">
                        {{ __('At IBE SOLUTIONS we offer the design and development service of equipment for any industrial sector and food grade. We have an extensive catalog of products, however, in our company we have the scope to make personalized designs based on the needs and expectations of our interested parties.') }}
                    </p>
                </div>
                <div class="part_two">
                    <img src="{{ url('images/IBE-Imagotipo_07.png') }}" alt="">
                </div>
            </div>
        </div> --}}
        {{-- Categoria --}}
        <div class="conteiner_categoria">
            {{-- Listado de maquinas --}}
            <div class="container_maquinas">
                <div class="int">
                    @foreach ($maquinas as $item)
                        <div class="box_maquina">
                            <div class="box_imagen_maquina">
                                @if ($item->id == 22)
                                    <img src="{{ url($item->image) }}" class="maquina_alta" alt="">
                                @else
                                    <img src="{{ url($item->image) }}" class="maquina" alt="">
                                @endif
                                <img src="{{ url($item->logo_servicio) }}" class="ser" alt="">
                            </div>
                            <h1 class="h1">{{ $item->name }}</h1>
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
                {{ $maquinas->links() }}
                <div class="content_banner_azul mb">
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
    </div>
@endsection

@extends('layouts.main')
@section('title', 'IBE - Contacto')
@section('boby', 'main_body')
@section('content')
    <div class="content_padre_contacto">
        <div class="banner">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">{{ __('Services') }}</h1>
                    <p class="text">
                        {{ __('We have a wide portfolio of equipment and services totally aimed at agribusiness and industry in general, integrating each of our specialties to achieve the benefit and productivity of the plant.') }}
                    </p>
                </div>
                <div class="part_two">
                    <img src="{{ url('images/logo_color_sin_fondo.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- Contacto --}}
        <div class="content_contacto">
            <img src="{{ url('images/contactanos_backgraund.jpg') }}" class="iamgen_fondo" alt="">
            <div class="opacidad">
                <div class="content_contacto">
                    <h1 class="h1">{{ __('Contact Us') }}</h1>
                    <p class="p">
                        {{ __('Thank you for visiting us, if you need to ask about any of our products or services, contact us through our telephone numbers, emails or social networks, we will respond immediately.') }}
                    </p>
                    <form action="{{ route('contact.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="box_input">
                            <div class="icon_input">
                                <img src="{{ url('images/user.png') }}" alt="">
                            </div>
                            <input type="text" placeholder="{{ __('Name') }}" name="name">
                        </div>
                        <div class="box_input mt-15">
                            <div class="icon_input">
                                <img src="{{ url('images/ping.png') }}" alt="">
                            </div>
                            <input type="text" placeholder="{{ __('Company') }}" name="company">
                        </div>
                        <div class="box_input mt-15">
                            <div class="icon_input">
                                <img src="{{ url('images/cel.png') }}" alt="">
                            </div>
                            <input type="tel" placeholder="{{ __('Phone') }}" name="phone">
                        </div>
                        <div class="box_input mt-15">
                            <div class="icon_input">
                                <img src="{{ url('images/cartita.png') }}" alt="">
                            </div>
                            <input type="email" placeholder="{{ __('Email') }}" name="email">
                        </div>
                        <div class="box_input mt-15">
                            <textarea name="message" id="" cols="30" rows="5" class="textarea"
                                placeholder="{{ __('Message') }}"></textarea>
                        </div>
                        <div class="content_button_footer_send">
                            <button type="submit">{{ __('Send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Galeria --}}
        {{-- <div class="content_galeria_contacto">
            <div class="box_galeria">
                <div class="h1">Galería</div>

                <div class="contente_banner_desplegables">
                    <div class="banner_desplegable" id="img_1" onclick="despliegaBanner(1)"
                        style="background-image: url({{ url('images/galeria/img_1.jpg') }})">
                        <div class="content_text_banner">
                            <h1 class="h1">Sistema eléctrico</h1>
                        </div>
                    </div>
                </div>

                <div class="contente_banner_desplegables">
                    <div class="banner_desplegable" id="img_2" onclick="despliegaBanner(2)"
                        style="background-image: url({{ url('images/galeria/img_2.jpg') }})">
                        <div class="content_text_banner">
                            <h1 class="h1">Sistema contra incendios</h1>
                        </div>
                    </div>
                </div>

                <div class="contente_banner_desplegables">
                    <div class="banner_desplegable" id="img_3" onclick="despliegaBanner(3)"
                        style="background-image: url({{ url('images/galeria/img_3.jpg') }})">
                        <div class="content_text_banner">
                            <h1 class="h1">Programación de componentes</h1>
                        </div>
                    </div>
                </div>

                <div class="contente_banner_desplegables">
                    <div class="banner_desplegable" id="img_4" onclick="despliegaBanner(4)"
                        style="background-image: url({{ url('images/galeria/img_4.jpg') }})">
                        <div class="content_text_banner">
                            <h1 class="h1">Instalación de maquinarias</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
    </div>
@endsection

@section('scripts')
    <script>
        const despliegaBanner = (id) => {
            var banner = document.getElementById('img_' + id)
            var onclick = banner.getAttribute("onclick");
            if (typeof(onclick) != "function") {
                banner.setAttribute('onclick', 'plegarBanner(' + id + ');');
            }
            banner.classList.add('active')
        }

        const plegarBanner = (id) => {
            var banner = document.getElementById('img_' + id)
            var onclick = banner.getAttribute("onclick");
            if (typeof(onclick) != "function") {
                banner.setAttribute('onclick', 'despliegaBanner(' + id + ');');
            }
            banner.classList.remove('active')
        }
    </script>
@endsection

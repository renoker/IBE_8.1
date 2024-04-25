@extends('layouts.main')
@section('title', 'IBE - Contacto')
@section('boby', 'main_body')
@section('content')
    <div class="content_padre_contacto">
        <div class="banner">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">Servicios</h1>
                    <p class="text">Contamos con una amlplia cartera de equipos y servicos totalmente dirigidos a la
                        agroindustria e industria en general, integrando cada una de nuestras especialidades para así lograr
                        el beneficio y productividad de la planta.</p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/logo_border.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- Contacto --}}
        <div class="content_contacto">
            <img src="{{ url('images/back_contacto.jpg') }}" class="iamgen_fondo" alt="">
            <div class="opacidad">
                <div class="content_contacto">
                    <h1 class="h1">Contáctanos</h1>
                    <p class="p">Gracias por visitarnos, si requieres preguntar por alguno de nuestros productos o
                        servicios contáctanos por medio de nuestros números telefónicos, correos o redes sociales, te
                        responderemos de inmediato.</p>
                    <form action="{{ route('contact.store') }}" method="post">
                        @method('POST')
                        @csrf
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
        {{-- Galeria --}}
        <div class="content_galeria_contacto">
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
        </div>
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

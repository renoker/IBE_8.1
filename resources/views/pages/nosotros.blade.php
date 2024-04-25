@extends('layouts.main')
@section('title', 'IBE - Nosotros')

@section('content')
    <div class="conten_padre">
        <div class="banner_general">
            <img src="{{ url('images/nosotros.jpg') }}" class="img_banner" alt="">
            <div class="content_inter_banner">
                <div class="part_one">
                    <h1 class="encabezado">{{ __('Us') }}</h1>
                    <p class="text">{!! htmlspecialchars_decode(
                        __(
                            'Integra IBE group which has been directed for more than 47 years, headed by Engineer <span>Jorge Islas Bustamante M.</span> Mexican company dedicated to the design, manufacturing, maintenance, marketing of equipment for food processes, automation, low and medium voltage electrical installation, equipment manufacturing , control panels, turnkey projects.',
                        ),
                    ) !!}</p>
                </div>
                <div class="part_two">
                    <img src="{{ url('icons/Sello.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- Nuestros Valores --}}
        <div class="box_general">
            <h1 class="h1">{{ __('Our Values') }}</h1>
            <div class="box_cuadros">
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_1.png') }}" alt="">
                        <p class="info">{{ __('Meeting your expectations and more, always on the first try!') }}</p>
                    </div>
                </div>
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_2.png') }}" alt="">
                        <p class="info">{{ __('Always be persistent until achieving the goal') }}</p>
                    </div>
                </div>
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_3.png') }}" alt="">
                        <p class="info">{{ __('Working shoulder to shoulder') }}</p>
                    </div>
                </div>
                <div class="cuadro">
                    <div class="int">
                        <img src="{{ url('icons/nosotros_icon_4.png') }}" alt="">
                        <p class="info">
                            {{ __('Awareness of the importance of goals and expectations of our stakeholders') }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Nuestros Valores --}}
        <div class="box_general">
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
    {{-- Imagenes --}}
    <div class="box_imagenes">
        <div class="content_imagen_zoom">
            <img src="{{ url('images/soldador.png') }}" class="zoom" alt="">
        </div>
        <div class="content_imagen_zoom">
            <img src="{{ url('images/maquina.png') }}" class="zoom" alt="">
        </div>
        <div class="content_imagen_zoom">
            <img src="{{ url('images/hombre.png') }}" class="zoom" alt="">
        </div>
        <div class="content_imagen_zoom">
            <img src="{{ url('images/trabajando.png') }}" class="zoom" alt="">
        </div>
    </div>
    {{-- Certificaciones slider --}}
    <div class="box_certificaciones_slider">
        <section class="splide" id="certificaciones_cuentas" aria-label="Certificaciones">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="box_cuentas">
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_1.jpg') }}" class="img" alt="">
                                <p class="txt_s">
                                    {{ __('Advanced Product Quality Planning (Advanced Product Quality Plan) consists of the framework of techniques used for the successful and efficient development of products in the industry, promoting customer satisfaction by focusing on the delivery of contracted products or services. , with quality and on time.') }}
                                </p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_2.jpg') }}" class="img" alt="">
                                <p class="txt_s">
                                    {{ __('We know and apply Swiss techniques for the stainless steel finishing process.') }}
                                </p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_3.jpg') }}" class="img" alt="">
                                <p class="txt_s">
                                    {{ __('At IBE, the BPM discipline is practiced, which focuses on improving business performance results based on design, model, execution, automation, measurement, control and optimization of our processes.') }}
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="box_cuentas">
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_4.png') }}" class="img_1" alt="">
                                <p class="txt_s">{{ __('Knowledge of doubles techniques for special steels.') }}</p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_5.png') }}" class="img" alt="">
                                <p class="txt_s">
                                    {{ __('We have trained personnel to implement internal audits to ensure that each of our applied processes meet their quality standards.') }}
                                </p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_6.png') }}" alt="">
                                <p class="txt_s">
                                    {{ __('Specialists in the operation of high-precision laser cutting machinery to ensure the integrity and accuracy of each of our cutting processes.') }}
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="box_cuentas_slider">
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_7.png') }}" class="img" alt="">
                                <p class="txt_s">
                                    {{ __('Trained to make designs taking into account the importance of ergonomics in the workplace.') }}
                                </p>
                            </div>
                            <div class="cuenta">
                                <img src="{{ url('images/cuenta_8.png') }}" class="img" alt="">
                                <p class="txt_s">
                                    {{ __('At IBE we are trained in food safety to meet all the needs and expectations of the agro-industrial and food sectors.') }}
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    {{-- Contacto --}}
    <div class="content_contacto">
        <img src="{{ url('images/back_contacto.jpg') }}" class="iamgen_fondo" alt="">
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
                            <img src="{{ url('icons/user.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="{{ __('Name') }}" name="name">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/ping.png') }}" alt="">
                        </div>
                        <input type="text" placeholder="{{ __('Company') }}" name="company">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cel.png') }}" alt="">
                        </div>
                        <input type="tel" placeholder="{{ __('Phone') }}" name="phone">
                    </div>
                    <div class="box_input mt-15">
                        <div class="icon_input">
                            <img src="{{ url('icons/cartita.png') }}" alt="">
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
@endsection

@section('scripts')
    @vite('resources/js/nosotros.js')
@endsection

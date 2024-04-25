@extends('layouts.main')
@section('title', 'IBE - Servicios')
@section('boby', 'main_body')
@section('content')
    <div class="content_padre_servicios">
        {{-- Slider --}}
        <div class="content_servicios_slider_top">
            <div class="content_inter_banner">
                <div class="part_one">
                    <section class="splide" id="principal" aria-label="">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="n">
                                        <img src="{{ url('images/icon_home_iqnet.png') }}" class="logo" alt="">
                                        <div class="bx">
                                            <h1 class="encabezado">{{ __('Machinery manufacturing') }}</h1>
                                            <p class="text">
                                                {{ __('Manufacture of specialized machinery in the agro-industrial sector, food grade integrating each of our specialties, always taking care of compliance with the best quality, safety, ergonomics and easy assembly.') }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="n">
                                        <img src="{{ url('images/icon_home_iqnet.png') }}" class="logo" alt="">
                                        <div class="bx">
                                            <h1 class="encabezado">{{ __('Manufacture of parts in series') }}</h1>
                                            <p class="text">
                                                {{ __('We produce serial parts made with high precision laser cutting in steel and aluminum.') }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="n">
                                        <img src="{{ url('images/icon_home_iqnet.png') }}" class="logo" alt="">
                                        <div class="bx">
                                            <h1 class="encabezado">{{ __('Online designs') }}</h1>
                                            <p class="text">
                                                {{ __('Line machinery, designed under the highest quality standards, compliance with safety standards, ergonomics, especially with an approach based on greater productivity and use of each process.') }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="n">
                                        <img src="{{ url('images/icon_home_iqnet.png') }}" class="logo" alt="">
                                        <div class="bx">
                                            <h1 class="encabezado">{{ __('Custom designs') }}</h1>
                                            <p class="text">
                                                {{ __("Development of specific personalized designs based on the fulfillment of our clients' objectives, under compliance with the same quality standards.") }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="n">
                                        <img src="{{ url('images/icon_home_iqnet.png') }}" class="logo" alt="">
                                        <div class="bx">
                                            <h1 class="encabezado">{{ __('Control boards') }}</h1>
                                            <p class="text">
                                                {{ __('Manufacture, supply and installation of control panels or motor centers, mainly used to control and monitor the different parameters of the motor-generator in addition to controlling its operation, thereby being able to integrate each of the compositions of the line and with achieve the greatest effectiveness in each of its stages.') }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="n">
                                        <img src="{{ url('images/icon_home_iqnet.png') }}" class="logo" alt="">
                                        <div class="bx">
                                            <h1 class="encabezado">{{ __('Industrial automation') }}</h1>
                                            <p class="text">
                                                {{ __('Industrial automation allows greater precision and repeatability in tasks. This is because machines are able to perform tasks more quickly and efficiently, which Thanks to automation, companies can monitor and control all the parameters of their production processes, allowing them to detect and solve problems more easily.') }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="n">
                                        <img src="{{ url('images/icon_home_iqnet.png') }}" class="logo" alt="">
                                        <div class="bx">
                                            <h1 class="encabezado">Refurbish</h1>
                                            <p class="text">
                                                {!! htmlspecialchars_decode(
                                                    __(
                                                        'Refurbishment of national and international equipment, incorporating each of our specialties: <br> Structural<br>Mechanical<br>Electrical<br>Automation and Control<br>Preventive and corrective malajemente service',
                                                    ),
                                                ) !!}
                                            </p>
                                        </div>
                                    </div>
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
        {{-- Envabezado y Logo --}}
        <div class="encabe">
            <img src="{{ url('images/logo_servicios.png') }}" class="logo_serv" alt="">
            <h1 class="h1_encabezado">{!! htmlspecialchars_decode(__('Electrical <br> services')) !!}</h1>
        </div>
        {{-- Bloques informativos --}}
        <div class="contenedor_background_servicios">
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/1.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Medium voltage electrical installation') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'These have a voltage between 1 to 36 Kv. Which circulates through the distribution lines and leads to the electrical transformation centers. This type of electrical installation is characterized by allowing electrical energy to be transformed into low voltage for consumption by the end user.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/2.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Pre-assembled substations') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'We manufacture pre-assembled E-house class 12.25 and 34.5 KV substations. They are ideal for use in situations where temporary solutions are needed or in hard-to-reach places.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/3.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Installation of electrical substations') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Installation of 15.25 and 34.5 KV fixed substations intended to establish the appropriate voltage levels to produce, convert, regulate and distribute electrical energy.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/4.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Low voltage electrical installation') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Low voltage industrial electrical installations carried out with strict adherence to the NOM –SEDE-001 2012 low voltage standard, power circuits, lighting and contacts, lightning rod installations and physical grounds, etc.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/5.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('CCM boards') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Manufacturing and integration of CCM boards (motor control centers), troubleshooting, explosion proof boards, Manufacture of NEMA 4R stainless steel panels.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/6.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Capacitor banks') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __('Design and manufacture of capacitor banks for electrical systems for low power factor correction.'),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/7.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Harmonic filters') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Installation of passive and active harmonic filters, these correct the deformations produced in the current or voltage wave as a consequence of the presence of non-linear loads, that is, loads that contain rectifiers such as inverters, variable speed drives, induction furnaces , etc.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/8.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Emergency plants') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Supply and installation of emergency plants of up to 3,250 kW, the most reliable solution in the event of possible power outages, since they reactivate the system in a matter of seconds and prevent the servers from turning off.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/9.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Fire protection system') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Installation of fire-fighting pipes and accessories: measures and safety plan that any building must have to know how to act and minimize the effects of fire in the event that there is a fire in the area.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/10.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Installation of pneumatic systems') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Installation of compressor room, lung and dryer: Ideal for distributing compressed air to tools, assembly machinery, cleaning systems, and more.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/11.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('Atmospheric protection system') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'Atmospheric protection system: it is a complete and integral installation designed to reduce lightning damage due to direct and indirect impacts on the facilities to be protected.',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/11.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('CCTV surveillance systems') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(__('Supply and installation of video surveillance equipment.')) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="espaciador"></div>
            <div class="box_parallax">
                <div class="box">
                    <img src="{{ url('images/servicios/12.png') }}" alt="">
                    <div>
                        <h1 class="h1">{{ __('NETWORK CODE Compliance') }}</h1>
                        <p class="parrafo pb">
                            {!! htmlspecialchars_decode(
                                __(
                                    'With the new energy reform, a new regulation issued by the energy regulatory commission appeared. The network code considers efficiency, quality, reliability, safety and sustainability, which commits the Medium and high consumption centers are required to comply with the standards in proportion to their equipment and facilities. <span>¡We help you achieve it!</span>',
                                ),
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="encabe">
            <h1 class="h1_encabezado">{{ __('We have the following services to fulfill it') }}</h1>
        </div>
        <div class="contenedor_background_servicios">
            <div class="box_parallax">
                <div class="box">
                    <section class="splide" id="servicios_cumplidos" aria-label="Certificaciones">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(
                                            __(
                                                '• Quality study: Which allows identifying power quality problems, such as voltage drops, harmonics, surges and fluctuations',
                                            ),
                                        ) !!}
                                    </p>
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(
                                            __(
                                                '• Updating or creating a single-line diagram: It is the plan that allows us to become completely familiar with the design and layout of the electrical distribution system in your facilities.',
                                            ),
                                        ) !!}
                                    </p>
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(
                                            __(
                                                '• Calculation of short circuit in substation and derivatives: based on the calculation or determination of the magnitudes of the fault currents and the contributions of each of the elements to this fault.',
                                            ),
                                        ) !!}
                                    </p>
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(
                                            __(
                                                '• Correction or installation of protection systems against atmospheric discharges: provides protection to a structure against physical damage and injuries to living beings due to touch voltages and step voltages.',
                                            ),
                                        ) !!}
                                    </p>
                                </li>
                                <li class="splide__slide">
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(
                                            __('• Harmonic distortion review, physical ground studies: It is a way to measure the quality of the power supply'),
                                        ) !!}
                                    </p>
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(
                                            __(
                                                '• Manufacture and installation of capacitor banks with or without harmonic filters: <br> Your best alternative to save electrical energy! <br> Its benefits are: <br> <br>Power factor compensation <br> Energy savings and loss reduction <br> Increased load capacity <br> Improved voltage stability <br> Reduction of penalties for low power factor.',
                                            ),
                                        ) !!}
                                    </p>
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(__('')) !!}
                                    </p>
                                    <p class="parrafo_s pb">
                                        {!! htmlspecialchars_decode(__('')) !!}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="espaciador"></div>

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

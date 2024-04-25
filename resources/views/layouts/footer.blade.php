<footer>
    <div class="part_one">
        <div class="footer-top">
            <div class="part-left">
                <div class="box_info_footer">
                    <div class="left">
                        <img src="{{ url('icons/IBE-Logotipo_06.png') }}" alt="" class="logo_footer">
                        <h6 class="h6_logo">Integral Solutions</h6>
                        <p class="p_logo">
                            {!! htmlspecialchars_decode(__('Productive Processes <br> Agroindustrial')) !!}
                        </p>

                        <p class="info_left_footer">
                            {!! htmlspecialchars_decode(
                                __(
                                    'It is a pleasure for us to be at your service and present <br> the full range of services and products available from IntegraIBE.',
                                ),
                            ) !!}
                        </p>
                    </div>
                    <div class="right">
                        <div class="item">
                            <img src="{{ url('icons/tel.png') }}" class="icon" alt="">
                            <div class="list">
                                <p>452-524-6479</p>
                                <p>452-340-5913</p>
                                <p>452-182-0611 </p>
                            </div>
                        </div>
                        <div class="item-email">
                            <img src="{{ url('icons/email.png') }}" class="icon" alt="">
                            <div class="list">
                                <p>ventasonline.ibe@gmail.com</p>
                                <p>ventasonlineibe@integraibe.com.mx</p>
                            </div>
                        </div>
                        <div class="item-home">
                            <img src="{{ url('icons/email.png') }}" class="icon" alt="">
                            <div class="list">
                                <p>Héroes de Nacozari #1 <br>
                                    Col. Eduardo Ruiz <br>
                                    C.P.60130, Uruapan <br>
                                    Michoacán</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parte-right">
                <div class="box">
                    <h5 class="encabezado">{!! htmlspecialchars_decode(__('Contact Us')) !!}</h5>
                    <p class="p">{!! htmlspecialchars_decode(
                        __(
                            'At IBE Solutions, we want to be a key partner in the development of your company. Please share your contact information with us.',
                        ),
                    ) !!}</p>
                    <form action="" method="post">
                        <div class="box_input">
                            <div class="icon_input">
                                <img src="{{ url('icons/user.png') }}" alt="">
                            </div>
                            <input type="text" placeholder="{!! htmlspecialchars_decode(__('Company')) !!}">
                        </div>
                        <div class="box_input mt-15">
                            <div class="icon_input">
                                <img src="{{ url('icons/cartita.png') }}" alt="">
                            </div>
                            <input type="text" placeholder="{!! htmlspecialchars_decode(__('Email')) !!}">
                        </div>
                        <div class="content_button_footer_send">
                            <button type="submit">{{ __('Send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="part_two">
        <div class="footer-bottom">
            <ul>
                <li>
                    <a href="{{ route('nosotros.index') }}" class="menu">
                        {{ __('Us') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('turnkey.index') }}" class="menu">
                        {{ __('Turnkey') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('directory.index') }}" class="menu">
                        {{ __('Catalogue') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('contacto.index') }}" class="menu">
                        {{ __('Contact') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('servicios.index') }}" class="menu">
                        {{ __('Services') }}
                    </a>
                </li>
                <li>
                    <a href="" class="menu">
                        {{ __('Privacy Policy') }}
                    </a>
                </li>
            </ul>
            <div class="redes_all">
                <div class="redes">
                    <a href="">
                        <img src="{{ url('icons/Linkedin.png') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ url('icons/Instagram.png') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ url('icons/Behance.png') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ url('icons/Tiktok.png') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ url('icons/Youtube.png') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ url('icons/Facebook.png') }}" alt="">
                    </a>
                </div>
                <div class="derechos">
                    <p class="dre">© 2023, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

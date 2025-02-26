<header class="header">
    <div class="header_box">
        <ul class="ul">
            <li class="@if (Route::currentRouteName() == 'nosotros.index') active @endif">
                <a href="{{ route('nosotros.index') }}" class="menu">
                    {{ __('Us') }}
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'turnkey.index') active @endif">
                <a href="{{ route('turnkey.index') }}" class="menu">
                    {{ __('Turnkey') }}
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'directory.index') active @endif">
                <a href="{{ route('directory.index') }}" class="menu">
                    {{ __('Catalogue') }}
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'servicios.index') active @endif">
                <a href="{{ route('servicios.index') }}" class="menu">
                    {{ __('Services') }}
                </a>
            </li>
            <li>
                <a href="{{ route('home.index') }}">
                    <div class="logo"></div>
                </a>
            </li>

            <li class="@if (Route::currentRouteName() == 'contacto.index') active @endif">
                <a href="{{ route('contacto.index') }}" class="menu">
                    {{ __('Contact') }}
                </a>
            </li>
            <li>
                <a href="{{ route('contacto.index') }}" class="menu">
                    Brouchure
                </a>
            </li>
            <li class="relative_li" id="btn_redes">
                <a class="menu">
                    Redes
                </a>
                <div class="cnt_redes" id="redes">
                    <ul class="ul">
                        <li class="red_social">
                            <a href="">LinkedIn</a>
                        </li>
                        <li class="red_social">
                            <a href="">Facebook</a>
                        </li>
                        <li class="red_social">
                            <a href="">Instagram</a>
                        </li>
                        <li class="red_social">
                            <a href="">X</a>
                        </li>
                        <li class="red_social">
                            <a href="">TikTok</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="idioma_header">
                    <a href="{{ route('set_language', ['es']) }}">
                        <img src="{{ url('images/mexico.png') }}" class="icon_flag" alt="">
                    </a>
                    <p class="txt_idioma">|</p>
                    <a href="{{ route('set_language', ['en']) }}">
                        <img src="{{ url('images/usa.png') }}" class="icon_flag" alt="">
                    </a>
                </div>
            </li>
        </ul>
    </div>
</header>


<header class="mobile">
    <div class="menu-icon" onclick="toggleMenu()">
        &#9776;
    </div>
    <nav id="mobile-menu" class="menu">
        <ul>
            <li>
                <a href="{{ route('home.index') }}">
                    <div class="logo"></div>
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'nosotros.index') active @endif">
                <a href="{{ route('nosotros.index') }}" class="menu_list">
                    {{ __('Us') }}
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'turnkey.index') active @endif">
                <a href="{{ route('turnkey.index') }}" class="menu_list">
                    {{ __('Turnkey') }}
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'directory.index') active @endif">
                <a href="{{ route('directory.index') }}" class="menu_list">
                    {{ __('Catalogue') }}
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'servicios.index') active @endif">
                <a href="{{ route('servicios.index') }}" class="menu_list">
                    {{ __('Services') }}
                </a>
            </li>
            <li class="@if (Route::currentRouteName() == 'contacto.index') active @endif">
                <a href="{{ route('contacto.index') }}" class="menu_list">
                    {{ __('Contact') }}
                </a>
            </li>
            <li>
                <a href="{{ route('contacto.index') }}" class="menu_list">
                    Brouchure
                </a>
            </li>
            <li class="relative_li" id="btn_redes">
                <a class="menu_list">
                    Redes
                </a>
                <div class="cnt_redes" id="redes">
                    <ul class="ul">
                        <li class="red_social">
                            <a href="">LinkedIn</a>
                        </li>
                        <li class="red_social">
                            <a href="">Facebook</a>
                        </li>
                        <li class="red_social">
                            <a href="">Instagram</a>
                        </li>
                        <li class="red_social">
                            <a href="">X</a>
                        </li>
                        <li class="red_social">
                            <a href="">TikTok</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="idioma_header">
                    <a href="{{ route('set_language', ['es']) }}">
                        <img src="{{ url('images/mexico.png') }}" class="icon_flag" alt="">
                    </a>
                    <p class="txt_idioma">|</p>
                    <a href="{{ route('set_language', ['en']) }}">
                        <img src="{{ url('images/usa.png') }}" class="icon_flag" alt="">
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</header>

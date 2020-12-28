
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left"><div>
                <ul class="uk-navbar-nav">
                    <li class=""><a href="{{ url('/shop') }}">Магазины</a></li>
                    <li class=""><a href="{{ url('/catalog') }}">Продукция</a></li>
                </ul>
            </div></div>
        {{--        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">Gridnev</a>--}}
        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}"><img src="/img/logo_g_small.png" alt=""></a>
        <div class="uk-navbar-center-right"><div>
                <ul class="uk-navbar-nav">
                    <li><a href="{{ url('/blog') }}">Блог</a></li>
                    <li><a href="{{ url('/contacts') }}">Контакты</a></li>

                    {{--                    @if(Auth::check())--}}
                    {{--                        <li>--}}
                    {{--                            <a href="#"><span class="uk-margin-small-right" uk-icon="settings"></span></a>--}}
                    {{--                            <div class="uk-navbar-dropdown">--}}
                    {{--                                <ul class="uk-nav uk-navbar-dropdown-nav">--}}
                    {{--                                    <li><a href="{{ url('/admin') }}"><span class="uk-margin-small-right" uk-icon="cog"></span> Админка</a></li>--}}
                    {{--                                    <li class="uk-nav-divider"></li>--}}
                    {{--                                    <li><a href="{{ route('profile') }}"> <span class="uk-margin-small-right" uk-icon="user"></span>Профиль</a></li>--}}
                    {{--                                    <li class="uk-nav-divider"></li>--}}
                    {{--                                    <li><a href="/logout"> <span class="uk-margin-small-right" uk-icon="sign-out"></span> Выйти </a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </li>--}}

                    {{--                    @else--}}
                    {{--                        <li>--}}
                    {{--                            <a href="#"><span class="uk-margin-small-right" uk-icon="cog"></span></a>--}}
                    {{--                            <div class="uk-navbar-dropdown">--}}
                    {{--                                <ul class="uk-nav uk-navbar-dropdown-nav ">--}}
                    {{--                                    <li><a href="{{ url('/login') }}"><span class="uk-icon-button uk-margin-small-right" uk-icon="sign-in"></span> Войти</a></li>--}}
                    {{--                                    <li class="uk-nav-divider"></li>--}}
                    {{--                                    <li><a href="{{ url('/register') }}"><span class="uk-icon-button uk-margin-small-right" uk-icon="link"></span> Регистрация</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </li>--}}


                    {{--                    @endif--}}


                </ul>
            </div>
        </div>

    </div>
</nav>

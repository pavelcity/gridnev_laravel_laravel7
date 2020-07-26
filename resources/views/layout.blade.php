<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/uikit_for_site.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>


<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left"><div>
                <ul class="uk-navbar-nav">
                    <li class=""><a href="{{ url('/shop') }}">Магазины</a></li>
                    <li class=""><a href="{{ url('/catalog') }}">Продукция</a></li>
                </ul>
            </div></div>
        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">Gridnev</a>
        <div class="uk-navbar-center-right"><div>
                <ul class="uk-navbar-nav">
                    <li><a href="{{ url('/blog') }}">Блог</a></li>
                    <li><a href="{{ url('/contacts') }}">Контакты</a></li>

                    @if(Auth::check())
                        <li><a href="{{ url('/admin') }}">админка</a></li>
                        <li><a href="/logout">выйти</a></li>
                    @else
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                        <li><a href="{{ url('/login') }}">Войти</a></li>
                    @endif


                </ul>
            </div>
        </div>

    </div>
</nav>




@yield('content')





<script src="/js/uikit_for_site.js"></script>
<script src="/js/my.js"></script>

</body>
</html>

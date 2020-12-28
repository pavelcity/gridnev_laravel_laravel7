<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gridnev</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.min.css" integrity="sha256-0JL+BtqmDiiObLBSZrxHKfxsydEXGb/4pXrWql05dto=" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/uikit.min.css">
    <link rel="stylesheet" href="/css/adminstyle.css">
</head>
<body>





<nav class="uk-navbar-container" uk-navbar>

    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li> <a href="{{ url('/') }}" class=""><span style="margin-right: 10px;" uk-icon="icon: world"></span> Перейти на сайт</a></li>
        </ul>
    </div>

    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav" style="margin-right: 20px;">
            <li><a href="{{ url('/logout') }}">Выйти <span style="margin-left: 10px;" uk-icon="icon: sign-out"></span> </a> </li>
        </ul>
    </div>

</nav>





<div class="uk-container uk-container-expand">
    @yield('content')
</div>





<script src="/js/admin.js"></script>
<script src="/plugins/ckeditor/ckeditor.js"></script>
<script src="/plugins/ckfinder/ckfinder.js"></script>
<script src="/js/adminscripts.js"></script>

</body>
</html>



<ul class="uk-list uk-list-divider">
    <li><a href="{{ url('/admin') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('admin.index') ? 'uk-button-primary' : 'uk-button-default' }}">Главная</a></li>
{{--    <li><a href="{{ route('subscribers.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('subscribers.index') ? 'uk-button-primary' : 'uk-button-default' }}">Подписчики</a></li>--}}
    <li><a href="{{ route('categories.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('categories.index') ? 'uk-button-primary' : 'uk-button-default' }}">Категории</a></li>
    <li><a href="{{ route('tags.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('tags.index') ? 'uk-button-primary' : 'uk-button-default' }}">Теги</a></li>
{{--    <li><a href="{{ route('users.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('users.index') ? 'uk-button-primary' : 'uk-button-default' }}">Пользователи</a></li>--}}
    <li><a href="{{ route('catalog.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('catalog.index') ? 'uk-button-primary' : 'uk-button-default' }}">Каталог</a></li>
{{--    <li><a href="{{ route('admin.comments') }}" class="uk-width-1-1  uk-button-link">--}}
{{--            Комментарии--}}
{{--            <span class="uk-badge" uk-tooltip="на модерации">--}}
{{--                {{ $newCommentsCount }}--}}
{{--            </span>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <hr>--}}
    <li><a href="{{ route('blog.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('blog.index') ? 'uk-button-primary' : 'uk-button-default' }}">Блог</a></li>
    <li><a href="{{ route('shop.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('shop.index') ? 'uk-button-primary' : 'uk-button-default' }}">Фирменные Магазины</a></li>
    <li><a href="{{ route('contacts.index') }}" class="uk-width-1-1 uk-button-small uk-button {{ request()->routeIs('contacts.index') ? 'uk-button-primary' : 'uk-button-default' }}">Контакты</a></li>
</ul>



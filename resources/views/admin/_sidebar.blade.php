

<ul class="uk-list uk-list-divider">
    <li><a href="{{ url('/admin') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-primary">Главная</a></li>
    <li><a href="{{ route('subscribers.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Подписчики</a></li>
    <li><a href="{{ route('categories.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Категории</a></li>
    <li><a href="{{ route('tags.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Теги</a></li>
    <li><a href="{{ route('users.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Пользователи</a></li>
    <li><a href="{{ route('catalog.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Каталог</a></li>
    <li><a href="{{ route('admin.comments') }}" class="uk-width-1-1  uk-button-link">
            Комментарии
            <span class="uk-badge" uk-tooltip="на модерации">
                {{ $newCommentsCount }}
            </span>
        </a>
    </li>
    <hr>
    <li><a href="{{ route('blog.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Блог</a></li>
</ul>



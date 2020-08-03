
<div class="left_sidebar">

{{--    <h3 class="uk-heading-divider">Теги</h3>--}}
{{--    <ul class="uk-list uk-list-hyphen uk-list-primary uk-list-divider ">--}}

{{--        @foreach($tags as $tag)--}}
{{--            <li>--}}
{{--                <a href="{{ route('catalog.tags', $tag->slug) }}" class="uk-button uk-button-text">--}}
{{--                    {{ $tag->title }} ---}}
{{--                    ({{ $tag->catalog()->count() }})--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}











    <h3 class="uk-heading-divider">Категории</h3>
    <ul class="uk-list uk-list-divider">
        @foreach($categories as $category)
            <li>
                <a href="{{ route('catalog.tags', $category->slug) }}"
                   class="uk-link-reset uk-button-text countCategory">
                    <div class="category">{{ $category->title }} </div>
                    <div class="numbers">{{ $category->catalog()->count() }}</div>
                </a></li>
        @endforeach
    </ul>


    <h3 class="uk-heading-divider">Популярное</h3>

    @foreach($populars as $catalog)
    <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-margin-top">

            <a href="{{ route('catalog.detail', $catalog->slug) }}" class="uk-link-reset">
                <div class="uk-card-media-top">
                    <img src="{{ $catalog->getImage() }}" alt="">
                </div>
                <div class="uk-card-body uk-card-small">
                    <p> {{ $catalog->title }}</p>
                </div>
            </a>
    </div>
    @endforeach



    <h3 class="uk-heading-divider">Новые</h3>
    @foreach($recents as $catalog)
    <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-margin-top">
        <a href="{{ route('catalog.detail', $catalog->slug) }}" class="uk-link-reset">
            <div class="uk-card-media-top">
            </div>
            <div class="uk-card-body uk-card-small">
                <p> {{ $catalog->title }}</p>
            </div>
        </a>
    </div>
    @endforeach


    <h3 class="uk-heading-divider">Подписаться на рассылку</h3>
    @include('admin.errors')
    @if(session('sendmail'))
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session('sendmail') }}</p>
        </div>
    @endif
    <form method="post" action="{{ route('subscribe') }}">

        @csrf

        <fieldset class="uk-fieldset">
            <div class="uk-margin">
                <input class="uk-input" type="text" name="email" placeholder="e-mail">
            </div>
            <div class="uk-margin">
                <button type="submit" class="uk-button uk-button-primary uk-button-small">Подписаться</button>
            </div>
        </fieldset>
    </form>




</div>





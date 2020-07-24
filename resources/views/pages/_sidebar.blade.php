<h3 class="uk-heading-divider">Теги</h3>
<div class="left_sidebar">

    <ul class="uk-list uk-list-hyphen uk-list-primary uk-list-divider ">

        @foreach($tags as $tag)
            <li><a href="{{ route('catalog.tags', $tag->slug) }}" class="uk-button uk-button-text">{{ $tag->title }}</a></li>
        @endforeach
    </ul>

</div>

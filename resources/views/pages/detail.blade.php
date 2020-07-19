@extends('layout')

@section('content')
    <div class="uk-container">
        <article class="uk-article">

            <h1 class="uk-article-title">{{ $catalog->title }}</h1>

            <p class="uk-article-meta">Автор <a href="#">Super User</a> {{ $catalog->getDate() }} <br>
                теги |
                @foreach($catalog->tags as $tag)
                    <a href="#">{{ $tag->title }}</a>
                @endforeach
            </p>

            <p><div class="uk-label">{{ $catalog->category->title }}</div></p>
            <img src="{{ $catalog->getImage() }}" alt="">


            <p>{!! $catalog->big_text  !!} </p>

            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                <div>
                    <a class="uk-button uk-button-text" href="#">Следующая </a>
                </div>
                <div>
                    <a class="uk-button uk-button-text" href="#">Предыдущая </a>
                </div>
            </div>

            <div class="uk-margin">
                <a href="{{ url('/') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>
            </div>

        </article>
    </div>




    <br>
    <br>
    <br>
    <br>

    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-text-center" uk-grid>

            <div>
                @if($catalog->hasPrevTovar())
                    <a href="{{ route('catalog.detail', $catalog->getPrevTovar()->slug) }}" class="uk-card uk-card-default uk-card-body">
                        <span uk-icon="icon: chevron-left"></span>
                        {{ $catalog->getPrevTovar->title }}
                    </a>
                @endif
            </div>

            <div>
                <a href="#" class="uk-card uk-card-default uk-card-body">
                    Item <span uk-icon="icon: chevron-right"></span>
                </a>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
@endsection

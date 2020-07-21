@extends('layout')

@section('content')
    <div class="uk-container">
        <article class="uk-article">

            <h1 class="uk-article-title">{{ $catalog->title }}</h1>



            <p><div class="uk-label">{{ $catalog->category->title }}</div></p>


            <div uk-grid>
                <div class="uk-width-1-2@l uk-width-1-3@m uk-width-1-1@s uk-width-1-1">
                    <img class="catalogPicDetail" src="{{ $catalog->getImage() }}" alt="">
                </div>
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s uk-width-1-1">
                    <p class="uk-article-meta">Автор <a href="#">вкусный хлеб</a> {{ $catalog->getDate() }} <br>
                        теги |
                        @foreach($catalog->tags as $tag)
                            <a href="{{ route('catalog.tags', $tag->slug) }}">{{ $tag->title }}</a>
                        @endforeach
                    </p>
                    <p>{!! $catalog->big_text  !!} </p>
{{--                    <p>Срок годности <strong>{{ $catalog->srok_godnosti }}</strong></p>--}}
                </div>
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
                    <a href="{{ route('catalog.detail', $catalog->getPrevTovar()->slug) }}" class="uk-card uk-card-default uk-card-body uk-card-small uk-link-reset uk-button-text uk-card-hover prevnextlink">
                        <img src="{{ $catalog->getPrevTovar()->getImage() }}" alt="">
                       <div>
                           <span uk-icon="icon: chevron-left"></span>
                           {{ $catalog->getPrevTovar()->title }}
                       </div>
                    </a>
                @endif
            </div>

            @if($catalog->hasNextTovar())
                <div>
                    <a href="{{ route('catalog.detail', $catalog->getNextTovar()->slug) }}" class="uk-card uk-card-default uk-card-body uk-card-small uk-link-reset uk-card-hover uk-button-text prevnextlink">

                        <div>
                            {{ $catalog->getNextTovar()->title }}
                            <span uk-icon="icon: chevron-right"></span>
                        </div>

                        <img src="{{ $catalog->getNextTovar()->getImage() }}" alt="">
                    </a>
                </div>
            @endif

        </div>
    </div>



    <br>
    <br>
    <br>
    <br>


    <div class="uk-container">

        <div class="uk-child-width-1-5@l uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid-match" uk-grid>

            @foreach($catalog->related() as $item)
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-card-small">
                        <a href="{{ route('catalog.detail', $item->slug) }}" class="uk-link-reset">
                            <div class="uk-card-media-top">
                                <img style="width: 100%; max-width: 100%;" src="{{ $item->getImage() }}" alt="">
                            </div>
                            <div class="uk-card-body uk-card-small">
                                <div class="uk-visible@s uk-label">{{ $item->getCategoryTitle() }}</div>
                                <p> {{ $item->title }}</p>
                            </div>
                        </a>

                    </div>
                </div>
            @endforeach

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

@endsection

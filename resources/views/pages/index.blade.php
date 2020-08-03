@extends('layout')


@section('title')Грidnev - главная@endsection

@section('content')

    <div class="uk-container" style="margin-bottom: 30px;">
        @if(session('oksubs'))
            <div class="uk-alert-primary" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p>{{ session('oksubs') }}</p>
            </div>
        @endif
    </div>



    
    <div class="uk-container">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true">

            <ul class="uk-slider-items uk-grid">

                @foreach($catalogs as $catalog)
                    <li class="uk-width-3-4">
                        <div class="uk-panel">
                            <a href="{{ route('catalog.detail', $catalog->slug) }}"><img style="width: 100%"  src="{{ $catalog->getImage() }}" alt=""></a>
                            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                <h3 class="uk-margin-remove">{{ $catalog->title }}</h3>
                                <p class="uk-margin-remove">{{ $catalog->category->title }}</p>

<p>{{ $catalog->author->name ?? "автор не указан" }}</p>

                            </div>
                        </div>
                    </li>
                @endforeach


            </ul>

            <a style="background-color: #ccc; color:#777;" class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a style="background-color: #ccc; color:#777;" class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>




    <br>
    <br>
    <br>


    <div class="uk-container">


        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-1-5@l">
                @include('pages._sidebar')
            </div>




            <div class="uk-width-expand@m">

                    <h3 class="uk-heading-divider uk-text-center">Каталог продукции</h3>
                    <div class="uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid-match" uk-grid>

                        @foreach($catalogs as $catalog)
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover uk-card-small">
                                    <a href="{{ route('catalog.detail', $catalog->slug) }}" class="uk-link-reset">
                                        <div class="uk-card-media-top">
                                            <img src="{{ $catalog->getImage() }}" alt="">
                                        </div>
                                        <div class="uk-card-body uk-card-small">
                                            <div class="uk-visible@s uk-label">{{ $catalog->getCategoryTitle() }}</div>
                                            {{--                                <div class="uk-h4">{{ $catalog->category->title }}</div>--}}
                                            <p> {{ $catalog->title }}</p>

                                            {{--                            <p> {{ $catalog->getDate() }}</p>--}}
                                        </div>
                                    </a>

                                </div>
                            </div>
                        @endforeach

                    </div>

            </div>



        </div>








    </div>






    <div class="uk-container">
        <div class="wrap_paginate">

                {{ $catalogs->links() }}

        </div>
    </div>




@endsection





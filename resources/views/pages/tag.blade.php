@extends('layout')

@section('content')




    <div class="uk-container">

    <h4>отсортировано по тегу: <b>{{ $tag->title }}</b> </h4>



        <div class="uk-child-width-1-5@l uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid-match" uk-grid>

            @foreach($catalogs as $catalog)
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-card-small">
                        <a href="{{ route('catalog.detail', $catalog->slug) }}" class="uk-link-reset">
                            <div class="uk-card-media-top">
                                <img style="width: 100%; max-width: 100%;" src="{{ $catalog->getImage() }}" alt="">
                            </div>
                            <div class="uk-card-body uk-card-small">
                                <div class="uk-visible@s uk-label">{{ $catalog->getCategoryTitle() }}</div>
                                <p> {{ $catalog->title }}</p>
                            </div>
                        </a>

                    </div>
                </div>
            @endforeach

        </div>

    </div>


    <div class="uk-container">
        <div class="wrap_paginate">
            {{ $catalogs->links() }}
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

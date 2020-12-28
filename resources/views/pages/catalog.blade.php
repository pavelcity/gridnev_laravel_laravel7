@extends('layout')


@section('content')

    @include('pages.includes.insidemenu')



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





@extends('layout')


@section('content')

    @include('pages.includes.insidemenu')

    
    <div class="uk-container">
        <article class="uk-article" style="margin-bottom: 40px;">

            <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{ $blog->title }}</a></h1>

{{--            <img style="width:100%; max-width: 100%;" src="{{ $blog->showImage() }}" alt="">--}}
            <img data-src="{{ $blog->showImage() }}" uk-img>
            <p>{!! $blog->bigtxt !!}</p>

            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                <div>
                    <a class="uk-button uk-button-text" href="{{ route('blog.home') }}">Назад</a>
                </div>
            </div>

        </article>
    </div>
@endsection

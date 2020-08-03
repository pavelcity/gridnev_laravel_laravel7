@extends('layout')


@section('content')
    <div class="uk-container">
        <article class="uk-article">

            <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{ $blog->title }}</a></h1>


            <p>{!! $blog->full_txt !!}</p>

            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                <div>
                    <a class="uk-button uk-button-text" href="{{ route('blog.home') }}">Назад</a>
                </div>
                <div>
                    <a class="uk-button uk-button-text" href="#">5 Comments</a>
                </div>
            </div>

        </article>
    </div>
@endsection

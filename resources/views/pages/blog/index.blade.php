@extends('layout')

@section('content')


    <div class="uk-container">
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid="masonry: true; parallax: 150">

            @foreach($blogs as $blog)
            <div>
                <a href="{{ route('blog.detail', $blog->id) }}" class="uk-card uk-card-default uk-card-body uk-link-reset uk-card-hover uk-card-small">
                        <h3 class="uk-card-title">{{ $blog->title }}</h3>
                    <img style="max-width: 100%; width: 100%;" src="{{ $blog->showImage() }}" alt="">
                    <p>{!! $blog->short_txt !!}</p>
                </a>
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

@endsection

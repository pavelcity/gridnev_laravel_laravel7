@extends('layout')

@section('content')


    <div class="uk-container">
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>

            @foreach($blogs as $blog)
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <a href="{{ route('blog.detail', $blog->id) }}"><h3 class="uk-card-title">{{ $blog->title }}</h3></a>
                    <p>{!! $blog->short_txt !!}</p>
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

@endsection

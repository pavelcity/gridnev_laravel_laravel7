@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                <ul class="uk-list">
                    <li><a href="{{ url('/admin') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Главная</a></li>
                    <li><a href="{{ route('categories.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Категории</a></li>
                    <li><a href="{{ route('tags.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-primary">Теги</a></li>
                    <li><a href="{{ route('users.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Пользователи</a></li>
                </ul>
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Изменить тег</div>
            <a href="{{ route('tags.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
                {!! Form::open([
                        'route' => ['tags.update', $tag->id],
                        'method'=>'put',
                        'files' => true
                        ]) !!}

                <div class="uk-margin">
                    <input class="uk-input" name="title" type="text" placeholder="тег" value="{{ $tag->title }}">
                </div>

                <div class="uk-margin">
                    <img style="width: 300px;" src="{{ $tag->showPic() }}" alt="">
                </div>

                <div class="uk-margin">
                    <div uk-form-custom>
                        <input type="file" name="pic">
                        <button class="uk-button uk-button-primary uk-button-small"  type="button" tabindex="-1">картинка</button>
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default">сохранить</button>
                </div>
            </fieldset>
            {!! Form::close() !!}


        </div>



    </div>
@endsection

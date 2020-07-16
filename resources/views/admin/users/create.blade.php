@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                <ul class="uk-list">
                    <li><a href="{{ url('/admin') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Главная</a></li>
                    <li><a href="{{ route('categories.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Категории</a></li>
                    <li><a href="{{ route('tags.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Теги</a></li>
                    <li><a href="{{ route('users.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-primary">Пользователи</a></li>
                </ul>
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Создать пользователя</div>
            <a href="{{ route('users.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
                {!! Form::open(['route' => ['users.store'], 'files' => 'true']) !!}

                <div class="uk-margin">
                    <label class="uk-form-label" for="name">Имя</label>
                    <input class="uk-input" id="name" name="name" type="text" placeholder="Имя пользователя" value="{{ old('name') }}">
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="email">почта</label>
                    <input class="uk-input" id="email" name="email" type="text" placeholder="email" value="{{ old('email') }}">
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="password">пароль</label>
                    <input class="uk-input" id="password" name="password" type="password" placeholder="пароль">
                </div>

{{--                <div class="uk-margin">--}}
{{--                    <img style="width: 200px;" src="https://images.unsplash.com/photo-1594711342630-e60dd74fb66f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" alt="">--}}
{{--                </div>--}}

                <div class="uk-margin">
                    <span class="uk-text-middle">аватар</span>
                    <div uk-form-custom>
                        <input type="file" name="avatar">
                        <span class="uk-link">загрузить</span>
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default">создать</button>
                </div>
            </fieldset>
            {!! Form::close() !!}


        </div>



    </div>
@endsection

@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                <ul class="uk-list">
                    <li><a href="{{ url('/admin') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-primary">Главная</a></li>
                    <li><a href="{{ route('categories.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Категории</a></li>
                    <li><a href="{{ route('tags.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Теги</a></li>
                    <li><a href="{{ route('users.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Пользователи</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-width-expand@m uk-padding">

            <img style="width: 300px;" src="http://gridnevhleb.ru/img/010_1440_2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis est excepturi facilis harum impedit molestiae molestias nam, nesciunt pariatur provident quas quisquam quo quod sapiente similique ut voluptas voluptatibus voluptatum?</p>
        </div>
    </div>
@endsection

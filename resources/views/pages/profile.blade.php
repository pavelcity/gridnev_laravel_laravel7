@extends('layout')

@section('title')Мой профиль@endsection



@section('content')

    <div class="uk-container">


        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-1-5@l">
                @include('pages._sidebar')
            </div>


            <div class="uk-width-expand@m">

                <h3 class="uk-heading-divider uk-text-center">Мой профиль | <span style="font-weight: 200;">{{ $user->name }}</span></h3>

                @include('admin.errors')

                @if(session('logout'))
                    <div class="uk-alert-success uk-margin-left" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ session('logout') }}</p>
                    </div>
                @endif

                <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data" class="uk-form-stacked uk-margin-left">

                    @csrf

                    <div class="uk-margin">
                        <img style="width: 400px;" src="{{ $user->getImage() }}" alt="">
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="name">Имя</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="name" name="name" type="text" placeholder="Имя" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="E-mail">E-mail</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="E-mail" name="email" type="text" placeholder="E-mail" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="password">Пароль</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="password" name="password" type="password" placeholder="Пароль">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div uk-form-custom>
                            <input type="file" name="avatar">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1"> загрузить </button> аватар
                        </div>
                    </div>

                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary uk-button-small">Изменить</button>
                    </div>



                </form>

            </div>



        </div>








    </div>


@endsection

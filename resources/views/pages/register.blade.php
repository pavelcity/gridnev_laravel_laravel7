@extends('layout')

@section('title')Регистрация@endsection



@section('content')

    <div class="uk-container">


        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-1-5@l">
                @include('pages._sidebar')
            </div>




            <div class="uk-width-expand@m">

                <h3 class="uk-heading-divider uk-text-center">Регистрация</h3>

                @include('admin.errors')

                <form action="{{ route('register') }}" method="post" class="uk-form-stacked uk-margin-left">

                    @csrf

                    <div class="uk-margin">
                        <label class="uk-form-label" for="name">Имя</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="name" name="name" type="text" placeholder="Имя" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="E-mail">E-mail</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="E-mail" name="email" type="text" placeholder="E-mail" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="password">Пароль</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="password" name="password" type="password" placeholder="Пароль">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary uk-button-small">Отправить</button>
                    </div>



                </form>

            </div>



        </div>








    </div>


@endsection

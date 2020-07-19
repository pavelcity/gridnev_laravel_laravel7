@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Создать категорию</div>
            <a href="{{ route('categories.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
            {!! Form::open(['route' => ['categories.store'], 'files' => 'true']) !!}

                <div class="uk-margin">
                    <input class="uk-input" name="title" type="text" placeholder="Придумайте заголовок" value="{{ old('title') }}">
                </div>

                <div class="uk-margin">
                    <div uk-form-custom>
                        <input type="file" name="avatar">
                        <button class="uk-button uk-button-default"  type="button" tabindex="-1">картинка</button>
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

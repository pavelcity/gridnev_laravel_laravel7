@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Создать подписчика</div>
            <a href="{{ route('subscribers.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
                {!! Form::open(['route' => ['subscribers.store']]) !!}

                <div class="uk-margin">
                    <input class="uk-input" name="email" type="text" placeholder="e-mail подписчика" value="{{ old('title') }}">
                </div>


                <div class="uk-margin">
                    <button class="uk-button uk-button-default">создать</button>
                </div>
            </fieldset>
            {!! Form::close() !!}


        </div>



    </div>
@endsection

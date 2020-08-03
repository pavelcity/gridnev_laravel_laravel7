@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Создать запись блога</div>
            <a href="{{ route('blog.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
                {!! Form::open(['route' => ['blog.store'], 'files' => 'true']) !!}

                <div class="uk-margin">
                    <input class="uk-input" name="title" type="text" placeholder="Придумайте заголовок" value="{{ old('title') }}">
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="short">Короткое описание</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" id="short" name="short_txt" rows="5" placeholder="">{{ old('short_txt') }}</textarea>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="bigtxt">Полный текст</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" id="bigtxt" name="bigtxt" rows="5" placeholder="">{{ old('bigtxt') }}</textarea>
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

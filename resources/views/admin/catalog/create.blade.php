@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                <ul class="uk-list">
                    <li><a href="{{ url('/admin') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Главная</a></li>
                    <li><a href="{{ route('categories.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Категории</a></li>
                    <li><a href="{{ route('tags.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Теги</a></li>
                    <li><a href="{{ route('users.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Пользователи</a></li>
                    <li><a href="{{ route('catalog.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-primary">Каталог</a></li>
                </ul>
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Создать товар</div>
            <a href="{{ route('catalog.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
                {!! Form::open(['route' => ['catalog.store'], 'files' => 'true']) !!}

                <div class="uk-margin">
                    <label class="uk-form-label" for="title">Заголовок</label>
                    <input class="uk-input" id="title" name="title" type="text" placeholder="" value="{{ old('title') }}">
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="srokuse">Срок годности</label>
                    <input class="uk-input" id="srokuse" name="srok_godnosti" type="text" placeholder="" value="{{ old('srok_godnosti') }}">
                </div>




                <div class="uk-margin">
                    <div id="img" uk-form-custom>
                        <input type="file" name="image">
                        <button class="uk-button uk-button-primary uk-button-small"  type="button" tabindex="-1">картинка</button>
                        <label class="uk-form-label" for="img">загрузите картинку</label>
                    </div>
                </div>





                <div class="uk-margin">
                    <label class="uk-form-label" for="category">Выберите категорию</label>
                    {{ Form::select('category_id',
                            $category,
                            null,
                            ['class' => 'uk-select uk-width-1-1']) }}
                </div>



                <div class="uk-margin" >
                    <label class="uk-form-label" for="tags" >Выберите теги</label>
                    {{ Form::select('tags[]',
                            $tags,
                            null,
                            ['class' => 'uk-select uk-width-1-1', 'multiple' => 'multiple']
                            ) }}
{{--                    <label><input class="uk-checkbox" type="checkbox"> ржаной</label>--}}
{{--                    <label><input class="uk-checkbox" type="checkbox"> пшеничный</label>--}}
{{--                    <label><input class="uk-checkbox" type="checkbox"> сучасный</label>--}}
{{--                    <label><input class="uk-checkbox" type="checkbox"> бездрожжевой</label>--}}
                </div>



                <div class="uk-margin">
                    <label class="uk-form-label" for="datepicker">Дата:</label>
                     <input type="text" class="uk-input uk-width-1-1" id="datepicker" name="date" value="{{ old('date') }}">
                </div>



                <div class="uk-margin">
                    <label class="uk-form-label" for="big_text">Текст</label>
                    <textarea class="uk-textarea" id="big_text" name="big_text" rows="5" placeholder=""> {{ old('big_text') }}</textarea>
                </div>


                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
{{--                    <label class="uk-form-label" for="tags">Черновик</label>--}}
                    <label><input class="uk-checkbox" name="status" type="checkbox"> Черновик</label>
                </div>





                <div class="uk-margin" >
                    <button style="margin-top: 20px;" class="uk-button uk-button-default">создать</button>
                </div>
            </fieldset>
            {!! Form::close() !!}


        </div>



    </div>
@endsection

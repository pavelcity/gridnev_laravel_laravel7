@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Редактирование</div>
            <a href="{{ route('catalog.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
                {!! Form::open([
                        'route' => ['catalog.update', $catalog->id],
                        'method' => 'put',
                        'files' => true]) !!}

                <div class="uk-margin">
                    <label class="uk-form-label" for="title">Заголовок</label>
                    <input class="uk-input" id="title" name="title" type="text" placeholder="" value="{{ $catalog->title }}">
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="srokuse">Срок годности</label>
                    <input class="uk-input" id="srokuse" name="srok_godnosti" type="text" placeholder="" value="{{ $catalog->srok_godnosti }}">
                </div>


                <div class="uk-margin">
                    <img style="width: 200px;" src="{{ $catalog->getImage() }}" alt="">
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
                            $catalog->category->id,
                            ['class' => 'uk-select uk-width-1-1']) }}
                </div>



                <div class="uk-margin" >
                    <label class="uk-form-label" for="tags" >Выберите теги</label>
                    {{ Form::select('tags[]',
                            $tags,
                            $catalog->tags->pluck('id')->all(),
                            ['class' => 'uk-select uk-width-1-1', 'multiple' => 'multiple']
                            ) }}
                </div>



                <div class="uk-margin">
                    <label class="uk-form-label" for="datepicker">Дата:</label>
                    <input type="text" class="uk-input uk-width-1-1" id="datepicker" name="date" value="{{ $catalog->date }}">
                </div>



                <div class="uk-margin">
                    <label class="uk-form-label" for="big_text">Текст</label>
                    <textarea class="uk-textarea" id="big_text" name="big_text" rows="5" placeholder=""> {{ $catalog->big_text }}</textarea>
                </div>


                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    <label>
                    {{ Form::checkbox('status', '1', $catalog->status, ['class' => 'uk-checkbox']) }}
                        Черновик
                    </label>
                </div>





                <div class="uk-margin" >
                    <button style="margin-top: 20px;" class="uk-button uk-button-default">сохранить</button>
                </div>
            </fieldset>
            {!! Form::close() !!}


        </div>



    </div>
@endsection

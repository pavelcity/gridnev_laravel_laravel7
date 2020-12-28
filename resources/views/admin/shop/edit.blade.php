@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Редактировать магазин</div>
            <a href="{{ route('shop.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <form action="{{ route('shop.update', $shop->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')


                <fieldset class="uk-fieldset">



                    <div class="uk-margin-top">
                        <label class="uk-form-label" for="title">Адрес</label>
                        <input class="uk-input" id="title" name="name" type="text" placeholder="" value="{{ $shop->name }}">
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="timejob">Время работы</label>
                        <input class="uk-input" id="timejob" name="time_job" type="text" placeholder="" value="{{ $shop->time_job }}">
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="phone_shop">Телефон пекарни</label>
                        <input class="uk-input" id="phone_shop" name="phone_shop" type="text" placeholder="" value="{{ $shop->phone_shop }}">
                    </div>



                    <div class="uk-margin">
                        <img src="{{ $shop->getImage() }}" alt="">
                    </div>

                    <div class="uk-margin">
                        <div id="img" uk-form-custom>
                            <input type="file" name="image">
                            <button class="uk-button uk-button-primary uk-button-small"  type="button" tabindex="-1">картинка пекарни</button>
                            <label class="uk-form-label" for="img">загрузите картинку</label>
                        </div>
                    </div>


                    <div class="uk-margin" >
                        <button style="margin-top: 20px;" class="uk-button uk-button-default">сохранить</button>
                    </div>
                </fieldset>
            </form>


        </div>



    </div>
@endsection

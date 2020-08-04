@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Создать контакты</div>
            <a href="{{ route('contacts.index') }}" class="uk-button uk-button-primary uk-button-small">Назад</a>

            @include('admin.errors')

            <fieldset class="uk-fieldset">
                {!! Form::open(['route' => ['contacts.store'], 'files' => 'true']) !!}



                <hr class="uk-divider-icon">
                <legend class="uk-legend uk-margin-top">Хлебная мануфактура «ГРIДНЕВЪ»</legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="one_title">Хлебная мануфактура «ГРIДНЕВЪ»</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="one_title" name="one_title" type="text" placeholder="Заголовок" value="{{ old('one_title') }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="one_index">индекс</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="one_index" name="one_index" type="text" placeholder="индекс" value="{{ old('one_index') }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="one_street">улица</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="one_street" name="one_street" type="text" placeholder="улица" value="{{ old('one_street') }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="one_phone">номер телефона в формате +7 (000) 000-00-00</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="one_phone" name="one_phone" type="text" placeholder="номер телефона" value="{{ old('one_phone') }} ">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="one_email">e-mail</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="one_email" name="one_email" type="text" placeholder="e-mail" value="{{ old('one_email') }}">
                    </div>
                </div>






                <br>
                <hr class="uk-divider-icon">

                <legend class="uk-legend uk-margin-top">По вопросам сотрудничества</legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="two_title">По вопросам сотрудничества</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="two_title" name="two_title" type="text" placeholder="Заголовок" value="{{ old('two_title') }}">
                    </div>
                </div>


                <div class="uk-margin">
                    <div class="uk-h4">Отдел продаж:</div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="two_prodazi_1_phone">1-й номер телефона</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="two_prodazi_1_phone" name="two_prodazi_1_phone" type="text" placeholder="номер телефона" value="{{ old('two_prodazi_1_phone') }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="two_prodazi_2_phone">2-й номер телефона</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="two_prodazi_2_phone" name="two_prodazi_2_phone" type="text" placeholder="номер телефона" value="{{ old('two_prodazi_2_phone') }}">
                    </div>
                </div>


                <div class="uk-margin">
                    <div class="uk-h4">Отдел снабжения:</div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="two_snabzenie_1_phone">номер телефона</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="two_snabzenie_1_phone" name="two_snabzenie_1_phone" type="text" placeholder="номер телефона" value="{{ old('two_snabzenie_1_phone') }}">
                    </div>
                </div>


                <div class="uk-margin">
                    <div class="uk-h4">Отдел технологов:</div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="two_technologi_1_phone">номер телефона</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="two_technologi_1_phone" name="two_technologi_1_phone" type="text" placeholder="номер телефона" value="{{ old('two_technologi_1_phone') }}">
                    </div>
                </div>






                <br>
                <hr class="uk-divider-icon">

                <legend class="uk-legend uk-margin-top">По вопросам качества продукции</legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="tri_title">По вопросам качества продукции</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="tri_title" name="tri_title" type="text" placeholder="Заголовок" value="{{ old('tri_title') }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="tri_phone">номер телефона</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="tri_phone" name="tri_phone" type="text" placeholder="номер телефона" value="{{ old('tri_phone') }}">
                    </div>
                </div>





                <br>
                <hr class="uk-divider-icon">

                <legend class="uk-legend uk-margin-top">Фирменная розничная сеть «ГРIДНЕВЪ-ХЛЕБЪ»</legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="four_title">Фирменная розничная сеть «ГРIДНЕВЪ-ХЛЕБЪ»</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="four_title" name="four_title" type="text" placeholder="Заголовок" value="{{ old('four_title') }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="four_phone">e-mail</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="four_phone" name="four_phone" type="text" placeholder="e-mail" value="{{ old('four_phone') }}">
                    </div>
                </div>




                <br>
                <hr class="uk-divider-icon">

                <legend class="uk-legend uk-margin-top">Фотография директора</legend>

                <div class="uk-margin">
                    <div uk-form-custom>
                        <input type="file" name="directro">
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

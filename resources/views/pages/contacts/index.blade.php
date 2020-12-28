@extends('layout')

@section('content')


    @include('pages.includes.insidemenu')

    @foreach($contacts as $contact)
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>

            <div class="uk-width-1-2">

                <div class="">

                    <div class="uk-h3 uk-margin-remove-bottom"><i class="mdi mdi-sign-direction"></i> {{ $contact->one_title }}</div>
                    <p class="uk-article-meta uk-margin-remove">Ростов-на-Дону</p>
                    <ul class="uk-list uk-list-collapse uk-margin-remove">
                        <li>{{ $contact->one_index }}</li>
                        <li>{{ $contact->one_street }}</li>
                    </ul>
                    <ul class="uk-list">
                        <li><i class="mdi mdi-phone-in-talk"></i> <a class="" href="tel:{{ $contact->one_phone }}">{{ $contact->one_phone }}</a></li>
                        <li><i class="mdi mdi-at"></i> <a href="mailto:{{ $contact->one_email }}">{{ $contact->one_email }}</a></li>
                    </ul>

                    <div class="uk-h3 uk-margin-remove-bottom"><i class="mdi mdi-account-supervisor"></i> {{ $contact->two_title }}</div>
                    <p class="uk-article-meta uk-margin-remove">Ростов-на-Дону</p>
                    <ul class="uk-list uk-margin-remove">
                        <li class="uk-margin-remove"><p ><b>Отдел продаж</b></p></li>
                        <li><i class="mdi mdi-phone-in-talk"></i>  <a href="tel:{{ $contact->two_prodazi_1_phone }}">{{ $contact->two_prodazi_1_phone }}</a></li>
                        <li><i class="mdi mdi-phone-in-talk"></i>  <a href="tel:{{ $contact->two_prodazi_2_phone }}"> {{ $contact->two_prodazi_2_phone }}</a></li>
                    </ul>
                    <ul class="uk-list ">
                        <li class="uk-margin-remove"><p ><b>Отдел снабжения</b></p></li>
                        <li><i class="mdi mdi-phone-in-talk"></i>  <a href="tel:{{ $contact->two_snabzenie_1_phone }}">{{ $contact->two_snabzenie_1_phone }}</a></li>
                    </ul>
                    <ul class="uk-list ">
                        <li class="uk-margin-remove"><p ><b>Отдел технологов</b></p></li>
                        <li><i class="mdi mdi-phone-in-talk"></i>  <a href="tel:{{ $contact->two_technologi_1_phone }}">{{ $contact->two_technologi_1_phone }}</a></li>
                    </ul>


                    <div class="uk-h3 uk-margin-remove-bottom"><i class="mdi mdi-alert-octagram"></i> {{ $contact->tri_title }}</div>
                    <ul class="uk-list uk-margin-remove">
                        <li><i class="mdi mdi-phone-in-talk"></i>  <a href="tel:{{ $contact->tri_phone }}">{{ $contact->tri_phone }}</a></li>
                    </ul>


                    <div class="uk-h3 uk-margin-remove-bottom"><i class="mdi mdi-axis-arrow"></i> {{ $contact->four_title }}</div>
                    <ul class="uk-list uk-margin-remove">
                        <li><i class="mdi mdi-at"></i>  <a href="mailto:{{ $contact->four_phone }}">{{ $contact->four_phone }}</a></li>
                    </ul>
                </div>

            </div>


            <div class="uk-width-1-2 uk-cover-container uk-visible@s">
                <div class="">
{{--                    <img src="/img/gridnev2.jpg" alt="" uk-cover>--}}
                    <img src="{{ $contact->showPic() }}" alt="" uk-cover>
                </div>
            </div>


        </div>
    </div>
    @endforeach


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection

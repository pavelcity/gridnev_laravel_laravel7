@extends('layout')

@section('content')

    @foreach($contacts as $contact)
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-1-2">
                <div class="">
                    <div class="uk-h3 uk-margin-remove-bottom"><i class="mdi mdi-sign-direction"></i>{{ $contact->one_title }}</div>
                    <ul class="uk-list uk-list-collapse uk-margin-remove">
                        <li>{{ $contact->one_index }}</li>
                        <li>{{ $contact->one_street }}</li>
                    </ul>
                    <ul class="uk-list">
                        <li><i class="mdi mdi-phone-in-talk"></i> <a class="" href="tel:{{ $contact->one_phone }}">{{ $contact->one_phone }}</a></li>
                        <li><i class="mdi mdi-at"></i> <a href="mailto:{{ $contact->one_email }}">{{ $contact->one_email }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-1-2">
                <div class="">
                    <img src="/img/gridnev2.jpg" alt="">
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

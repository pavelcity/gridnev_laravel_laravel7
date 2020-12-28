@extends('layout')


@section('content')




    @include('pages.includes.insidemenu')






    <div class="uk-container">


        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-1-5@l">
                @include('pages._sidebar')
            </div>




            <div class="uk-width-expand@m">
                <h3 class="uk-heading-divider uk-text-center">Сеть фирменных кафе-пекарен «ГРIДНЕВЪ-ХЛЕБЪ»</h3>
                <div class="uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-1@s uk-child-width-1-1 uk-grid-small uk-grid-match" uk-grid>

                    @foreach($shops as $shop)
                        <div class="uk-card uk-card-default uk-card-body">
                            <h3>{{ $shop->name }}</h3>
                            <p><span uk-icon="icon: future"></span>  {{ $shop->time_job }}</p>
                            <div> <span uk-icon="icon: receiver"></span>  <a href="tel:{{ $shop->phone_shop }}"> {{ $shop->phone_shop }}</a></div>
                            <img class="uk-margin" src="{{ $shop->getImage() }}" alt="">
                        </div>
                    @endforeach


                </div>

            </div>



        </div>








    </div>








@endsection





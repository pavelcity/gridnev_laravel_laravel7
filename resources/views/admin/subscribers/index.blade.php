@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">



            @if(session('delSubs'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ session('delSubs') }}</p>
                </div>
            @endif

            @if(session('addSubs'))
                    <div class="uk-alert-primary" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ session('addSubs') }}</p>
                    </div>
            @endif



            <div class="uk-h3">Подписчики</div>
            <a href="{{ route('subscribers.create') }}" class="uk-button uk-button-primary uk-button-small">Создать</a>

            <table class="uk-table uk-table-middle uk-table-divider uk-table-hover">
                <thead>
                <tr>
                    <th class="uk-width-small">id</th>
                    <th class="uk-width-expand">заголовок </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($subs as $sub)
                    <tr>
                        <td>{{ $sub->id }}</td>
                        <td>{{ $sub->email }}</td>
                        <td>
                            <div class="uk-margin-small">
                                <div class="uk-button-group">

                                    {!! Form::open([
                                            'method' => 'delete',
                                            'route' => ['subscribers.destroy', $sub->id]
                                            ]) !!}
                                    <button onclick="return confirm('удалить?')" class="uk-icon-button uk-margin-small-right" uk-icon="trash" uk-tooltip="title: удалить"></button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>


            <div class="uk-container">
                <div class="wrap_paginate">
                    {{ $subs->links() }}
                </div>
            </div>

        </div>



    </div>
@endsection

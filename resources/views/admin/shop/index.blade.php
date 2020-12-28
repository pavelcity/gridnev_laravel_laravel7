@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Магазины</div>
                        <a href="{{ route('shop.create') }}" class="uk-button uk-button-primary uk-button-small">Создать</a>

            @if(session('yes'))
                <div class="uk-alert-primary" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ session('yes') }}</p>
                </div>
            @endif

            <table class="uk-table uk-table-middle uk-table-divider uk-table-hover">
                <thead>
                <tr>
{{--                    <th class="uk-width-small">id</th>--}}
                    <th class="uk-width-expand">адрес </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($shops as $shop)
                    <tr>
{{--                        <td>{{ $shop->id }}</td>--}}
                        <td>{{ $shop->name }}</td>

                        <td>
                            <div class="uk-margin-small">
                                <div class="uk-button-group">
                                    <a href="{{ route('shop.edit', $shop->id) }}" class="uk-icon-button uk-margin-small-right" uk-icon="pencil" uk-tooltip="title: edit"></a>

                                    {!! Form::open([
                                            'method' => 'delete',
                                            'route' => ['shop.destroy', $shop->id]
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

        </div>



    </div>
@endsection

@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Каталог (карточки товара)</div>
            <a href="{{ route('catalog.create') }}" class="uk-button uk-button-primary uk-button-small">Создать</a>

            <table class="uk-table uk-table-middle uk-table-divider uk-table-hover">
                <thead>
                <tr>
                    <th class="uk-width-small">id</th>
                    <th class="uk-width-small">картинка</th>
                    <th style="min-width: 200px;" class="uk-width-small">заголовок</th>
                    <th class="uk-width-small">категория</th>
                    <th class="uk-width-expand">теги</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($catalogs as $catalog)
                    <tr>
                        <td >{{ $catalog->id }}</td>
                        <td><img style="min-width: 100px;" src="{{ $catalog->getImage() }}" alt=""></td>
                        <td style="min-width: 300px;">{{ $catalog->title }}</td>
                        <td style="min-width: 200px;">{{ $catalog->getCategoryTitle() }}</td>
                        <td>{{ $catalog->getTagsTitles() }}</td>
                        <td>
                            <div class="uk-margin-small">
                                <div class="uk-button-group">
                                    <a href="{{ route('catalog.edit', $catalog->id) }}" class="uk-icon-button uk-margin-small-right" uk-icon="pencil" uk-tooltip="title: edit"></a>
                                    {!! Form::open([
                                            'method' => 'delete',
                                            'route' => ['catalog.destroy', $catalog->id]
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

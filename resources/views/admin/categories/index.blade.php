@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                <ul class="uk-list">
                    <li><a href="{{ url('/admin') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Главная</a></li>
                    <li><a href="{{ route('categories.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-primary">Категории</a></li>
                    <li><a href="{{ route('tags.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Теги</a></li>
                    <li><a href="{{ route('users.index') }}" class="uk-width-1-1 uk-button-small uk-button uk-button-default">Пользователи</a></li>
                </ul>
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Категории</div>
            <a href="{{ route('categories.create') }}" class="uk-button uk-button-primary uk-button-small">Создать</a>

            <table class="uk-table uk-table-middle uk-table-divider uk-table-hover">
                <thead>
                <tr>
                    <th class="uk-width-small">id</th>
                    <th >img </th>
                    <th class="uk-width-expand">заголовок </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td><img class="picCategory" src="{{ $category->showPic() }}" alt=""></td>
                        <td>{{ $category->title }}</td>

                        <td>
                            <div class="uk-margin-small">
                                <div class="uk-button-group">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="uk-icon-button uk-margin-small-right" uk-icon="pencil" uk-tooltip="title: edit"></a>
                                    {!! Form::open([
                                            'method' => 'delete',
                                            'route' => ['categories.destroy', $category->id]
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

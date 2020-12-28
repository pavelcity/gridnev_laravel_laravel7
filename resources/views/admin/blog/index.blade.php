@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            @if(session('bloggadd'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ session('bloggadd') }}</p>
                </div>
            @endif

            <div class="uk-h3">Записи блога</div>
            <a href="{{ route('blog.create') }}" class="uk-button uk-button-primary uk-button-small">Создать</a>

            <table class="uk-table uk-table-middle uk-table-divider uk-table-hover">
                <thead>
                <tr>
{{--                    <th class="uk-width-small">id</th>--}}
                    <th class="uk-width-expand">заголовок </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($blogs as $blog)
                    <tr>
{{--                        <td>{{ $blog->id }}</td>--}}
                        <td>{{ $blog->title }}</td>

                        <td>
                            <div class="uk-margin-small">
                                <div class="uk-button-group">
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="uk-icon-button uk-margin-small-right" uk-icon="pencil" uk-tooltip="title: edit"></a>
                                    {!! Form::open([
                                            'method' => 'delete',
                                            'route' => ['blog.destroy', $blog->id]
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

@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>






        <div class="uk-width-expand@m uk-padding">

            <div class="uk-h3">Комментарии  <span class="uk-label">Всего <b>{{ $comments->count() }}</b> комментариев</span></div>


            @if(session('status'))
                <div class="uk-alert-success uk-margin-left" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            <table class="uk-table uk-table-middle uk-table-divider uk-table-hover">
                <thead>
                <tr>
                    <th class="uk-width-small">id</th>
                    <th >post_id </th>
                    <th class="uk-width-expand">заголовок </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
{{--                        <td><img class="picCategory" src="{{ $category->showPic() }}" alt=""></td>--}}
                        <td>{{ $comment->post_id }} <br> </td>
                        <td>
                            <b> {{ $comment->author->name }}  </b>(автор) <br>{{ $comment->text }}</td>

                        <td>
                            <div class="uk-margin-small">
                                <div class="uk-button-group">

                                    @if($comment->status == 1)
                                        <a href="{{ route('admin.togglecomment', $comment->id) }}" class="uk-icon-button uk-margin-small-right" uk-icon="ban" uk-tooltip="title: заблокировать"></a>
                                    @else
                                        <a href="{{ route('admin.togglecomment', $comment->id) }}" class="uk-icon-button uk-margin-small-right" uk-icon="push" uk-tooltip="title: одобрить"></a>
                                    @endif



                                    {!! Form::open([
                                            'method' => 'delete',
                                            'route' => ['admin.destroy', $comment->id]
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

@extends('layout')

@section('content')


    @include('pages.includes.insidemenu')


    <div class="uk-container">

        @if(session('status'))
            <div class="uk-alert-success" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p>{{ session('status') }}</p>
            </div>
        @endif



        <article class="uk-article">

            <h1 class="uk-article-title">{{ $catalog->title }}</h1>



            <p><div class="uk-label">{{ $catalog->category->title }}</div></p>


            <div uk-grid>
                <div class="uk-width-1-2@l uk-width-1-3@m uk-width-1-1@s uk-width-1-1">
                    <img class="catalogPicDetail" src="{{ $catalog->getImage() }}" alt="">
                </div>
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s uk-width-1-1">
                    <p class="uk-article-meta">Автор | {{ $catalog->author->name ?? "не указан" }} |

{{--	                    {{ $catalog->getDate() }}--}}
                        <br>
                        теги |
                        @foreach($catalog->tags as $tag)
                            <a href="{{ route('catalog.tags', $tag->slug) }}">{{ $tag->title }}</a>
                        @endforeach
                    </p>
                    <p>{!! $catalog->big_text  !!} </p>
{{--                    <p>Срок годности <strong>{{ $catalog->srok_godnosti }}</strong></p>--}}
                </div>
            </div>

        </article>
    </div>





    <br>
    <br>
    <br>
    <br>

    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-text-center" uk-grid>

            <div>
                @if($catalog->hasPrevTovar())
                    <a href="{{ route('catalog.detail', $catalog->getPrevTovar()->slug) }}" class="uk-card uk-card-default uk-card-body uk-card-small uk-link-reset uk-button-text uk-card-hover prevnextlink">
                        <img src="{{ $catalog->getPrevTovar()->getImage() }}" alt="">
                       <div>
                           <span uk-icon="icon: chevron-left"></span>
                           {{ $catalog->getPrevTovar()->title }}
                       </div>
                    </a>
                @endif
            </div>

            @if($catalog->hasNextTovar())
                <div>
                    <a href="{{ route('catalog.detail', $catalog->getNextTovar()->slug) }}" class="uk-card uk-card-default uk-card-body uk-card-small uk-link-reset uk-card-hover uk-button-text prevnextlink">

                        <div>
                            {{ $catalog->getNextTovar()->title }}
                            <span uk-icon="icon: chevron-right"></span>
                        </div>

                        <img src="{{ $catalog->getNextTovar()->getImage() }}" alt="">
                    </a>
                </div>
            @endif

        </div>
    </div>


    <br>
    <br>
    <br>
    <br>



{{--	@if(Auth::check())--}}
{{--    <div class="uk-container">--}}
{{--        <article class="uk-comment uk-comment-primary">--}}
{{--            <header class="uk-comment-header">--}}
{{--                <div class="uk-grid-medium uk-flex-middle" uk-grid>--}}
{{--                    <div class="uk-width-auto">--}}


{{--                        <img class="uk-comment-avatar" src="{{ $user->getImage() }}" width="80" height="80" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="uk-width-expand">--}}
{{--                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">{{ $user->name }}</a></h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </header>--}}
{{--            <div class="uk-comment-body">--}}
{{--                <p>Короткое описание</p>--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    </div>--}}
{{--    @endif--}}





    <br>
    <br>
    <br>
    <br>


    <div class="uk-container">


        <div class="uk-grid-medium" uk-grid>

            <div class="uk-width-1-5@l">
                @include('pages._sidebar')
            </div>


            <div class="uk-width-expand@m">
                @include('admin.errors')


            {{--комментарии--}}
{{--                @if(!$catalog->comments->isEmpty())--}}
{{--                    @foreach($catalog->comments->where('status', 1) as $comment)--}}
{{--                        <article class="uk-comment uk-comment-primary uk-margin-top">--}}
{{--                            <header class="uk-comment-header">--}}
{{--                                <div class="uk-grid-medium uk-flex-middle" uk-grid>--}}
{{--                                    <div class="uk-width-auto">--}}
{{--                                        <img class="uk-comment-avatar" src="{{ $comment->author->getImage() }}" width="80" height="80" alt="">--}}
{{--                                        <img class="uk-comment-avatar" src="https://avatars.mds.yandex.net/get-pdb/2018622/fd1d69b7-77dc-46db-906c-7a2be2082ea6/s1200?webp=false" width="80" height="80" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="uk-width-expand">--}}
{{--                                        <h4 class="uk-comment-title uk-margin-remove">{{ $comment->author->name }}</h4>--}}
{{--                                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">--}}
{{--                                            <li>{{ $comment->created_at->diffForHumans() }}</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </header>--}}
{{--                            <div class="uk-comment-body">--}}
{{--                                <p> {{ $comment->text }}</p>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    @endforeach--}}
{{--                @endif--}}


                {{--комментарии end--}}





{{--                @if(Auth::check())--}}
{{--                <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-margin-top">--}}
{{--                    <h3 class="uk-card-title">Оставить комментарий</h3>--}}




{{--                    <form class="uk-form-stacked" method="post" action="{{ route('comment') }}">--}}

{{--                        @csrf--}}

{{--                        <input type="hidden" name="post_id" value="{{ $catalog->id }}">--}}


{{--                        <div class="uk-margin">--}}
{{--                            <div class="uk-margin">--}}
{{--                                <label class="uk-form-label" for="tarea">Комментарий</label>--}}
{{--                                <textarea class="uk-textarea" id="tarea" name="text" rows="5" placeholder=""></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="uk-margin">--}}
{{--                            <button class="uk-button uk-button-default uk-button-small">Отправить</button>--}}
{{--                        </div>--}}
{{--                     </form>--}}
{{--                </div>--}}

{{--                @else--}}
{{--                    <div class="uk-card uk-card-primary uk-card-small uk-card-body">--}}
{{--                    <p>Зарегистрированные пользователи могут оставлять комментарии <a href="/login">Login</a></p>--}}
{{--                    </div>--}}

{{--                @endif--}}






                <h3 class="uk-heading-divider uk-text-center">Рекомендуем</h3>
                <div class="uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid-match" uk-grid>

                    @foreach($catalog->related() as $item)
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover uk-card-small">
                                <a href="{{ route('catalog.detail', $item->slug) }}" class="uk-link-reset">
                                    <div class="uk-card-media-top">
                                        <img style="width: 100%; max-width: 100%;" src="{{ $item->getImage() }}" alt="">
                                    </div>
                                    <div class="uk-card-body uk-card-small">
                                        <div class="uk-visible@s uk-label">{{ $item->getCategoryTitle() }}</div>
                                        <p> {{ $item->title }}</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    @endforeach

                </div>



            </div>

        </div>



    </div>


    <br>
    <br>




    <br>
    <br>
    <br>
    <br>

@endsection

@extends('admin.layout')


@section('content')



    <div class="" uk-grid>


        <div class="uk-width-1-6@m leftAdminPanel">
            <div class="uk-card uk-card-body uk-card-small">
                @include('admin._sidebar')
            </div>
        </div>


        <div class="uk-width-expand@m uk-padding">
            <img  src="/img/logo_dash2.jpg" alt="">

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-margin" uk-grid>

                <div>
                    <a href="{{ route('catalog.index') }}" class="uk-card uk-card-primary uk-card-body uk-card-hover uk-link-reset">
                        <div class="uk-card-badge uk-label">{{ $catalog->count() }}</div>
                        <h3 class="uk-card-title">Продукция </h3>
                    </a>
                </div>

                <div>
                    <a href="{{ route('categories.index') }}" class="uk-card uk-card-primary uk-card-body uk-card-hover uk-link-reset">
                        <div class="uk-card-badge uk-label">{{ $category->count() }}</div>
                        <h3 class="uk-card-title">Категории </h3>
                    </a>
                </div>

                <div>
                    <a href="{{ route('tags.index') }}" class="uk-card uk-card-primary uk-card-body uk-card-hover uk-link-reset">
                        <div class="uk-card-badge uk-label">{{ $tags->count() }}</div>
                        <h3 class="uk-card-title">Теги </h3>
                    </a>
                </div>

                <div>
                    <a href="{{ route('blog.index') }}" class="uk-card uk-card-primary uk-card-body uk-card-hover uk-link-reset">
                        <div class="uk-card-badge uk-label">{{ $blog->count() }}</div>
                        <h3 class="uk-card-title">Записей блога </h3>
                    </a>
                </div>

                <div>
                    <a href="{{ route('blog.index') }}" class="uk-card uk-card-primary uk-card-body uk-card-hover uk-link-reset">
                        <div class="uk-card-badge uk-label">{{ $shop->count() }}</div>
                        <h3 class="uk-card-title">Фирменные магазины </h3>
                    </a>
                </div>



            </div>

        </div>
    </div>
@endsection

@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="news-page header-fix relative">
            <div class="grid-main inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <div class="top-container ">
                <div class="d-lg-flex align-items-center">
                    <div class="breadcrumps  black">
                        <ul class="nav flex-wrap">
                            <li>
                                <a href="/">Головна</a>
                            </li>
                            <li>
                                <span class="current">Новини</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1>Новини компанії</h1>
            </div>
            <div class="tabs-menu d-flex align-items-start flex-wrap">
                <x-splade-link href="#" class="item active">показати всі</x-splade-link>
                @foreach($categories as $c)
                    <x-splade-link href="{{ route('news.category', $c) }}" class="item">{{ $c->name }}</x-splade-link>
                @endforeach
            </div>
            <div class="news-list">
                <div class="row gutters-22">
                    @foreach($news as $post)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="item d-flex flex-column align-items-start justify-content-between">
                                <x-splade-link href="{{ route('news.post', $post) }}" class="item-image ">
                                    <img class="parallax" src="{{ $post->getFirstMedia('image')->originalUrl }}" alt="">
                                </x-splade-link>
                                <div class="item-info">
                                    <div class="d-flex align-items-center">
                                        @foreach($post->categories as $c)
                                            <span class="category">{{ $c->name }}</span>
                                        @endforeach
                                        <span class="date">{{ $post->created_at }}</span>
                                    </div>
                                    <x-splade-link href="{{ route('news.post', $post) }}" class="name">{{ $post->title }}</x-splade-link>
                                </div>
                                <div class="button-container">
                                    <x-splade-link href="{{ route('news.post', $post) }}" class="link-default item-link d-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </x-splade-link>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
{{--                <button class="button-more d-flex align-items-center justify-content-center">--}}
{{--                    <span class="value">показати більше</span>--}}
{{--                    <span class="ic icon-more"></span>--}}
{{--                </button>--}}
            </div>
        </section>
    </div>

@endsection

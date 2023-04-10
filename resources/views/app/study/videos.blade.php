@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="videos-page header-fix relative">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="top-container ">
                <div class="d-lg-flex align-items-center">
                    <div class="breadcrumps  black">
                        <ul class="nav flex-wrap">
                            <li>
                                <a href="/">Головна</a>
                            </li>
                            <li>
                                <x-splade-link :href="$appPages['study']">Навчання</x-splade-link>
                            </li>
                            <li>
                                <span class="current">{{ $page->title }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1>{{ $page->title }}</h1>
            </div>
            <div class="tabs-menu d-flex align-items-start flex-wrap">
                <x-splade-link :href="$appPages['videos']" class="item active">показати всі</x-splade-link>
                @foreach($categories as $c)
                    <x-splade-link :href="$c->url" class="item">{{ $c->name }}</x-splade-link>
                @endforeach
            </div>
            <div class="video-list">
                <div class="row gutters-24">
                    @foreach($videos as $video)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="item">
                                <a href="{{ $video->url }}" class="item-image" data-fancybox>
                                    <img src="{{ $video->getFirstMedia('image')?->originalUrl }}" alt="" class="parallax">
                                    <div class="video-button">
                                        <div class="play-container d-flex align-items-center justify-content-center">
                                            <div class="play-button d-flex align-items-center justify-content-center">
                                                <img src="/images/video2.svg" alt=""></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-info">
                                    @foreach($video->categories as $vCategory)
                                        <div class="category">{{ $vCategory->name }}</div>
                                    @endforeach
                                    <div class="name">{{ $video->title }}</div>
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
            <div class="projects-small sml">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-center justify-content-between">
                            <div class="title-info">
                                <div class="title">Більше курсів</div>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <div class="slider-navs"></div>
                            </div>
                        </div>
                        <div class="projects-slider projects-list">
                            @foreach($courses as $course)
                                <div class="slide">
                                    <div class="item d-flex flex-column justify-content-end align-items-start">
                                        <div class="item-bottom">
                                            <div class="name">{{ $course->name }}</div>
                                            <div class="anons">{{ $course->description }}</div>
                                            <x-splade-link :href="$course->url"
                                               class="link-default item-link white d-inline-flex align-items-center">
                                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                                <span class="value">детальніше</span>
                                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                            </x-splade-link>
                                        </div>
                                        <div class="item-image">
                                            <img src="{{ $course->getFirstMedia('image')?->originalUrl }}" class="parallax" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

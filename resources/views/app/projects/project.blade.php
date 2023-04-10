@extends('app.layout.app')

@section('content')

    <div class="inner-main with-foto">
        <div class="info-container">
            <div class="container-fluid">
                <div class="breadcrumps">
                    <ul class="nav flex-wrap">
                        <li>
                            <a href="/">Головна</a>
                        </li>
                        <li>
                            <a href="/">Послуги</a>
                        </li>
                        <li>
                            <span class="current">{{ $project->title }}</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>{{ $project->title }}</h1>
                    <div class="container-info">
                        @foreach($project->categories as $pCategory)
                            <div class="category">{{ $pCategory->name }}</div>
                        @endforeach
                        <div class="anons">
                            {!! $project->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-3.jpg" alt="" class="parallax"></div>
        <div class="shape">
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>
    <div class="container-fluid">
        <section class="project-detail relative">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            {!! $project->content !!}
            <div class="gallery-slider">
                <div class="title-container d-flex align-items-center">
                    <div class="title">Як це було</div>
                    <div class="slider-navs"></div>
                </div>
                <div class="slider-container">
                    <div class="slider-gallery">
                        @foreach($project->getMedia('images') as $image)
                            <div class="slide">
                                <a href="{{ $image->originalUrl }}" class="item" data-fancybox="gall">
                                    <img src="{{ $image->originalUrl }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="projects-small sml">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-center justify-content-between">
                            <div class="title-info">
                                <div class="title">Більше проектів</div>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <x-splade-link :href="$appPages['projects']" class="link-default-back d-inline-flex align-items-center all">
                                    <span class="icon d-flex align-items-center justify-content-center">
                                        <span class="ic icon-arrow-right"></span>
                                    </span>
                                    <span class="value">дивитись всі</span>
                                </x-splade-link>
                                <div class="slider-navs"></div>
                            </div>
                        </div>
                        <div class="projects-slider projects-list">
                            @foreach($projects as $p)
                                <div class="slide">
                                    <div class="item d-flex flex-column justify-content-between align-items-start">
                                        <div class="item-top d-flex align-items-start justify-content-between">
                                            <div class="item-logo"><img src="{{ $p->getFirstMedia('logo')?->originalUrl }}" alt=""></div>
                                            @foreach($p->categories as $pCategory)
                                                <div class="item-category">{{ $pCategory->name }}</div>
                                            @endforeach
                                        </div>
                                        <div class="item-bottom">
                                            <div class="name">{{ $p->title }}</div>
                                            <div class="anons">{{ $p->description_short }}</div>
                                            <x-splade-link :href="$p->url" class="link-default item-link white d-inline-flex align-items-center">
                                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                                <span class="value">детальніше</span>
                                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                            </x-splade-link>
                                        </div>
                                        <div class="item-image">
                                            <img src="{{ $p->getFirstMedia('image')?->originalUrl }}" alt="">
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

@extends('app.layout.app')

@section('content')

    <div class="inner-main">
        <div class="info-container">
            <div class="container-fluid">
                <div class="breadcrumps">
                    <ul class="nav flex-wrap">
                        <li>
                            <a href="/">Головна</a>
                        </li>
                        <li>
                            <span class="current">Реєстратори розрахункових операцій</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>Допомагаємо бізнесу функціонувати ефективно</h1>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-1.png" alt=""></div>
        <div class="shape">
            <div class="shape-1"><img src="/images/sh1.svg" alt=""></div>
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="services-page">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="services-list">
                @foreach($services as $i => $service)
                    <div class="service-item d-lg-flex align-items-start justify-content-between">
                        <div class="item-info">
                            <div class="number">{{ $i < 10 ? '0' : '' }}{{ $i + 1 }}</div>
                            <div class="name">{{ $service->name }}</div>
                            {!! $service->description !!}
                            <x-splade-link :href="$service->url" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </x-splade-link>
                        </div>
                        <div class="item-image d-flex align-items-end justify-content-center">
                            <div class="image-container">
                                <div class="image-bg"><img src="{{ $service->getFirstMedia('background')?->originalUrl }}" alt=""></div>
                                <div class="image-anim"><img src="{{ $service->getFirstMedia('image')?->originalUrl }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="projects-small">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-start justify-content-between">
                            <div class="title-info">
                                <div class="title">Реалізовані проекти</div>
                                <div class="anons">Ми маємо досвід створення високоякісних рішень для клієнтів по
                                    всій країні
                                </div>
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
                            @foreach($projects as $project)
                                <div class="slide">
                                    <div class="item d-flex flex-column justify-content-between align-items-start">
                                        <div class="item-top d-flex align-items-start justify-content-between">
                                            <div class="item-logo"><img src="{{ $project->getFirstMedia('logo')?->originalUrl }}" alt=""></div>
                                            @foreach($project->categories as $pCategory)
                                                <div class="item-category">{{ $pCategory->name }}</div>
                                            @endforeach
                                        </div>
                                        <div class="item-bottom">
                                            <div class="name">{{ $project->title }}</div>
                                            <div class="anons">{{ $project->description_short }}</div>
                                            <x-splade-link :href="$project->url"
                                                           class="link-default item-link white d-inline-flex align-items-center">
                                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                                <span class="value">детальніше</span>
                                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                            </x-splade-link>
                                        </div>
                                        <div class="item-image">
                                            <img src="{{ $project->getFirstMedia('image')?->originalUrl }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

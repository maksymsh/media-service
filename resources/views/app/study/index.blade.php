@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="study-page header-fix relative">
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
                                <span class="current">Навчальння</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-xl-flex align-items-center justify-content-between h1-flex">
                    <h1>{{ $page->title }}</h1>
                    <div class="anons">{{ $page->description }}</div>
                </div>
            </div>
            <div class="study-tizers d-flex flex-wrap align-items-start">
                <div class="item item-1">
                    <div class="name">{!! __('pages.study.title_1') !!}</div>
                    <div class="anons">{!! __('pages.study.text_1') !!}</div>
                </div>
                <div class="item item-2">
                    <div class="name">{!! __('pages.study.title_2') !!}</div>
                    <div class="anons">{!! __('pages.study.text_2') !!}</div>
                </div>
                <div class="item item-3">
                    <div class="name">{!! __('pages.study.title_3') !!}</div>
                    <div class="anons">{!! __('pages.study.text_3') !!}</div>
                </div>
                <div class="item item-4">
                    <div class="name">{!! __('pages.study.title_4') !!}</div>
                    <div class="anons">{!! __('pages.study.text_4') !!}</div>
                </div>
            </div>
            <div class="study-list">
                @foreach($courses as $course)
                    <div class="item">
                        <div class="item-image"><img src="{{ $course->getFirstMedia('image')?->originalUrl }}" alt="" class="parallax"></div>
                        <div class="item-info d-flex  flex-wrap align-items-end justify-content-between">
                            <div class="info-container">
                                <div class="adres d-flex align-items-center">
                                    <span class="ic"><img src="/images/adr.svg" alt=""></span>
                                    <span class="value">{{ $course->title }}</span>
                                </div>
                                <div class="name">{{ $course->name }}</div>
                                <div class="anons">{{ $course->description }}</div>
                            </div>
                            <x-splade-link :href="$course->url" class="link-default item-link white d-inline-flex align-items-center"
                               tabindex="0">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">детальніше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </x-splade-link>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="study-videos">
                <div class="title-container d-lg-flex align-items-center justify-content-between">
                    <div class="title">Навчальні відео</div>
                    <x-splade-link :href="$appPages['videos']" class="link-default-back d-inline-flex align-items-center all">
									<span class="icon d-flex align-items-center justify-content-center">
										<span class="ic icon-arrow-right"></span>
									</span>
                        <span class="value">перейти до всіх відео</span>
                    </x-splade-link>
                </div>
                <div class="d-lg-flex justify-content-between videos-container">
                    @php
                        $firstVideo = $videos->shift();
                    @endphp
                    <a href="{{ $firstVideo->url }}" class="big-video" data-fancybox>
                        <div class="video-image"><img src="{{ $firstVideo->getFirstMedia('image')?->originalUrl }}" alt=""></div>
                        <div class="video-info d-flex flex-column justify-content-between">
                            <div class="play-button anim d-flex align-items-center justify-content-center"><img
                                    src="/images/video2.svg" alt=""></div>
                            <div class="info-top d-flex align-items-center">
                                @foreach($firstVideo->categories as $vCategory)
                                    <div class="category">{{ $vCategory->name }}</div>
                                @endforeach
                                <div class="date">{{ $firstVideo->created_at }}</div>
                            </div>
                            <div class="name">{{ $firstVideo->title }}</div>
                        </div>
                    </a>
                    <div class="video-list">
                        @foreach($videos as $video)
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
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="how-find d-lg-flex align-items-center justify-content-between">
                <div class="how-info">
                    <div class="title">Як нас знайти?</div>
                    <div class="adres d-flex">
                        <div class="icon"><img src="/images/pin.svg" alt=""></div>
                        <div class="value">
                            <div>Навчальний центр знаходиться за адресою: м.Львів, вул. Наукова, 7а (3-й поверх)</div>
                            <a href="#" class="link-default item-link d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">показати на карті</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="phone d-flex">
                        <div class="icon"><img src="/images/phone.svg" alt=""></div>
                        <div class="">
                            <div class="data">Консультації та запис</div>
                            <a href="tel:{{ rawPhone(settings('support_phone')) }}" class="value">{{ settings('support_phone') }}</a>
                        </div>
                    </div>
                </div>
                <div class="how-image"><img src="/images/how.jpg" alt="" class="parallax"></div>
            </div>
        </section>
    </div>

@endsection

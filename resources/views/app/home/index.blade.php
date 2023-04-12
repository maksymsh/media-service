@extends('app.layout.app')

@section('content')
    <div class="main-container">
        <div class="info-container d-flex align-items-center justify-content-center">
            <div class="h1-container">
                <h1>{!! $page->title !!}</h1>
                <div class="h1-anons">{!! $page->description !!}</div>
                <x-app.link :href="route('services.index')" class="button-default d-inline-flex align-items-center">
                    <span class="value">{{ __('Наші послуги') }}</span>
                    <span class="ic icon-arrow-right"></span>
                </x-app.link>
            </div>
        </div>
        <div class="shape-1">
            <img src="images/shape-1.svg" alt="">
        </div>
        <div class="shape-2">
            <img src="images/shape-2.svg" alt="">
        </div>
        <div class="lines d-flex align-items-end justify-content-between">
            <span class="line-1"></span>
            <span class="line-2"></span>
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"></span>
            <span class="line-6"></span>
            <span class="line-7"></span>
            <span class="line-8"></span>
        </div>
        <div class="video">
            <video autoplay loop muted >
                <source src="/images/video.mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>

    <div class="container-fluid relative">
        <div class="grid-main">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
            <div class="line-4"></div>
        </div>
        <section class="solutions-wrapper row no-gutters">
            <div class="solutions-menu-wrapper col-3">
                <nav class="solutions-menu-content d-block">
                    <ul class="solutions-menu-list">
                        <li class="solutions-menu-item" data-target="services">
                            <a href="#services" class="scroll">{{ __('Послуги') }}</a>
                        </li>
                        <li class="solutions-menu-item" data-target="products">
                            <a href="#products" class="scroll">{{ __('продукти') }}</a>
                        </li>
                        <li class="solutions-menu-item" data-target="goods">
                            <a href="#goods" class="scroll">{{ __('товари') }}</a>
                        </li>
                        <li class="solutions-menu-item" data-target="learn">
                            <a href="#learn" class="scroll">{{ __('навчання') }}</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-xl-9">
                <div class="solutions-content">
                    <div class="solutions-item solutions-item--solution services" id="services">
                        <div class="shapes"><img src="/images/shapes-1.svg" alt=""></div>
                        <div class="lines"><img src="/images/lines-1.svg" alt=""></div>
                        <div class="d-md-flex align-items-start sol-cont">
                            <div class="item-col-info">
                                <div class="item-col-title">{{ __('Послуги') }}</div>
                                <div class="item-col-anons">
                                    {{ __('pages.home.services_text') }}
                                </div>
                            </div>
                            <div class="all-container">
                                <x-app.link :href="route('services.index')"
                                            class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                    <span class="value">{{ __('всі послуги') }}</span>
                                </x-app.link>
                            </div>
                        </div>
                        <div class="d-md-flex flex-wrap">
                            @foreach($services as $service)
                                <div class="item-col">
                                    <div class="col-item">
                                        <div class="col-icon">
                                            <img src="{{ $service->getFirstMedia('image')?->originalUrl }}" alt="">
                                        </div>
                                        <div class="col-name">{!! $service->name !!}</div>
                                        {!! $service->description_short !!}
                                        <x-app.link :href="$service->url"
                                                    class="link-default d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">{{ __('детальніше') }}</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </x-app.link>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="solutions-item solutions-item--solution about" id="about">
                    <div class="container-fluid">
                        <div class="h1">Mediaservice-</div>
                        <div class="d-lg-flex align-items-start">
                            <div class="about-image">
                                <img src="/images/team.png" alt="">
                            </div>
                            <div class="about-right">
                                <div class="anons">
                                    {{ __('pages.home.about') }}
                                </div>
                                <div class="counts-items d-flex flex-wrap align-items-start">
                                    <div class="count-item">
                                        <span class="data"><span class="data-run">17</span></span>
                                        <div class="value">{{ __('Років досвіду') }}</div>
                                    </div>
                                    <div class="count-item">
                                        <span class="data"><span class="data-run">60</span>+</span>
                                        <div class="value">{{ __('Спеціалістів різних напрямів') }}</div>
                                    </div>
                                    <div class="count-item">
                                        <span class="data"><span class="data-run">1</span>K+</span>
                                        <div class="value">{{ __('Автоматизованих підприємств') }}</div>
                                    </div>
                                </div>
                                <x-splade-link href="{{ $appPages['about'] }}" class="link-default-back white d-inline-flex align-items-center all">
													<span class="icon d-flex align-items-center justify-content-center">
														<span class="ic icon-arrow-right"></span>
													</span>
                                    <span class="value">{{ __('детальніше про нас') }}</span>
                                </x-splade-link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="solutions-item solutions-item--solution products odd" id="products">
                    <div class="shapes"><img src="/images/shapes-2.svg" alt=""></div>
                    <div class="lines"><img src="/images/lines-2.svg" alt=""></div>
                    <div class="d-md-flex align-items-start sol-cont">
                        <div class="item-col-info">
                            <div class="item-col-title">{{ __('Продукти') }}</div>
                            <div
                                class="item-col-anons">{{ __('pages.home.products_text') }}
                            </div>
                        </div>
                        <div class="all-container">
                            <x-splade-link :href="$appPages['products']"
                                        class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                <span class="value">{{ __('всі продукти') }}</span>
                            </x-splade-link>
                        </div>
                    </div>
                    <div class="d-md-flex flex-wrap">
                        @foreach($productCategories as $category)
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="{{ $category->getFirstMedia('image')?->originalUrl }}" alt="">
                                    </div>
                                    <div class="col-name">{!! $category->name !!}</div>
                                    {!! $category->description_short !!}
                                    <x-app.link :href="$appPages['products']"
                                                class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">{{ __('детальніше') }}</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </x-app.link>
                                </div>
                            </div>
                        @endforeach
                        @foreach($products as $product)
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="{{ $product->getFirstMedia('image')?->originalUrl }}" alt="">
                                    </div>
                                    <div class="col-name">{!! $product->name !!}</div>
                                    {!! $product->description_short !!}
                                    <x-app.link :href="$product->url"
                                                class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">{{ __('детальніше') }}</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </x-app.link>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="solutions-item solutions-item--solution goods" id="goods">
                    <div class="lines"><img src="/images/lines-3.svg" alt=""></div>
                    <div class="d-md-flex align-items-start sol-cont">
                        <div class="item-col-info">
                            <div class="item-col-title">{{ __('Товари') }}</div>
                            <div
                                class="item-col-anons">{{ __('pages.home.goods_text') }}</div>
                        </div>
                        <div class="all-container">
                            <x-app.link :href="route('goods.index')"
                                        class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                <span class="value">{{ __('переглянути всі товари') }}</span>
                            </x-app.link>
                        </div>
                    </div>
                    <div class="solutions-item-goods">
                        <div class="goods-container d-flex flex-wrap">
                            @foreach($goodCategories as $category)
                                <x-app.link :href="$category->url" class="good-item">
                                    <div class="item-image">
                                        <img src="{{ $category->getFirstMedia('image')?->originalUrl }}" alt="">
                                    </div>
                                    <div class="item-name">{!! $category->name !!}</div>
                                </x-app.link>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="solutions-item solutions-item--solution learn" id="learn">
                    <div class="d-lg-flex align-items-start sol-cont">
                        <div class="item-col-info">
                            <div class="item-col-title">{{ __('Навчання та сертифікація') }}</div>
                        </div>
                        <div class="all-container">
                            <div class="item-col-anons">
                                {{ __('pages.home.study_text') }}
                            </div>
                            <x-app.link :href="route('study.index')"
                                        class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                <span class="value">{{ __('більше про курси') }}</span>
                            </x-app.link>
                        </div>
                    </div>
                    <div class="learn-container d-md-flex">
                        <div class="line"><img src="/images/line.svg" alt=""></div>
                        <div class="learn-item">
                            <img src="/images/learn1.jpg" alt="" class="parallax">
                        </div>
                        <div class="learn-item">
                            <img src="/images/learn2.jpg" alt="" class="parallax">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients-section">
            <div class="title-container d-lg-flex align-items-start justify-content-between">
                <div class="title">{{ __('Готові до співпраці?') }}</div>
                <div class="title-info">
                    <div class="anons">
                        {{ __('pages.home.cooperate_text') }}
                    </div>
                    <x-app.link :href="route('projects.index')"
                                class="link-default-back d-inline-flex align-items-center all">
									<span class="icon d-flex align-items-center justify-content-center">
										<span class="ic icon-arrow-right"></span>
									</span>
                        <span class="value">{{ __('реалізовані проєкти') }}</span>
                    </x-app.link>
                </div>
            </div>
            <div class="clients-logos">
                <div class="logos-container d-flex flex-wrap">
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k1.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k2.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k3.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k4.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k5.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k6.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k7.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k8.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k9.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k10.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k11.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k12.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@extends('app.layout.app')

@section('content')

    <div class="inner-main with-foto">
        <div class="info-container">
            <div class="container-fluid">
                <div class="breadcrumps">
                    <ul class="nav flex-wrap">
                        <li>
                            <x-splade-link href="/">Головна</x-splade-link>
                        </li>
                        <li>
                            <span class="current">Про компанію</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>{!! $page->title !!}</h1>
                    <div class="container-info">
                        <div class="anons">
                            {!! $page->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-4.jpg" alt="" class="parallax"></div>
        <div class="shape">
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>

    <div class="container-fluid">

        <section class="about-page relative">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="about-years d-lg-flex align-items-end">
                <div class="years-container">
                    <div class="years-title">{!! __('pages.about.age_title') !!}</div>
                    <div class="years">17 років</div>
                </div>
                <div class="anons">{!! __('pages.about.age_text') !!}</div>
            </div>
            <div class="about-images">
                <img src="images/about.jpg" alt="" class="parallax">
                <div class="image-logo"><img src="images/logo2.svg" alt=""></div>
            </div>
            <div class="about-mission d-lg-flex align-items-start">
                <div class="title">{!! __('pages.about.mission_title') !!}</div>
                <div class="mission-content">
                    {!! __('pages.about.mission_text') !!}
                </div>
            </div>
            <div class="about-celi d-lg-flex align-items-start">
                <div class="title">{!! __('pages.about.aim_title') !!}</div>
                <div class="celi-content">
                    {!! __('pages.about.aim_text') !!}
                </div>
            </div>
            <div class="about-why d-flex justify-content-end">
                <div class="line"><img src="images/big-line.svg" alt=""></div>
                <div class="med"><img src="images/med.svg" alt=""></div>
                <div class="why-content">
                    <div class="title">{!! __('pages.about.why_us_title') !!}</div>
                    {!! __('pages.about.why_us_text') !!}
                </div>
            </div>
            <div class="about-offer">
                <div class="title">{!! __('pages.about.offer_title') !!}</div>
                <div class="d-lg-flex">
                    <div class="offer-left">
                        <div class="video">
                            <video autoplay="" loop="" muted=""><source src="images/video.mp4">Your browser does not support HTML5 video.</video>
                        </div>
                        <div class="name">{!! __('pages.about.offer_text') !!}</div>
                    </div>
                    <div class="offer-items">
                        <div class="item d-xl-flex align-items-center">
                            <div class="item-info">
                                <div class="item-title">Послуги</div>
                                <div class="anons">{!! __('pages.about.offer_services') !!}</div>
                            </div>
                            <x-splade-link href="{{ $appPages['services'] }}" class="link-default-back d-inline-flex align-items-center all">
											<span class="icon d-flex align-items-center justify-content-center">
												<span class="ic icon-arrow-right"></span>
											</span>
                                <span class="value">всі послуги</span>
                            </x-splade-link>
                        </div>
                        <div class="item d-xl-flex align-items-center">
                            <div class="item-info">
                                <div class="item-title">Продукти</div>
                                <div class="anons">{!! __('pages.about.offer_products') !!}</div>
                            </div>
                            <x-splade-link href="{{ $appPages['products'] }}" class="link-default-back d-inline-flex align-items-center all">
											<span class="icon d-flex align-items-center justify-content-center">
												<span class="ic icon-arrow-right"></span>
											</span>
                                <span class="value">всі Продукти</span>
                            </x-splade-link>
                        </div>
                        <div class="item d-xl-flex align-items-center">
                            <div class="item-info">
                                <div class="item-title">Товари</div>
                                <div class="anons">{!! __('pages.about.offer_goods') !!}</div>
                            </div>
                            <x-splade-link href="{{ $appPages['goods'] }}" class="link-default-back d-inline-flex align-items-center all">
											<span class="icon d-flex align-items-center justify-content-center">
												<span class="ic icon-arrow-right"></span>
											</span>
                                <span class="value">всі Товари</span>
                            </x-splade-link>
                        </div>
                        <div class="item d-xl-flex align-items-center">
                            <div class="item-info">
                                <div class="item-title">Навчання</div>
                                <div class="anons">{!! __('pages.about.offer_study') !!}</div>
                            </div>
                            <x-splade-link href="{{ $appPages['study'] }}" class="link-default-back d-inline-flex align-items-center all">
											<span class="icon d-flex align-items-center justify-content-center">
												<span class="ic icon-arrow-right"></span>
											</span>
                                <span class="value">детальніше</span>
                            </x-splade-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clients-section">
                <div class="title-container d-lg-flex align-items-start justify-content-between">
                    <div class="title">{!! __('pages.about.clients_title') !!}</div>
                    <div class="title-info">
                        <div class="anons">{!! __('pages.about.clients_text') !!}</div>
                        <x-splade-link href="{{ $appPages['projects'] }}" class="link-default-back d-inline-flex align-items-center all">
										<span class="icon d-flex align-items-center justify-content-center">
											<span class="ic icon-arrow-right"></span>
										</span>
                            <span class="value">реалізовані проекти</span>
                        </x-splade-link>
                    </div>
                </div>
                <div class="clients-logos">
                    <div class="logos-container d-flex flex-wrap">
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k1.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k2.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k3.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k4.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k5.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k6.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k7.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k8.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k9.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k10.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k11.png" alt="">
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="images/k12.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

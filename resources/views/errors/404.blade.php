@extends('app.layout.app')

@section('content')
    <div class="container-fluid relative">
        <div class="grid-main">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
            <div class="line-4"></div>
        </div>
        <section class="error-404 d-xl-flex align-items-start header-fix">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <div class="error-image order-12">
                <div class="anim">
                    <lottie-player src="/images/404.json" background="transparent" speed="1"
                                   style="width: 250px; height: 311px;" loop autoplay></lottie-player>
                </div>
                <img src="/images/404.svg" alt="">
            </div>
            <div class="error-info">
                <div class="title">Шкода, але ця сторінка недоступна</div>
                <div class="anons">Можливо посилання було пошкоджено або сторінки більше не існує.</div>
                <a href="/" class="button-default error-button d-inline-flex align-items-center">
                    <span class="value">повернутись на головну</span>
                    <span class="ic icon-arrow-right"></span>
                </a>
                <div class="error-text">Спробуйте пошукати потрібну інформацію в популярних розділах</div>
                <div class="error-links">
                    <a href="#" class="item">Послуги</a>
                    <a href="#" class="item">Продукти</a>
                    <a href="#" class="item">Товари</a>
                </div>
            </div>
        </section>
    </div>
@endsection

@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="news-detail header-fix relative">
            <div class="grid-main inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <div class="top-container ">
                <div class="">
                    <div class="breadcrumps  black">
                        <ul class="nav flex-wrap">
                            <li>
                                <x-splade-link href="/">Головна</x-splade-link>
                            </li>
                            <li>
                                <x-splade-link :href="$appPages['news']">Новини</x-splade-link>
                            </li>
                            <li>
                                <span class="current">Вебінар для бухгалтера</span>
                            </li>
                        </ul>
                    </div>
                    <div class="text-right h-0">
                        <x-splade-link :href="$appPages['news']" class="link-back back d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">назад до новин</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </x-splade-link>
                    </div>
                </div>
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="news-container">
                <div class="detail-top d-flex align-items-center">
                    @foreach($post->categories as $c)
                        <div class="category">{{ $c->name }}</div>
                    @endforeach
                    <div class="date">{{ $post->created_at }}</div>
                </div>
                <div class="detail-image">
                    <img src="{{ $post->getFirstMedia('image')->originalUrl }}" alt="" class="parallax">
                </div>
                <div class="d-lg-flex justify-content-between">
                    <div class="detail-content order-12">

                        {!! $post->description !!}

                        {!! $post->content !!}

                    </div>
                    <div class="news-share">
                        <div class="share-container">
                            <div class="share-title">
                                Поділитися в соціальних мережах
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="item d-flex align-items-center justify-content-center">
                                    <span class="ic icon-fb"></span>
                                </a>
                                <a href="#" class="item d-flex align-items-center justify-content-center">
                                    <span class="ic icon-linkedin"></span>
                                </a>
                            </div>
                        </div>
                        <div class="share-container">
                            <div class="share-title">Якщо в вас виникли запитанни, пишить нам на поту</div>
                            <a href="mailto:{{ settings('info_email') }}" class="email d-flex align-items-center">
                                    <span class="ic d-flex align-items-center justify-content-center"><img
                                            src="/images/email.svg" alt=""></span>
                                <div class="value">{{ settings('info_email') }}</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other-news">
                <div class="title-container d-md-flex align-items-center justify-content-between">
                    <div class="h1">Інші новини</div>
                    <x-splade-link :href="$appPages['news']" class="link-default-back d-inline-flex align-items-center all">
									<span class="icon d-flex align-items-center justify-content-center">
										<span class="ic icon-arrow-right"></span>
									</span>
                        <span class="value">більше новин</span>
                    </x-splade-link>
                </div>
                <div class="news-list">
                    <div class="row gutters-22">
                        @foreach($otherNews as $post)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="item d-flex flex-column align-items-start justify-content-between">
                                    <x-splade-link :href="$post->url" class="item-image ">
                                        <img class="parallax" src="{{ $post->getFirstMedia('image')->originalUrl }}" alt="">
                                    </x-splade-link>
                                    <div class="item-info">
                                        <div class="d-flex align-items-center">
                                            @foreach($post->categories as $c)
                                                <div class="category">{{ $c->name }}</div>
                                            @endforeach
                                            <span class="date">13 Грудня 2022</span>
                                        </div>
                                        <x-splade-link :href="$post->url" class="name">{{ $post->title }}</x-splade-link>
                                    </div>
                                    <div class="button-container">
                                        <x-splade-link :href="$post->url" class="link-default item-link d-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </x-splade-link>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

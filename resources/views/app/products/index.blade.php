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
                            <span class="current">Продукти</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>{{ $page->title }}</h1>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-2.png" alt=""></div>
    </div>
    <div class="container-fluid">
        <div class="catalog-page">

            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="catalog-top">
                <div class="title">{!! __('pages.products.heading') !!}</div>
                <div class="lines"><img src="/images/lines-4.svg" alt=""></div>
            </div>
            <div class="catalog-items">
                @foreach($categories as $cIndex => $category)
                    <div class="item-big d-lg-flex align-items-start justify-content-between">
                        <div class="big-images">
                            <div class="icon"><img src="{{ $category->getFirstMedia('image')?->originalUrl }}" alt=""></div>
                            <div class="bg"><img src="{{ $category->getFirstMedia('background')?->originalUrl }}" alt=""></div>
                        </div>
                        <div class="big-info">
                            <div class="number">{{ $cIndex < 10 ? '0' : '' }}{{ $cIndex + 1 }}</div>
                            <div class="name">{{ $category->name }}</div>
                            {!! $category->description_short !!}

                            <a href="#" class="button-default  d-inline-flex align-items-center"
                               data-toggle="modal"
                               data-target="#m-feed"
                               @click="state.shared.feedback.type = 'consult'"
                            >
                                <span class="value">отримати консультацію</span>
                                <span class="ic icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>

                    <div class="items d-md-flex flex-wrap align-items-start justify-content-between">

                        <x-splade-toggle>
                            @foreach($category->products as $i => $product)
                                <div class="item" @if($i > 1) v-show="toggled" @endif>
                                    <div class="item-icon">
                                        {!! $product->icon !!}
                                    </div>
                                    <div class="item-name">{{ $product->name }}</div>
                                    <div class="item-links d-inline-flex flex-wrap align-items-start">
                                        @foreach($product->options as $option)
                                            <x-splade-link :href="$product->url . '?option_id=' . $option->id" class="link-default d-inline-flex align-items-center">
                                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                                <span class="value">{{ $option->name }}</span>
                                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                            </x-splade-link>
                                        @endforeach
                                    </div>
                                    {!! $product->description_short !!}
                                    <x-splade-link :href="$product->url" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </x-splade-link>
                                </div>
                            @endforeach

                            <button v-if="!toggled" @click.prevent="toggle" class="button-more d-flex align-items-center justify-content-center mb-5">
                                <span class="value">показати більше</span>
                                <span class="ic icon-more"></span>
                            </button>

                            <button v-if="toggled" @click.prevent="setToggle(false)" class="button-more d-flex align-items-center justify-content-center mb-5">
                                <span class="value">приховати</span>
                                <span class="ic icon-more"></span>
                            </button>
                        </x-splade-toggle>

                    </div>

                @endforeach

            </div>

            <div class="catalog-others">
                @foreach($products as $pIndex => $product)
                    <div class="item d-md-flex align-items-start justify-content-between">
                        <div class="item-images">
                            <div class="i-bg"><img src="{{ $product->getFirstMedia('background')?->originalUrl }}" alt=""></div>
                            <div class="i-icon d-flex align-items-center justify-content-center">
                                <img src="{{ $product->getFirstMedia('image')?->originalUrl }}" alt="">
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="number">{{ ($cIndex + $pIndex) < 10 ? '0' : '' }}{{ $cIndex + $pIndex + 2 }}</div>
                            <div class="name">{{ $product->name }}</div>
                            {!! $product->description_short !!}

                            <x-splade-link :href="$product->url" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">детальніше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </x-splade-link>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="projects-small">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-start justify-content-between">
                            <div class="title-info">
                                <div class="title">{!! __('pages.products.projects_title') !!}</div>
                                <div class="anons">{!! __('pages.products.projects_text') !!}</div>
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

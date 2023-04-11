@extends('app.layout.app')

@section('content')

    <div class="main-container inner">
        <div class="info-container">
            <div class="container-fluid">
                <div class="breadcrumps">
                    <ul class="nav flex-wrap">
                        <li>
                            <a href="/">Головна</a>
                        </li>
                        <li>
                            <span class="current">Товари</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>{{ $page->title }}</h1>
                </div>
            </div>
        </div>
        <div class="video">
            <video autoplay loop muted>
                <source src="/images/video.mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>
    <div class="container-fluid relative">
        <section class="products d-xl-flex">
            <div class="products-aside">
                <div class="aside-container">
                    <div class="aside-menu">
                        <div class="menu-title">Каталог товарів</div>
                        <ul class="nav flex-column">
                            @foreach($categories as $category)
                                <li>
                                    <x-splade-link :href="$category->url"
                                                   class="nav-item {{ isset($mainCategory) ? $category->id === $mainCategory->id ? 'active' : '' : '' }}"
                                    >{{ $category->name }}</x-splade-link>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="filter">
                    <div class="filter-title">Фільтр</div>
                    <button class="filter-button d-flex d-xl-none align-items-center justify-content-center"><img
                            src="/images/filter.svg" alt="" class="ic"><span class="value">Фильтр</span></button>
                    <div class="filter-inner">
                        <div class="filter-head d-flex d-xl-none align-items-center justify-content-between">
                            <div class="filter-title">Фильтр</div>
                            <button class="ico filter-close"><span class="ic icon-close"></span></button>
                        </div>
                        <form>
                            <div class="filter-container">
                                <div class="filter-name">Ціна</div>
                                <div class="filter-container-inner ">
                                    <div class="slider-container">
                                        <div
                                            class="info-container d-flex align-items-center justify-content-between">
                                            <div class="inputs d-flex align-items-center">
                                                <input type="text" name="min" v-model="state.shared.filter.form.price_from" id="p_min" :data-min="state.shared.filter.minPrice">
                                                <span class="sep">-</span>
                                                <input type="text" name="max" v-model="state.shared.filter.form.price_to" id="p_max" data-max="{{ $maxPrice }}">
                                            </div>
                                            <input type="submit" class="submit" name="submit" value="ok" @click.prevent="$splade.filter($splade)">
                                        </div>
                                        <div id="filter-price"></div>
                                    </div>
                                </div>
                            </div>
                            @foreach($attributes as $attribute)
                                <div class="filter-container">
                                    <div class="filter-name d-flex align-items-center justify-content-between "
                                         data-toggle="collapse" data-target="#filter-{{ $attribute->id }}" aria-expanded="false"
                                         aria-controls="collapseExample">
                                        <span class="value">{{ $attribute->name }}</span>
                                        <span class="ic icon-caret-right"></span>
                                    </div>
                                    <div class="filter-container-inner collapse show" id="filter-{{ $attribute->id }}">
                                        <div class="inner-cont">
                                            <div class="checkboxes">
                                                @foreach($attributeValues[$attribute->id] as $i => $value)
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="forma-1" id="att-{{ $attribute->id }}-{{ $i }}" value="{{ $value['value'] }}" v-model="state.shared.filter.form.attrs[{{ $attribute->id }}][{{ $i }}]">
                                                        <label for="att-{{ $attribute->id }}-{{ $i }}">{{ $value['value'] }} ({{ $value['count'] }})</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
            <div class="products-container">
                <div class="products-sort d-flex flex-wrap align-items-start">
                    <div class="value">Сортувати по:</div>
                    <div class="d-flex flex-wrap">
                        <a href="#" class="item"
                           :class="{active: $splade.sharedData.value.filter.form.sort === 'default'}"
                           @click.prevent="$splade.sharedData.value.filter.form.sort = 'default'"
                        >По популярності</a>
                        <a href="#" class="item"
                           :class="{active: $splade.sharedData.value.filter.form.sort === 'price'}"
                           @click.prevent="$splade.sharedData.value.filter.form.sort = 'price'"
                        >Від дешевих до дорогих</a>
                        <a href="#" class="item"
                           :class="{active: $splade.sharedData.value.filter.form.sort === 'price_desc'}"
                           @click.prevent="$splade.sharedData.value.filter.form.sort = 'price_desc'"
                        >Від дорощих до дешевших</a>
                        <a href="#" class="item"
                           :class="{active: $splade.sharedData.value.filter.form.sort === 'alpha'}"
                           @click.prevent="$splade.sharedData.value.filter.form.sort = 'alpha'"
                        >По алфавіту</a>
                    </div>
                </div>
                <div class="products-list">
                    <div class="row gutters-11">
                        @foreach($goods as $good)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="item">
                                    <div class="item-container d-flex flex-column">
                                        <div class="item-top">
                                            <x-splade-link :href="$good->url"
                                                           class="item-image d-flex align-items-center justify-content-center">
                                                <img src="{{ $good->getFirstMedia('image')?->originalUrl }}" alt="">
                                            </x-splade-link>
                                            <x-splade-link :href="$good->url" class="item-name">Касовий апарат Гера MG-V545T.02 + БЖ + GSM</x-splade-link>
                                        </div>
                                        <div class="item-bottom">
                                            <div class="item-price">{{ $good->price }} грн.</div>
                                            <x-splade-link :href="$good->url" class="item-buy button-small">
                                                <span class="value">замовити</span>
                                            </x-splade-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                    <button class="button-more d-flex align-items-center justify-content-center">--}}
{{--                        <span class="value">показати більше</span>--}}
{{--                        <span class="ic icon-more"></span>--}}
{{--                    </button>--}}
                </div>
            </div>
        </section>
    </div>

@endsection

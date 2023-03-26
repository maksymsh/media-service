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
                            <span class="current">Реєстратори розрахункових операцій</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>Реєстратори <br/>розрахункових операцій</h1>
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
                            <li>
                                <a href="#" class="nav-item">Реєстратори розрахункових операцій</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Сканери штрихкодів</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Принтери чеків</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Термінали самообслуговування</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Витратні матеріали</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Грошові скриньки</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">POS- системи</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Принтери етикеток</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Термінали збору данних</a>
                            </li>
                            <li>
                                <a href="#" class="nav-item">Лічильники банкнот</a>
                            </li>
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
                                                <input type="text" name="min" value="" id="p_min">
                                                <span class="sep">-</span>
                                                <input type="text" name="max" value="" id="p_max">
                                            </div>
                                            <input type="submit" class="submit" name="submit" value="ok">
                                        </div>
                                        <div id="filter-price"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-name d-flex align-items-center justify-content-between "
                                     data-toggle="collapse" data-target="#filter-2" aria-expanded="false"
                                     aria-controls="collapseExample">
                                    <span class="value">Інтерфейс</span>
                                    <span class="ic icon-caret-right"></span>
                                </div>
                                <div class="filter-container-inner collapse show" id="filter-2">
                                    <div class="inner-cont">
                                        <div class="checkboxes">
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-1" id="forma-1">
                                                <label for="forma-1">1 x USB Touch, 1 x USB MSR (22)</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-2" id="forma-2">
                                                <label for="forma-2">1 x 12 B DC-out (12)</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-3" id="forma-3">
                                                <label for="forma-3">1 x mini PCIe (6)</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-4" id="forma-4">
                                                <label for="forma-4">1 x Power input (1)</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-5" id="forma-5">
                                                <label for="forma-5">1 x Мікрофон (12)</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-6" id="forma-6">
                                                <label for="forma-6">6 x USB, 3 x RS-232, Ethernet (20)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-name d-flex align-items-center justify-content-between collapsed"
                                     data-toggle="collapse" data-target="#filter-3" aria-expanded="false"
                                     aria-controls="collapseExample">
                                    <span class="value">Автообрізчик</span>
                                    <span class="ic icon-caret-right"></span>
                                </div>
                                <div class="filter-container-inner collapse" id="filter-3">
                                    <div class="inner-cont">
                                        <div class="checkboxes">
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-13" id="forma-13">
                                                <label for="forma-13">Не обов’язково</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-14" id="forma-14">
                                                <label for="forma-14">Мінімальний рівень </label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-15" id="forma-15">
                                                <label for="forma-15">Середній рівень</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="forma-155" id="forma-155">
                                                <label for="forma-155">Високий рівень</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="products-container">
                <div class="sub-menu">
                    <div class="row gutters-11">
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="#" class="sub-item d-flex align-items-center active">
                                <div class="item-image">
                                    <img src="/images/sub1.png" alt="">
                                </div>
                                <div class="item-name">Касові апарати</div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="#" class="sub-item d-flex align-items-center">
                                <div class="item-image">
                                    <img src="/images/sub2.png" alt="">
                                </div>
                                <div class="item-name">Фіскальні реєстратори</div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="#" class="sub-item d-flex align-items-center">
                                <div class="item-image">
                                    <img src="/images/sub3.png" alt="">
                                </div>
                                <div class="item-name">Дисплеї покупця</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="products-sort d-flex flex-wrap align-items-start">
                    <div class="value">Сортувати по:</div>
                    <div class="d-flex flex-wrap">
                        <a href="#" class="item active">По популярності</a>
                        <a href="#" class="item">Від дешевих до дорогих</a>
                        <a href="#" class="item">Від дорощих до дешевших</a>
                        <a href="#" class="item">По алфавіту</a>
                    </div>
                </div>
                <div class="products-list">
                    <div class="row gutters-11">
                        @foreach($goods as $good)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="item">
                                    <div class="item-container d-flex flex-column">
                                        <div class="item-top">
                                            <x-splade-link href="{{ route('goods.good', $good->id) }}"
                                                           class="item-image d-flex align-items-center justify-content-center">
                                                <img src="{{ $good->getFirstMedia('image')->originalUrl }}" alt="">
                                            </x-splade-link>
                                            <x-splade-link href="{{ route('goods.good', $good->id) }}" class="item-name">Касовий апарат Гера MG-V545T.02 + БЖ + GSM</x-splade-link>
                                        </div>
                                        <div class="item-bottom">
                                            <div class="item-price">{{ $good->price }} грн.</div>
                                            <a href="{{ route('goods.good', $good->id) }}" class="item-buy button-small">
                                                <span class="value">замовити</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="button-more d-flex align-items-center justify-content-center">
                        <span class="value">показати більше</span>
                        <span class="ic icon-more"></span>
                    </button>
                </div>
            </div>
        </section>
    </div>

@endsection

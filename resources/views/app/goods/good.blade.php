@extends('app.layout.app')

@section('content')

    <div class="container-fluid relative">
        <section class="product-detail header-fix">
            <div class="detail-top d-lg-flex align-items-start justify-content-between">
                <div class="detail-gallery">
                    <div class="gallery-container">
                        <div class="slider-container">
                            <div class="big-slider">
                                <div class="slide">
                                    <div class="item d-flex align-items-center justify-content-center">
                                        <img src="{{ $good->getFirstMedia('image')->originalUrl }}" alt=""></div>
                                </div>
                                @foreach($good->getMedia('images') as $image)
                                    <div class="slide">
                                        <div class="item d-flex align-items-center justify-content-center">
                                            <img src="{{ $image->originalUrl }}" alt=""></div>
                                    </div>
                                @endforeach
                                <div class="slide">
                                    <div class="item d-flex align-items-center justify-content-center">
                                        <a href="https://youtu.be/fdk7yCMnre8" class="thumb-video" data-fancybox>
                                            <div class="play-button"><span class="ic icon-play"></span></div>
                                            <img src="/images/v2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-slider">
                                <div class="slide">
                                    <div class="item d-flex align-items-center justify-content-center">
                                        <img src="{{ $good->getFirstMedia('image')->originalUrl }}" alt=""></div>
                                </div>
                                @foreach($good->getMedia('images') as $image)
                                    <div class="slide">
                                        <div class="item d-flex align-items-center justify-content-center">
                                            <img src="{{ $image->originalUrl }}" alt=""></div>
                                    </div>
                                @endforeach
                                <div class="slide">
                                    <div class="item d-flex align-items-center justify-content-center">
                                        <a href="https://youtu.be/fdk7yCMnre8" class="thumb-video" data-fancybox>
                                            <div class="play-button"><span class="ic icon-play"></span></div>
                                            <img src="/images/v.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-info">
                    <x-splade-link href="{{ route('goods.index') }}" class="link-back d-inline-flex align-items-center">
                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                        <span class="value">ПОВЕРНУТИСЬ ДО КАТАЛОГУ</span>
                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                    </x-splade-link>
                    <div class="breadcrumps black">
                        <ul class="nav flex-wrap">
                            <li>
                                <a href="/">Головна</a>
                            </li>
                            <li>
                                <span class="current">Реєстратори розрахункових операцій</span>
                            </li>
                        </ul>
                    </div>
                    <h1>{{ $good->name }}</h1>
                    <div class="gallery-move"></div>
                    <div class="info-props">
                        <div class="props-container">
                            @foreach($good->attributes as $att)
                                <div class="props-item d-flex align-items-start justify-content-between">
                                    <div class="data">{{ $att->attribute->name }}</div>
                                    <div class="value">{{ $att->value }}</div>
                                </div>
                            @endforeach
                        </div>
                        <button class="link-more props-button d-flex align-items-center">
                            <div class="value">вСІ ХАРАКТЕРИСТИКИ</div>
                            <div class="ic"><img src="/images/arrow-down2.svg" alt=""></div>
                        </button>
                    </div>
                    <div class="detail-buy d-md-flex align-items-center justify-content-between">
                        <div class="price">
                            {{ $good->price }} <span>ГРН</span>
                        </div>
                        <button class="button-default buy d-inline-flex align-items-center justify-content-center"
                                data-toggle="modal"
                                data-target="#m-feed"
                                @click="state.shared.feedback.type = 'order_good';state.shared.feedback.id = '{{ $good->id }}';"
                        >
                            <span class="value">Замовити</span>
                            <span class="ic icon-arrow-right"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="d-lg-flex justify-content-between detail-bottom align-items-start">
                <div class="detail-left">
                    <div class="detail-video">
                        <div class="video-title">Огляд на товар
                            <span>“Касовий апарат Гера MG-V545T.02 + БЖ + GSM”</span></div>
                        <a href="https://youtu.be/fdk7yCMnre8" class="video-container" data-fancybox>
                            <div class="play-button anim"><img src="/images/video2.svg" alt=""></div>
                            <img src="/images/video.jpg" alt="">
                        </a>
                    </div>
                    <div class="detail-props">
                        <div class="title-small">Характиристики</div>
                        <div class="props-container">
                            @foreach($good->attributes as $att)
                                <div class="props-item d-flex align-items-start justify-content-between">
                                    <div class="data">{{ $att->attribute->name }}</div>
                                    <div class="value">{{ $att->value }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="detail-downloads">
                        <div class="title-small">Документи та Програмне забезпечення</div>
                        <a href="#" class="down-item d-flex align-items-center">
                                <span class="icon d-flex align-items-center justify-content-center"><span
                                        class="ic icon-download"></span></span>
                            <div class="value">General Questions about HomeShield Pro Service</div>
                        </a>
                        <a href="#" class="down-item d-flex align-items-center">
                                <span class="icon d-flex align-items-center justify-content-center"><span
                                        class="ic icon-download"></span></span>
                            <div class="value">General Questions about HomeShield Pro Service</div>
                        </a>
                    </div>
                    <div class="detail-quest d-xl-flex align-items-start justify-content-between">
                        <div class="">
                            <div class="title-small">Виникли запитання?</div>
                            <div class="anons">Ви можете поставити будь-яке вас питання по товару або роботі
                                магазину.Наші кваліфіковані фахівці обов'язково вам допоможуть.
                            </div>
                        </div>
                        <button class="button-border button-quest">задати питання</button>
                    </div>
                </div>
                <div class="detail-right">
                    <div class="detail-reviews">
                        <div class="reviews-title">Відгуки про
                            <span>“Касовий апарат Гера MG-V545T.02 + БЖ + GSM”</span></div>
                        <button class="button-border button-review">залишити відгук</button>
                        <div class="items">
                            <div class="review-item">
                                <div class="item-top d-flex align-items-start justify-content-between">
                                    <div class="top-left">
                                        <div class="name">Віктор Розовий</div>
                                        <div class="raiting d-flex">
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span ></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date">14 Грудня 2022</div>
                                </div>
                                <div class="review">Користуємося 5-й місяць, нереально крутий пристрій, швидкий,
                                    багатофункціональний.
                                </div>
                            </div>
                            <div class="review-item">
                                <div class="item-top d-flex align-items-start justify-content-between">
                                    <div class="top-left">
                                        <div class="name">Представник компаніі “Mediaservice”</div>
                                        <div class="answer">Відповіть</div>
                                    </div>
                                    <div class="date">14 Грудня 2022</div>
                                </div>
                                <div class="review">Дякуэмо за позитивний відгук!</div>
                            </div>
                            <div class="review-item">
                                <div class="item-top d-flex align-items-start justify-content-between">
                                    <div class="top-left">
                                        <div class="name">Віктор Розовий</div>
                                        <div class="raiting d-flex">
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span ></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date">14 Грудня 2022</div>
                                </div>
                                <div class="review">Користуємося 5-й місяць, нереально крутий пристрій, швидкий,
                                    багатофункціональний.
                                </div>
                            </div>
                            <div class="review-item">
                                <div class="item-top d-flex align-items-start justify-content-between">
                                    <div class="top-left">
                                        <div class="name">Віктор Розовий</div>
                                        <div class="raiting d-flex">
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span class="star-full icon-star"></span>
                                            </div>
                                            <div class="star">
                                                <span class="star-empty icon-star"></span>
                                                <span ></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date">14 Грудня 2022</div>
                                </div>
                                <div class="review">Користуємося 5-й місяць, нереально крутий пристрій, швидкий,
                                    багатофункціональний.
                                </div>
                            </div>
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">всі відгуки</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="products-more">
                <div class="title-container d-md-flex align-items-center justify-content-between">
                    <div class="title">Товари з цієї категорії</div>
                    <div class="slider-navs"></div>
                </div>
                <div class="products-slider products-list">
                    @foreach($goods as $g)
                        <div class="slide">
                            <div class="item">
                                <div class="item-container d-flex flex-column">
                                    <div class="item-top">
                                        <x-splade-link :href="$g->url" class="item-image d-flex align-items-center justify-content-center">
                                            <img src="{{ $g->getFirstMedia('image')->originalUrl }}" alt="">
                                        </x-splade-link>
                                        <x-splade-link :href="$g->url" class="item-name">{{ $g->name }}</x-splade-link>
                                    </div>
                                    <div class="item-bottom">
                                        <div class="item-price">{{ $g->price }} грн.</div>
                                        <x-splade-link :href="$g->url" class="item-buy button-small">
                                            <span class="value">замовити</span>
                                        </x-splade-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection

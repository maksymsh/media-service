@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="service-detail-page header-fix">
            <div class="lines"><img src="/images/lines2.svg" alt=""></div>
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="detail-top ">
                <div class="d-lg-flex align-items-center">
                    <div class="breadcrumps  black">
                        <ul class="nav flex-wrap">
                            <li>
                                <a href="/">Головна</a>
                            </li>
                            <li>
                                <a href="/">Продукти</a>
                            </li>
                            <li>
                                <span class="current">{{ $product->name }}</span>
                            </li>
                        </ul>
                    </div>
                    <x-splade-link :href="$appPages['products']" class="link-back back d-inline-flex align-items-center">
                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                        <span class="value">назад до продуктів</span>
                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                    </x-splade-link>
                </div>
                <h1>{{ $product->name }}</h1>
                @if($option)
                    <p>{{ $option->name }}</p>
                @endif
                <div class="price">Вартість продукту {{ $product->price }} грн.</div>
            </div>
            <div class="detail-info  d-lg-flex justify-content-between">
                <div class="anons order-12">
                    {!! $product->description_short !!}

                    {!! $product->description !!}

                    <div class="for-menus">
                        @foreach($product->usage as $i => $usage)
                            <div class="solutions-item solutions-item--solution" id="menu-{{ $i }}">
                                <div class="title-small">{{ $usage['title'] }}</div>
                                <p>{!! $usage['text'] !!}</p>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="info-left">
                    <a href="#" class="button-default feed d-inline-flex align-items-center justify-content-center"
                       data-toggle="modal"
                       data-target="#m-feed"
                       @click="state.shared.feedback.type = 'demo'"
                    >
                        <span class="value">демо доступ</span>
                        <span class="ic icon-arrow-right"></span>
                    </a>
                    <div class="info-menu">
                        <div class="menu-title">Типи використання</div>
                        <nav class="menu-left">
                            <ul class="nav flex-column">

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="inner-form">
            <div class="bg-container">
                <div class="container-fluid">
                    <div class="form-inner">
                        <div class="grid-form">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <div class="line-3"></div>
                            <div class="line-4"></div>
                        </div>
                        <div class="form-top d-lg-flex align-items-start">
                            <div class="form-title">
                                <div class="title">Шукаєте рішення <br/>для свого бізнесу?</div>
                                <div class="anons">Заповніть форму нижче і ми вам зателефонуємо!</div>
                            </div>
                            <div class="form-contacts">
                                <div class="title">Контакти</div>
                                <a href="tel:(032) 242-07-27" class="item">(032) 242-07-27</a>
                                <a href="mailo:sales@medias.com.ua" class="item">sales@medias.com.ua</a>
                            </div>
                        </div>
                        <div class="modal-form white">
                            <form action="" class="form">
                                <div class="form-container d-md-flex">
                                    <div class="form-left">
                                        <div class="input-container">
                                            <label class="label">Ваше ім’я</label>
                                            <input type="text" class="input" name="imya" autocomplete="off">
                                        </div>
                                        <div class="input-container">
                                            <label class="label">Ваш email*</label>
                                            <input type="text" class="input email important" name="email"
                                                   autocomplete="off">
                                        </div>
                                        <div class="input-container">
                                            <label class="label">Номер телефону</label>
                                            <input type="text" class="input phone" name="phone" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-right">
                                        <div class="input-container">
                                            <label class="label">Повідомлення</label>
                                            <textarea name="message" class="textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-bottom d-md-flex">
                                    <div class="bottom-left">
                                        <div class="checkbox">
                                            <input type="checkbox" name="politica1" id="politica1"
                                                   class="check important">
                                            <label for="politica1">Даю згоду на обробку персональних данних, згідно
                                                з <a href="#">політикою конфіденційності</a></label>
                                        </div>
                                    </div>
                                    <div class="bottom-right">
                                        <button
                                            class="button-default white bgl submit d-flex align-items-center justify-content-center"
                                            type="submit">
                                            <span class="value">надіслати</span>
                                            <span class="ic icon-arrow-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="other-services">
            <div class="grid-other">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <div class="other-container d-xl-flex align-items-start justify-content-between">
                <div class="title">Інші <br/>послуги</div>
                <div class="other-items d-md-flex flex-wrap ">
                    @foreach($services as $service)
                        <div class="item-col">
                            <div class="col-item">
                                <div class="col-icon">
                                    <img src="{{ $service->getFirstMedia('background')?->originalUrl }}" alt="">
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
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/o11.svg" alt="">
                            </div>
                            <div class="col-name">PROСкануй</div>
                            <div class="col-anons">Програмні рішення для створення комплексних систем автоматизації
                                бізнесу
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/o22.svg" alt="">
                            </div>
                            <div class="col-name">PROДавай</div>
                            <div class="col-anons">П'ять великих інструментів, які допомагають бізнесу ефективно
                                працювати
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/o33.svg" alt="">
                            </div>
                            <div class="col-name">Dilosoft</div>
                            <div class="col-anons">Галузеве рішення призначене для роботи зі специфічним
                                асортиментом
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/o44.svg" alt="">
                            </div>
                            <div class="col-name">CRM-системи</div>
                            <div class="col-anons">П'ять великих інструментів, які допомагають бізнесу ефективно
                                працювати
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

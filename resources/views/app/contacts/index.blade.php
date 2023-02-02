@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="contacts-page header-fix relative">
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
                                <span class="current">Контакти</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1>Контакти</h1>
            </div>
            <div class="contacts-items d-flex justify-content-between">
                <div class="contact-item item-1">
                    <div class="contact-container">
                        <div class="contact-title">Відділ продажу</div>
                        <a href="tel:0322420727" class="item">(032) 242-07-27</a>
                        <a href="mailto:sales@medias.com.ua" class="item">sales@medias.com.ua</a>
                    </div>
                    <div class="contact-container">
                        <div class="contact-title">Бухгалтерія</div>
                        <a href="tel:0322422447" class="item">(032) 242-07-27</a>
                    </div>
                </div>
                <div class="contact-item item-2">
                    <div class="contact-container">
                        <div class="contact-title">Служба підтримки</div>
                        <a href="tel:(032) 242-42-43" class="item">(032) 242-42-43</a>
                        <a href="tel:(032) 240-00-36" class="item">(032) 240-00-36</a>
                        <a href="tel:(067) 671-24-47" class="item">(067) 671-24-47</a>
                        <a href="tel:(050) 376-74-99" class="item">(050) 376-74-99</a>
                    </div>
                </div>
                <div class="contact-item item-3">
                    <div class="contact-container">
                        <div class="contact-title">WEB відділ</div>
                        <a href="mailto:web@medias.com.ua" class="item">web@medias.com.ua</a>
                    </div>
                    <div class="contact-container">
                        <div class="contact-title">Питання співпраці</div>
                        <a href="mailto:partners@medias.com.ua" class="item">partners@medias.com.ua</a>
                    </div>
                    <div class="contact-container">
                        <div class="contact-title">HR-відділ та рекрутмент</div>
                        <a href="mailto:hr@medias.com.ua" class="item">hr@medias.com.ua</a>
                    </div>
                </div>
                <div class="contact-item item-4">
                    <div class="contact-container">
                        <div class="contact-title">КонсультаціЇ по продуктах лінійки BAS</div>
                        <a href="mailto:hotline@medias.com.ua" class="item">hotline@medias.com.ua</a>
                    </div>
                    <div class="contact-container support">
                        <div class="contact-title">Відділ обслуговування торгового обладнання та фіскальної
                            техніки
                        </div>
                        <a href="mailto:cso@medias.com.ua" class="item">cso@medias.com.ua</a>
                    </div>
                </div>
            </div>
            <div class="contacts-adres d-xl-flex justify-content-between">
                <div class="title">Як нас знайти?</div>
                <div class="d-md-flex adres-items">
                    <div class="adres-item">
                        <div class="contact-title">Адреса</div>
                        <div class="item">м. Львів, вул. Наукова, 7а <br/>(3й поверх)</div>
                        <a href="#" class="link-default item-link d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">прокласи маршрут</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="adres-item">
                        <div class="contact-title">Графік роботи</div>
                        <div class="item">Пн.-Пт. з 9:30 до 18:00 <br/>(крім святкових днів)</div>
                    </div>
                </div>
            </div>
            <div class="contacts-map">
                <div class="map-container"><img src="/images/map.jpg" alt=""></div>
            </div>
            <div class="contacts-feed d-xl-flex justify-content-between">
                <div class="feed-share">
                    <div class="title">Зв’яжіться з нами</div>
                    <div class="anons">Надішліть нам повідомлення через будь-який з месенджерів або заповніть форму
                        на сайті і ми вам відповімо.
                    </div>
                    <div class="feed-seti d-flex align-items-center">
                        <a href="#" class="item d-flex align-items-center justify-content-center">
                            <span class="icon"><img src="/images/tg.svg" alt=""></span>
                            <span class="value">Telegram</span>
                        </a>
                        <a href="#" class="item d-flex align-items-center justify-content-center">
                            <span class="icon"><img src="/images/vb.svg" alt=""></span>
                            <span class="value">Viber</span>
                        </a>
                    </div>
                    <div class="share">
                        <div class="share-title">Ми в соціальних мережах</div>
                        <div class="d-flex align-items-center">
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-fb"></span></a>
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-instagram"></span></a>
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-youtube"></span></a>
                            <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                    class="ic icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="feed-form">
                    <div class="modal-form">
                        <form action="" class="form">
                            <div class="form-container">
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
                                <div class="input-container">
                                    <label class="label">Повідомлення</label>
                                    <textarea name="message" class="textarea"></textarea>
                                </div>
                            </div>
                            <div class="form-bottom d-md-flex">
                                <div class="bottom-left">
                                    <div class="checkbox">
                                        <input type="checkbox" name="politica" id="politica"
                                               class="check important">
                                        <label for="politica">Даю згоду на обробку персональних данних, згідно з <a
                                                href="#">політикою конфіденційності</a></label>
                                    </div>
                                </div>
                                <div class="bottom-right">
                                    <button
                                        class="button-default bgl submit d-flex align-items-center justify-content-center"
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
        </section>
    </div>

@endsection

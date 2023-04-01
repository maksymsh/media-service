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
                                <x-app.link href="/">Головна</x-app.link>
                            </li>
                            <li>
                                <span class="current">Контакти</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1>{!! $page->title !!}</h1>
            </div>
            <div class="contacts-items d-flex justify-content-between">
                <div class="contact-item item-1">
                    <div class="contact-container">
                        <div class="contact-title">Відділ продажу</div>
                        <a href="tel:{{ rawPhone(settings('sales_phone')) }}" class="item">{{ settings('sales_phone') }}</a>
                        <a href="mailto:{{ settings('sales_email') }}" class="item">{{ settings('sales_email') }}</a>
                    </div>
                    <div class="contact-container">
                        <div class="contact-title">Бухгалтерія</div>
                        <a href="tel:{{ rawPhone(settings('accounting_phone')) }}" class="item">{{ settings('accounting_phone') }}</a>
                    </div>
                </div>
                <div class="contact-item item-2">
                    <div class="contact-container">
                        <div class="contact-title">Служба підтримки</div>
                        <a href="tel:{{ rawPhone(settings('support_phone')) }}" class="item">{{ settings('support_phone') }}</a>
                        <a href="tel:{{ rawPhone(settings('support_phone2')) }}" class="item">{{ settings('support_phone2') }}</a>
                        <a href="tel:{{ rawPhone(settings('support_phone3')) }}" class="item">{{ settings('support_phone3') }}</a>
                        <a href="tel:{{ rawPhone(settings('support_phone4')) }}" class="item">{{ settings('support_phone4') }}</a>
                    </div>
                </div>
                <div class="contact-item item-3">
                    <div class="contact-container">
                        <div class="contact-title">WEB відділ</div>
                        <a href="mailto:{{ settings('web_email') }}" class="item">{{ settings('web_email') }}</a>
                    </div>
                    <div class="contact-container">
                        <div class="contact-title">Питання співпраці</div>
                        <a href="mailto:{{ settings('partners_email') }}" class="item">{{ settings('partners_email') }}</a>
                    </div>
                    <div class="contact-container">
                        <div class="contact-title">HR-відділ та рекрутмент</div>
                        <a href="mailto:{{ settings('hr_email') }}" class="item">{{ settings('hr_email') }}</a>
                    </div>
                </div>
                <div class="contact-item item-4">
                    <div class="contact-container">
                        <div class="contact-title">КонсультаціЇ по продуктах лінійки BAS</div>
                        <a href="mailto:{{ settings('hotline_email') }}" class="item">{{ settings('hotline_email') }}</a>
                    </div>
                    <div class="contact-container support">
                        <div class="contact-title">Відділ обслуговування торгового обладнання та фіскальної техніки
                        </div>
                        <a href="mailto:{{ settings('cso_email') }}" class="item">{{ settings('cso_email') }}</a>
                    </div>
                </div>
            </div>
            <div class="contacts-adres d-xl-flex justify-content-between">
                <div class="title">Як нас знайти?</div>
                <div class="d-md-flex adres-items">
                    <div class="adres-item">
                        <div class="contact-title">Адреса</div>
                        <div class="item">{!! settings('address') !!}</div>
                        <a href="#" class="link-default item-link d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">прокласи маршрут</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="adres-item">
                        <div class="contact-title">Графік роботи</div>
                        <div class="item">{!! settings('schedule') !!}</div>
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

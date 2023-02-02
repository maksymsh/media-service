@extends('app.layout.app')

@section('content')

    <div class="inner-main with-foto">
        <div class="info-container">
            <div class="container-fluid">
                <div class="breadcrumps">
                    <ul class="nav flex-wrap">
                        <li>
                            <a href="/">Головна</a>
                        </li>
                        <li>
                            <a href="/">Навчання</a>
                        </li>
                        <li>
                            <span class="current">Курс</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>Курс «Використання прикладного рішення "Бухгалтерія"»</h1>
                    <div class="container-info">
                        <div class="anons">Курс розроблений методистами Спілки Автоматизаторів Бізнесу та
                            розрахований на фахівців, що володіють базовими знаннями бухгалтерського та податкового
                            обліку.
                        </div>
                        <div class="d-lg-flex align-items-center buy-kurs">
                            <div class="buy-info order-12">12 занять по 2 год. / 3 600 грн</div>
                            <button class="button-default d-inline-flex align-items-center" data-toggle="modal"
                                    data-target="#m-feed">
                                <span class="value">записатись на курс</span>
                                <span class="ic icon-arrow-right"></span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-5.jpg" alt="" class="parallax"></div>
        <div class="shape">
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>
    <div class="container-fluid">
        <section class="kurs-detail relative">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="kurs-description d-lg-flex align-items-start justify-content-between">
                <div class="title">Деталі курсу</div>
                <div class="description">Серед слухачів курсу багато користувачів старої версії програми, студентів
                    та випускників навчальних закладів економіко-бухгалтерського спрямування, яким знання нової
                    версії "BAS Бухгалтерія" необхідне для роботи.
                    Кваліфіковані викладачі, атестовані Спілкою Автоматизаторів Бізнесу, допоможуть освоїти
                    функціонал програми, зрозуміти основні принципи її використання та закріпити навички роботи з
                    нею.
                    Усі слухачі курсу безкоштовно забезпечуються підручниками.
                </div>
            </div>
            <div class="kurs-programm d-lg-flex align-items-start justify-content-between">
                <div class="program-info">
                    <div class="title">Программа курсу</div>
                    <a href="#" class="program-file d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ic icon-download"></span>
                        </div>
                        <div class="value">Завантажити программу курсу</div>
                    </a>
                    <div class="program-image">
                        <img src="/images/kurs2.jpg" alt="" class="parallax">
                    </div>
                </div>
                <div class="program-items">
                    <ul class="ul-custom-2">
                        <li>Старт системи</li>
                        <li>Облік запасівv</li>
                        <li>Облік взаєморозрахунків з контрагентами</li>
                        <li>Облік операцій з грошовими коштами та розрахунків з підзвітними особами</li>
                        <li>Облік ПДВ</li>
                        <li>Облік кадрів та розрахунок заробітної плати</li>
                        <li>Облік необоротних активів та малоцінних швидкозношуваних предметів</li>
                        <li>Облік отримання та надання послуг</li>
                        <li>Закриття періоду</li>
                        <li>Облік виробничої діяльності</li>
                        <li>Облік операцій в іноземній валюті</li>
                        <li>Облік операцій в іноземній валюті</li>
                        <li>Звіти для керівника підприємства</li>
                    </ul>
                </div>
            </div>
            <div class="kurs-cert d-lg-flex align-items-center justify-content-between">
                <div class="lines"><img src="/images/lines-5.svg" alt=""></div>
                <a href="images/cert2.jpg" class="cert-image" data-fancybox>
                    <img src="/images/cert.jpg" alt="">
                </a>
                <div class="cert-info">
                    <div class="title">А як щодо сертификату?</div>
                    <p>Звичайно ж, всі студенти навчального центру після успішного завершення курсів отримують
                        сертифікат, який підтверджує проходження однієї з програм.</p>
                    <p class="p-last">Сертифікат, безсумнівно, буде додатковою перевагою при вашому подальшому
                        працевлаштуванні.</p>
                </div>
            </div>
            <div class="kurs-feedback d-lg-flex align-items-start justify-content-between">
                <div class="feed-info">
                    <div class="title">Запишись на курс або замов консультацію</div>
                    <div class="phone d-flex">
                        <div class="icon"><img src="/images/phone.svg" alt=""></div>
                        <div class="">
                            <div class="data">Консультації та запис</div>
                            <a href="tel:0322420727" class="value">(032) 242-07-27</a>
                        </div>
                    </div>
                    <div class="adres d-flex">
                        <div class="icon"><img src="/images/pin.svg" alt=""></div>
                        <div class="value">
                            <div>Навчальний центр знаходиться за адресою: м.Львів, вул. Наукова, 7а (3-й поверх)
                            </div>
                            <a href="#" class="link-default item-link d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">показати на карті</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="buy-info">12 занять по 2 год. / 3 600 грн</div>
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
            <div class="projects-small sml">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-center justify-content-between">
                            <div class="title-info">
                                <div class="title">Більше курсів</div>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <a href="#" class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                    <span class="value">дивитись всі</span>
                                </a>
                                <div class="slider-navs"></div>
                            </div>
                        </div>
                        <div class="projects-slider projects-list">
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-end align-items-start">
                                    <div class="item-bottom">
                                        <div class="name">Тестування “Професіонал”</div>
                                        <div class="anons">12 занять по 2 год. / 3 600 грн</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/kurs.jpg" class="parallax" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-end align-items-start">
                                    <div class="item-bottom">
                                        <div class="name">Автоматизація та встановлення BAS КУП “Вухо.Ком”</div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/kurs.jpg" class="parallax" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-end align-items-start">
                                    <div class="item-bottom">
                                        <div class="name">Мережа роздрібної торгівлі “Свій Маркет”.</div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/kurs.jpg" class="parallax" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-end align-items-start">
                                    <div class="item-bottom">
                                        <div class="name">Тестування “Професіонал”</div>
                                        <div class="anons">12 занять по 2 год. / 3 600 грн</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/kurs.jpg" class="parallax" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-end align-items-start">
                                    <div class="item-bottom">
                                        <div class="name">Автоматизація та встановлення BAS КУП “Вухо.Ком”</div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/kurs.jpg" class="parallax" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-end align-items-start">
                                    <div class="item-bottom">
                                        <div class="name">Мережа роздрібної торгівлі “Свій Маркет”.</div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/kurs.jpg" class="parallax" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

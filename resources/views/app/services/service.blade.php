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
                                <span class="current">Послуги</span>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="link-back back d-inline-flex align-items-center">
                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                        <span class="value">назад до послуг</span>
                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                    </a>
                </div>
                <h1>Комплексна автоматизація підприємства на базі системи BAS ERP</h1>
            </div>
            <div class="detail-info  d-lg-flex align-items-start justify-content-between">
                <div class="anons order-12">
                    <p>BAS ERP - флагманське рішення з лінійки BAS, мета якого спрямована на автоматизацію
                        найскладніших бізнес-процесів великого підприємства та створення єдиного інформаційного
                        простору для управління діяльністю підприємства <br/>
                        А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому
                        ймовірність конфлікту в роботі техніки майже неможлива!</p>
                    <p>А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому
                        ймовірність конфлікту в роботі техніки майже неможлива! <br/>
                        Комплексна автоматизація підприємства в компанії “Медіа Сервіс” передбачає не лише продаж
                        усіх позицій, а й встановлення, налагодження обмінів та коректної роботи обладнання, прав
                        доступу користувачів, різноманітні доробки в програмних продуктах BAS, навчання персоналу і
                        всебічну підтримку проекту після впровадження.</p>
                </div>
                <div class="info-left">
                    <a href="#" class="button-default feed d-inline-flex align-items-center justify-content-center"
                       data-toggle="modal" data-target="#m-feed">
                        <span class="value">зв’яжіться з нами</span>
                        <span class="ic icon-arrow-right"></span>
                    </a>
                </div>
            </div>
        </section>
        <section class="etapi">
            <div class="title">Етапи впровадження <br/>великих проектів</div>
            <div class="items">
                <div class="etap d-md-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">01</div>
                        <div class="name">Підготовка проекту</div>
                    </div>
                    <div class="anons ">Формування проектної команди, визначення та затвердження регламентів
                        управління проектом, попередня оцінка рамок проекту, ініціація виконання проекту
                    </div>
                </div>
                <div class="etap d-md-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">02</div>
                        <div class="name">Передпроектні роботи</div>
                    </div>
                    <div class="anons ">Проведення передпроектного обстеження підприємтва або експрес-обстеження
                        (аналіз існуючух бізнес-процесів на підприємствах Замовника), формалізація вимог Замовника,
                        аналіз матеріальних та людських ресурсів для забезпечення успішного виконання проекту,
                        оцінка ризиків, визначення бюджету та термінів реалізації проекту, екскізне проектування
                        майбутньої інформаційної системи.
                    </div>
                </div>
                <div class="etap d-md-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">03</div>
                        <div class="name">Розробка інфомаційної системи</div>
                    </div>
                    <div class="anons ">Виконання програмування модулів системи, створення документації, тестування
                        системи на функіональність та швидкодію, прийом результатів Замовником.
                    </div>
                </div>
                <div class="etap d-md-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">04</div>
                        <div class="name">Введення системи в експлуатацію</div>
                    </div>
                    <div class="anons ">Розгортання програмної та технічної інфраструктури системи, проведення
                        навчання користувачів, перенесення даних з попередніх систем, рішення про готовність системи
                        до промислової експлуатації.
                    </div>
                </div>
                <div class="etap d-md-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">05</div>
                        <div class="name">Завершення інтеграції</div>
                    </div>
                    <div class="anons ">Переведення системи в промислову експлуатацію, підведення підсумків проекту,
                        формальне закриття проекту, передача проекту
                    </div>
                </div>
                <div class="etap d-md-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">06</div>
                        <div class="name">Супровід</div>
                    </div>
                    <div class="anons ">Надання необхідного саме вам комплексу послуг для забезпечення стабільної та
                        комфортної роботи з програмами BAS
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
                                <div class="anons">Заповніть форму нище і ми вам зателефонуємо!</div>
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
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/icon1.svg" alt="">
                            </div>
                            <div class="col-name">BAS</div>
                            <div class="col-anons">Програмні рішення для створення комплексних систем автоматизації
                                бізнесу
                            </div>
                            <ul class="ul-col">
                                <li>Комплексна автоматизація</li>
                                <li>Встановлення та налаштування</li>
                                <li>Інформаційно-технічний супровід</li>
                                <li>Оренда програмних продуктів</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/icon3.svg" alt="">
                            </div>
                            <div class="col-name">Веб-розробка</div>
                            <div class="col-anons">Команда професіоналів розробить сайт або додаток під ваші
                                потреби
                            </div>
                            <ul class="ul-col">
                                <li>Розробка сайтів та їх інтеграція</li>
                                <li>Впровадження CRM</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/icon4.svg" alt="">
                            </div>
                            <div class="col-name">Обслуговування <br>сервісів та мереж</div>
                            <div class="col-anons">Надійна локальна мережа та телефонія є фундаментом вашої
                                безперебійної роботи бізнесу
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
                                <img src="/images/icon2.svg" alt="">
                            </div>
                            <div class="col-name">Розробка мобільних додатків</div>
                            <div class="col-anons">Команда професіоналів розробить сайт або додаток під ваші
                                потреби
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
                                <img src="/images/icon5.svg" alt="">
                            </div>
                            <div class="col-name">Обслуговування <br>РРО/ПРРО</div>
                            <div class="col-anons">Допоможемо на етапі підбору, впровадження та подальшого
                                обслуговування
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

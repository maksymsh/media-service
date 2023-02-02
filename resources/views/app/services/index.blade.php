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
                            <span class="current">Реєстратори розрахункових операцій</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>Допомагаємо бізнесу функціонувати ефективно</h1>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-1.png" alt=""></div>
        <div class="shape">
            <div class="shape-1"><img src="/images/sh1.svg" alt=""></div>
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="services-page">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="services-list">
                <div class="service-item d-lg-flex align-items-start justify-content-between">
                    <div class="item-info">
                        <div class="number">01</div>
                        <div class="name">BAS</div>
                        <div class="anons">Програмні рішення для створення комплексних систем автоматизації
                            бізнесу
                        </div>
                        <ul class="ul-custom">
                            <li>BAS Бухгалтерія / Базова / Проф / Корп</li>
                            <li>BAS Комплексне управління</li>
                            <li>BAS Управління торгівлею</li>
                            <li>BAS роздрібна торгівля</li>
                            <li>BAS Малий бізнес</li>
                        </ul>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">Всі програми bas</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item-image d-flex align-items-end justify-content-center">
                        <div class="image-container">
                            <div class="image-bg"><img src="/images/s1.svg" alt=""></div>
                            <div class="image-anim"><img src="/images/s11.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="service-item d-lg-flex align-items-start justify-content-between">
                    <div class="item-info">
                        <div class="number">02</div>
                        <div class="name">Впровадження CRM та корпоративних порталів</div>
                        <div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div>
                        <ul class="ul-custom">
                            <li>Розробка сайтів та їх інтеграція</li>
                            <li>Впровадження CRM</li>
                        </ul>
                    </div>
                    <div class="item-image d-flex align-items-end justify-content-center">
                        <div class="image-container">
                            <div class="image-bg"><img src="/images/s2.svg" alt=""></div>
                            <div class="image-anim"><img src="/images/s22.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="service-item d-lg-flex align-items-start justify-content-between">
                    <div class="item-info">
                        <div class="number">03</div>
                        <div class="name">Обслуговування сервісів та мереж</div>
                        <div class="anons">Надійна локальна мережа та телефонія є фундаментом вашої безперебійної
                            роботи бізнесу
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">дізнатись більше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item-image d-flex align-items-end justify-content-center">
                        <div class="image-container">
                            <div class="image-bg"><img src="/images/s3.svg" alt=""></div>
                            <div class="image-anim"><img src="/images/s33.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="service-item d-lg-flex align-items-start justify-content-between">
                    <div class="item-info">
                        <div class="number">04</div>
                        <div class="name">Обслуговування РРО/ПРРО</div>
                        <div class="anons">Допоможемо на етапі підбору, впровадження та подальшого обслуговування
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">дізнатись більше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item-image d-flex align-items-end justify-content-center">
                        <div class="image-container">
                            <div class="image-bg"><img src="/images/s4.svg" alt=""></div>
                            <div class="image-anim"><img src="/images/s44.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="service-item d-lg-flex align-items-start justify-content-between">
                    <div class="item-info">
                        <div class="number">05</div>
                        <div class="name">Розробка <br/>мобільних <br/>додатків</div>
                        <div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">дізнатись більше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item-image d-flex align-items-end justify-content-center">
                        <div class="image-container">
                            <div class="image-bg"><img src="/images/s5.svg" alt=""></div>
                            <div class="image-anim"><img src="/images/s55.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-small">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-start justify-content-between">
                            <div class="title-info">
                                <div class="title">Реалізовані проекти</div>
                                <div class="anons">Ми маємо досвід створення високоякісних рішень для клієнтів по
                                    всій країні
                                </div>
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
                                <div class="item d-flex flex-column justify-content-between align-items-start">
                                    <div class="item-top d-flex align-items-start justify-content-between">
                                        <div class="item-logo"><img src="/images/logo1.png" alt=""></div>
                                        <div class="item-category">торгівля</div>
                                    </div>
                                    <div class="item-bottom">
                                        <div class="name">Мережа магазинів «Gorgany»</div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/j1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-between align-items-start">
                                    <div class="item-top d-flex align-items-start justify-content-between">
                                        <div class="item-logo"><img src="/images/logo2.png" alt=""></div>
                                        <div class="item-category">торгівля</div>
                                    </div>
                                    <div class="item-bottom">
                                        <div class="name">Автоматизація
                                            та встановлення BAS
                                            КУП “Вухо.Ком”
                                        </div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/j2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-between align-items-start">
                                    <div class="item-top d-flex align-items-start justify-content-between">
                                        <div class="item-logo"><img src="/images/logo3.png" alt=""></div>
                                        <div class="item-category">торгівля</div>
                                    </div>
                                    <div class="item-bottom">
                                        <div class="name">Мережа роздрібної
                                            торгівлі “Свій Маркет”.
                                        </div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/j3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-between align-items-start">
                                    <div class="item-top d-flex align-items-start justify-content-between">
                                        <div class="item-logo"><img src="/images/logo1.png" alt=""></div>
                                        <div class="item-category">торгівля</div>
                                    </div>
                                    <div class="item-bottom">
                                        <div class="name">Мережа магазинів «Gorgany»</div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/j1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-between align-items-start">
                                    <div class="item-top d-flex align-items-start justify-content-between">
                                        <div class="item-logo"><img src="/images/logo2.png" alt=""></div>
                                        <div class="item-category">торгівля</div>
                                    </div>
                                    <div class="item-bottom">
                                        <div class="name">Автоматизація
                                            та встановлення BAS
                                            КУП “Вухо.Ком”
                                        </div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/j2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="item d-flex flex-column justify-content-between align-items-start">
                                    <div class="item-top d-flex align-items-start justify-content-between">
                                        <div class="item-logo"><img src="/images/logo3.png" alt=""></div>
                                        <div class="item-category">торгівля</div>
                                    </div>
                                    <div class="item-bottom">
                                        <div class="name">Мережа роздрібної
                                            торгівлі “Свій Маркет”.
                                        </div>
                                        <div class="anons">Автоматизація мережі магазинів</div>
                                        <a href="#"
                                           class="link-default item-link white d-inline-flex align-items-center">
                                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                            <span class="value">детальніше</span>
                                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="item-image">
                                        <img src="/images/j3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

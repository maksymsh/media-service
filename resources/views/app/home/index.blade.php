@extends('app.layout.app')

@section('content')

    <div class="main-container">
        <div class="info-container d-flex align-items-center justify-content-center">
            <div class="h1-container">
                <h1>{!! settings('app_name') !!}</h1>
                <div class="h1-anons">{!! settings('app_description') !!}</div>

                <x-app.link :href="route('services.index')" class="button-default d-inline-flex align-items-center">
                    <span class="value">Наші послуги</span>
                    <span class="ic icon-arrow-right"></span>
                </x-app.link>
            </div>
        </div>
        <div class="shape-1">
            <img src="/images/shape-1.svg" alt="">
        </div>
        <div class="shape-2">
            <img src="/images/shape-2.svg" alt="">
        </div>
        <div class="lines d-flex align-items-end justify-content-between">
            <span class="line-1"></span>
            <span class="line-2"></span>
            <span class="line-3"></span>
            <span class="line-4"></span>
            <span class="line-5"></span>
            <span class="line-6"></span>
            <span class="line-7"></span>
            <span class="line-8"></span>
        </div>
        <div class="video">
            <video autoplay loop muted>
                <source src="/images/video.mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>

    <div class="container-fluid relative">
        <div class="grid-main">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
            <div class="line-4"></div>
        </div>
        <section class="solutions-wrapper row no-gutters">
            <div class="solutions-menu-wrapper col-3">
                <nav class="solutions-menu-content d-block">
                    <ul class="solutions-menu-list">
                        <li class="solutions-menu-item" data-target="services">
                            <a href="#services" class="scroll">Послуги</a>
                        </li>
                        <li class="solutions-menu-item" data-target="products">
                            <a href="#products" class="scroll">продукти</a>
                        </li>
                        <li class="solutions-menu-item" data-target="goods">
                            <a href="#goods" class="scroll">товари</a>
                        </li>
                        <li class="solutions-menu-item" data-target="learn">
                            <a href="#learn" class="scroll">навчання</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-xl-9">
                <div class="solutions-content">
                    <div class="solutions-item solutions-item--solution services" id="services">
                        <div class="shapes"><img src="/images/shapes-1.svg" alt=""></div>
                        <div class="lines"><img src="/images/lines-1.svg" alt=""></div>
                        <div class="d-md-flex align-items-start sol-cont">
                            <div class="item-col-info">
                                <div class="item-col-title">Послуги</div>
                                <div class="item-col-anons">Автоматизуємо найскладніші бізнес-процеси великих
                                    підприємств. Створюємо єдиний інформаційний простір.
                                </div>
                            </div>
                            <div class="all-container">
                                <a href="#" class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                    <span class="value">всі послуги</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-md-flex flex-wrap">
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon1.svg" alt="">
                                    </div>
                                    <div class="col-name">BAS</div>
                                    <div class="col-anons">Програмні рішення для створення комплексних систем
                                        автоматизації бізнесу
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
                                        <img src="/images/icon4.svg" alt="">
                                    </div>
                                    <div class="col-name">Обслуговування <br/>сервісів та мереж</div>
                                    <div class="col-anons">Надійна локальна мережа та телефонія є фундаментом вашої
                                        безперебійної роботи бізнесу
                                    </div>
                                    <a href="#" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
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
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon5.svg" alt="">
                                    </div>
                                    <div class="col-name">Обслуговування <br/>РРО/ПРРО</div>
                                    <div class="col-anons">Допоможемо на етапі підбору, впровадження та подальшого
                                        обслуговування
                                    </div>
                                    <a href="#" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon3.svg" alt="">
                                    </div>
                                    <div class="col-name">Впровадження CRM та Корпоративних порталів</div>
                                    <div class="col-anons">Команда професіоналів розробить сайт або додаток під ваші
                                        потреби
                                    </div>
                                    <ul class="ul-col">
                                        <li>Розробка сайтів та їх інтеграція</li>
                                        <li>Впровадження CRM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="solutions-item solutions-item--solution about" id="about">
                        <div class="container-fluid">
                            <div class="h1">Mediaservice-</div>
                            <div class="d-lg-flex align-items-start">
                                <div class="about-image">
                                    <img src="/images/team.png" alt="">
                                </div>
                                <div class="about-right">
                                    <div class="anons">Ми - команда спеціалістів зі спільним бажанням - допомогти
                                        клієнтам максимально оптимізувати роботу підприємства та ефективно управляти
                                        бізнесом. Наш великий досвід автоматизації підприємств різних галузей та
                                        масштабів сприяє швидкій та якісній роботі наших спеціалістів
                                    </div>
                                    <div class="counts-items d-flex flex-wrap align-items-start">
                                        <div class="count-item">
                                            <span class="data"><span class="data-run">17</span></span>
                                            <div class="value">Років досвіду</div>
                                        </div>
                                        <div class="count-item">
                                            <span class="data"><span class="data-run">60</span>+</span>
                                            <div class="value">Спеціалістів різних напрямів</div>
                                        </div>
                                        <div class="count-item">
                                            <span class="data"><span class="data-run">1</span>K+</span>
                                            <div class="value">Автоматизованих підприємств</div>
                                        </div>
                                    </div>
                                    <a href="#" class="link-default-back white d-inline-flex align-items-center all">
													<span class="icon d-flex align-items-center justify-content-center">
														<span class="ic icon-arrow-right"></span>
													</span>
                                        <span class="value">детальніше про нас</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="solutions-item solutions-item--solution products odd" id="products">
                        <div class="shapes"><img src="/images/shapes-2.svg" alt=""></div>
                        <div class="lines"><img src="/images/lines-2.svg" alt=""></div>
                        <div class="d-md-flex align-items-start sol-cont">
                            <div class="item-col-info">
                                <div class="item-col-title">Продукти</div>
                                <div class="item-col-anons">Продаж та впровадження програмних продуктів, що виведуть ваш
                                    бізнес на якісно новий рівень
                                </div>
                            </div>
                            <div class="all-container">
                                <a href="#" class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                    <span class="value">всі продукти</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-md-flex flex-wrap">
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon6.svg" alt="">
                                    </div>
                                    <div class="col-name">BAS</div>
                                    <div class="col-anons">Програмний продукт призначений для автоматизації
                                        бізнес-процесів роздрібних торгових точок
                                    </div>
                                    <a href="#" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">15 продуктів</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon9.svg" alt="">
                                    </div>
                                    <div class="col-name">PROСкануй</div>
                                    <div class="col-anons">Програмні рішення для створення комплексних систем
                                        автоматизації бізнесу
                                    </div>
                                    <a href="#" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon7.svg" alt="">
                                    </div>
                                    <div class="col-name">PROДавай</div>
                                    <div class="col-anons">П'ять великих інструментів, які допомагають бізнесу ефективно
                                        працювати
                                    </div>
                                    <a href="#" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon10.svg" alt="">
                                    </div>
                                    <div class="col-name">Dilosoft</div>
                                    <div class="col-anons">Галузеве рішення призначене для роботи зі специфічним
                                        асортиментом
                                    </div>
                                    <a href="#" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item-col">
                                <div class="col-item">
                                    <div class="col-icon">
                                        <img src="/images/icon8.svg" alt="">
                                    </div>
                                    <div class="col-name">CRM-системи</div>
                                    <div class="col-anons">П'ять великих інструментів, які допомагають бізнесу ефективно
                                        працювати
                                    </div>
                                    <a href="#" class="link-default d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="solutions-item solutions-item--solution goods" id="goods">
                        <div class="lines"><img src="/images/lines-3.svg" alt=""></div>
                        <div class="d-md-flex align-items-start sol-cont">
                            <div class="item-col-info">
                                <div class="item-col-title">Товари</div>
                                <div class="item-col-anons">Ми є імпортером і офіційним дистриб'ютором широкого
                                    асортименту торгового обладнання.
                                </div>
                            </div>
                            <div class="all-container">
                                <a href="#" class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                    <span class="value">переглянути всі товари</span>
                                </a>
                            </div>
                        </div>
                        <div class="solutions-item-goods">
                            <div class="goods-container d-flex flex-wrap">
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g1.png" alt=""></div>
                                    <div class="item-name">POS-термінали</div>
                                </a>
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g2.png" alt=""></div>
                                    <div class="item-name">Сканери</div>
                                </a>
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g3.png" alt=""></div>
                                    <div class="item-name">Принтери чеків</div>
                                </a>
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g4.png" alt=""></div>
                                    <div class="item-name">Грошові скрині</div>
                                </a>
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g5.png" alt=""></div>
                                    <div class="item-name">Реєстратори розрахункових операцій</div>
                                </a>
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g6.png" alt=""></div>
                                    <div class="item-name">Ваги</div>
                                </a>
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g7.png" alt=""></div>
                                    <div class="item-name">Термінали збору данних</div>
                                </a>
                                <a href="#" class="good-item">
                                    <div class="item-image"><img src="/images/g8.png" alt=""></div>
                                    <div class="item-name">Витратні матеріали</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="solutions-item solutions-item--solution learn" id="learn">
                        <div class="d-lg-flex align-items-start sol-cont">
                            <div class="item-col-info">
                                <div class="item-col-title">Навчання та сертифікація</div>
                            </div>
                            <div class="all-container">
                                <div class="item-col-anons">Курси BAS у Львові від офіційного представника, розроблені
                                    провідними методистами САБ - це гарантія якості Вашого навчання
                                </div>
                                <a href="#" class="link-default-back d-inline-flex align-items-center all">
												<span class="icon d-flex align-items-center justify-content-center">
													<span class="ic icon-arrow-right"></span>
												</span>
                                    <span class="value">більше про курси</span>
                                </a>
                            </div>
                        </div>
                        <div class="learn-container d-md-flex">
                            <div class="line"><img src="/images/line.svg" alt=""></div>
                            <div class="learn-item">
                                <img src="/images/learn1.jpg" alt="" class="parallax">
                            </div>
                            <div class="learn-item">
                                <img src="/images/learn2.jpg" alt="" class="parallax">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients-section">
            <div class="title-container d-lg-flex align-items-start justify-content-between">
                <div class="title">Готові до співпраці?</div>
                <div class="title-info">
                    <div class="anons">За 17 років на ринку, на нашому досвіді більше тисячі виконаних проектів у сферах
                        торгівлі, будівництва, енергетики, медицини та інших.
                    </div>
                    <a href="#" class="link-default-back d-inline-flex align-items-center all">
									<span class="icon d-flex align-items-center justify-content-center">
										<span class="ic icon-arrow-right"></span>
									</span>
                        <span class="value">реалізовані проекти</span>
                    </a>
                </div>
            </div>
            <div class="clients-logos">
                <div class="logos-container d-flex flex-wrap">
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k1.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k2.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k3.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k4.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k5.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k6.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k7.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k8.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k9.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k10.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k11.png" alt="">
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/k12.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

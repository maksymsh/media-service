@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="news-detail header-fix relative">
            <div class="grid-main inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <div class="top-container ">
                <div class="">
                    <div class="breadcrumps  black">
                        <ul class="nav flex-wrap">
                            <li>
                                <a href="/">Головна</a>
                            </li>
                            <li>
                                <a href="/">Новини</a>
                            </li>
                            <li>
                                <span class="current">Вебінар для бухгалтера</span>
                            </li>
                        </ul>
                    </div>
                    <div class="text-right h-0">
                        <a href="#" class="link-back back d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">назад до новин</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                </div>
                <h1>Вебінар для бухгалтера</h1>
            </div>
            <div class="news-container">
                <div class="detail-top d-flex align-items-center">
                    <div class="category">навчання</div>
                    <div class="date">13 Грудня 2022</div>
                </div>
                <div class="detail-image">
                    <img src="/images/n4.jpg" alt="" class="parallax">
                </div>
                <div class="d-lg-flex justify-content-between">
                    <div class="detail-content order-12">
                        <p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює
                            композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має
                            більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут
                            іде текст." Це робить текст схожим на оповідний. Багато програм верстування та
                            веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum"
                            відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem
                            Ipsum з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема,
                            жартівливі).</p>
                        <div class="news-title">Теми зустрічі:</div>
                        <ul>
                            <li>ПДВ і фінзвітність, а також все що стосується бухобліку та податку на прибуток від
                                спікера Людмили Шахно
                            </li>
                            <li>Як підтримувати у собі високий рівень ентузіазму та енергії? Доповідь бізнес-тренера
                                Романа Кушніра
                            </li>
                            <li>Відповіді на найбільш поширені запити щодо роботи з програмами BAS від
                                фахівця-аналітика нашої компанії.
                            </li>
                        </ul>
                        <div class="news-questions">
                            Якщо у Вас залишились запитання – пишіть їх на пошту: <a
                                href="mailto:info@medias.com.ua">info@medias.com.ua</a>
                        </div>
                        <div class="news-video">
                            <a href="https://youtu.be/fdk7yCMnre8" class="video-container" data-fancybox>
                                <div class="play-button anim"><img src="/images/video2.svg" alt=""></div>
                                <img src="/images/video2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="news-share">
                        <div class="share-container">
                            <div class="share-title">
                                Поділитися в соціальних мережах
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="item d-flex align-items-center justify-content-center">
                                    <span class="ic icon-fb"></span>
                                </a>
                                <a href="#" class="item d-flex align-items-center justify-content-center">
                                    <span class="ic icon-linkedin"></span>
                                </a>
                            </div>
                        </div>
                        <div class="share-container">
                            <div class="share-title">Якщо в вас виникли запитанни, пишить нам на поту</div>
                            <a href="mailto:info@medias.com.ua" class="email d-flex align-items-center">
                                    <span class="ic d-flex align-items-center justify-content-center"><img
                                            src="/images/email.svg" alt=""></span>
                                <div class="value">info@medias.com.ua</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other-news">
                <div class="title-container d-md-flex align-items-center justify-content-between">
                    <div class="h1">Інші новини</div>
                    <a href="#" class="link-default-back d-inline-flex align-items-center all">
									<span class="icon d-flex align-items-center justify-content-center">
										<span class="ic icon-arrow-right"></span>
									</span>
                        <span class="value">більше новин</span>
                    </a>
                </div>
                <div class="news-list">
                    <div class="row gutters-22">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="item d-flex flex-column align-items-start justify-content-between">
                                <a href="#" class="item-image "><img class="parallax" src="/images/n1.jpg"
                                                                     alt=""></a>
                                <div class="item-info">
                                    <div class="d-flex align-items-center">
                                        <span class="category">навчання</span>
                                        <span class="date">13 Грудня 2022</span>
                                    </div>
                                    <a href="#" class="name">Вебінар до дня Бухгалтера</a>
                                </div>
                                <div class="button-container">
                                    <a href="#" class="link-default item-link d-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="item d-flex flex-column align-items-start justify-content-between">
                                <a href="#" class="item-image "><img class="parallax" src="/images/n2.jpg"
                                                                     alt=""></a>
                                <div class="item-info">
                                    <div class="d-flex align-items-center">
                                        <span class="category">новини компанії</span>
                                        <span class="date">13 Грудня 2022</span>
                                    </div>
                                    <a href="#" class="name">З Днем Української Державності, Україно!</a>
                                </div>
                                <div class="button-container">
                                    <a href="#" class="link-default item-link d-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="item d-flex flex-column align-items-start justify-content-between">
                                <a href="#" class="item-image "><img class="parallax" src="/images/n3.jpg"
                                                                     alt=""></a>
                                <div class="item-info">
                                    <div class="d-flex align-items-center">
                                        <span class="category">навчання</span>
                                        <span class="date">13 Грудня 2022</span>
                                    </div>
                                    <a href="#" class="name">З Днем Збройних Сил України!</a>
                                </div>
                                <div class="button-container">
                                    <a href="#" class="link-default item-link d-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

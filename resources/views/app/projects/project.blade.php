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
                            <a href="/">Послуги</a>
                        </li>
                        <li>
                            <span class="current">Мережі магазинів “Gorgany”</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>Мережі магазинів "Gorgany"</h1>
                    <div class="container-info">
                        <div class="category">торгівля</div>
                        <div class="anons">«Gorgany» - експерти з туристичного спорядження. У магазинах можна
                            придбати одяг, взуття, обладнання для подорожей, кемпінгу, альпінізму та інші
                            активності. На даний момент в Україні успішно працює 12 магазинів у Києві, Львові,
                            Івано-Франківську, Тернополі, Чернівцях, Рівному, Житомирі, Вінниці, Одесі та Буковелі.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-3.jpg" alt="" class="parallax"></div>
        <div class="shape">
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>
    <div class="container-fluid">
        <section class="project-detail relative">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="detail-etapi">
                <div class="etap d-xl-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">01</div>
                        <div class="name">Основне завдання</div>
                    </div>
                    <div class="anons">
                        <p>Основними завданнями компанії “Медіа Сервіс” було спрощення однотипної механічної роботи
                            працівника та автоматизація системи усіх бізнес-процесів компанії.</p>
                    </div>
                </div>
                <div class="etap d-xl-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">02</div>
                        <div class="name">Запропоновані рішення</div>
                    </div>
                    <div class="anons">
                        <p>Для того, щоб обслуговування клієнтів проводилось не тільки швидко, але й ефективно були
                            запропоновані та впроваджені наступні рішення, в тому числі мобільні:</p>
                        <ul class="ul-custom-2">
                            <li>Інтеграція із зовнішніми системами</li>
                            <li>Обмін з інтернет-магазинами</li>
                            <li>Оптимізація роботи складу завдяки мобільному додатку PROскануй</li>
                            <li>Оптимізація роботи кур’єрських доставок</li>
                            <li>Замовлення з сайту</li>
                            <li>Отримання аналітики на месенжери/пошту</li>
                        </ul>
                    </div>
                </div>
                <div class="etap d-xl-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">03</div>
                        <div class="name">Впровадження та розробка</div>
                    </div>
                    <div class="anons">
                        <p>Наші спеціалісти розробили програмне забезпечення для терміналів збору даних відповідно
                            до потреб замовника, для більш якісної та ефективної роботи торгових точок.</p>
                        <p>Також до облікової системи підключене та налагоджене наступне торгове обладнання:</p>
                        <ul class="ul-custom-2">
                            <li>POS-термінали</li>
                            <li>Принтери</li>
                            <li>Грошові скриньки</li>
                            <li>РРО та ПРРО</li>
                        </ul>
                    </div>
                </div>
                <div class="etap d-xl-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="number">04</div>
                        <div class="name">Результати роботи</div>
                    </div>
                    <div class="anons">
                        <p>Завдяки компанії "Медіа Сервіс" налагоджено роботу мережі магазинів «Gorgany». Відтепер
                            автоматизовано всі необхідні операції, починаючи від надходження товарів на склад (їх
                            реалізація, переміщення, торгівля, оприбуткування, інвентаризація та списання), та
                            завершуючи різними аналітичними звітами, що дозволяють проаналізувати діяльність
                            магазину (провести вартісну оцінку товарів у роздрібних цінах, аналіз продажів та
                            повернень товарів, а також визначити, яку годину і який товар краще продається в різних
                            торгових точках - дані про продаж миттєво надходять до головного офісу, що дозволяє
                            ефективно планувати закупівлю товарів та отримувати дані про доходи кожного з
                            магазинів).</p>
                    </div>
                </div>
            </div>
            <div class="gallery-slider">
                <div class="title-container d-flex align-items-center">
                    <div class="title">Як це було</div>
                    <div class="slider-navs"></div>
                </div>
                <div class="slider-container">
                    <div class="slider-gallery">
                        <div class="slide">
                            <a href="images/g1.jpg" class="item" data-fancybox="gall"><img src="/images/g1.jpg"
                                                                                           alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="images/g2.jpg" class="item" data-fancybox="gall"><img src="/images/g1.jpg"
                                                                                           alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="images/g3.jpg" class="item" data-fancybox="gall"><img src="/images/g1.jpg"
                                                                                           alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="images/g1.jpg" class="item" data-fancybox="gall"><img src="/images/g1.jpg"
                                                                                           alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="images/g2.jpg" class="item" data-fancybox="gall"><img src="/images/g1.jpg"
                                                                                           alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="images/g3.jpg" class="item" data-fancybox="gall"><img src="/images/g1.jpg"
                                                                                           alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-small sml">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-center justify-content-between">
                            <div class="title-info">
                                <div class="title">Більше проектів</div>
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
        </section>
    </div>

@endsection

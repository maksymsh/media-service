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
                            <span class="current">Продукти</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>Продукти <br/>Mediaservice</h1>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-2.png" alt=""></div>
    </div>
    <div class="container-fluid">
        <div class="catalog-page">

            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="catalog-top">
                <div class="title">Створюємо продукти, які допомагають максимально оптимізувати роботу бізнесу</div>
                <div class="lines"><img src="/images/lines-4.svg" alt=""></div>
            </div>
            <div class="catalog-items">
                <div class="item-big d-lg-flex align-items-start justify-content-between">
                    <div class="big-images">
                        <div class="icon"><img src="/images/cc1.png" alt=""></div>
                        <div class="bg"><img src="/images/c2.svg" alt=""></div>
                    </div>
                    <div class="big-info">
                        <div class="number">01</div>
                        <div class="name">BAS</div>
                        <div class="anons">Якщо ви шукаєте оптимальний варіант для автоматизації вашого бізнесу, то
                            сімейство програм BAS чудово для цього підходить.
                        </div>
                        <div class="description">
                            <div class="desc-title">Ознайомтесь з нашим каталогом або зверніться до нас і ми
                                допоможемо вам визначитись
                            </div>
                            <p>Яку саме програму BAS вам необхідно придбати. Наш досвід допоможе підібрати вам
                                найоптимальніший варіант саме для вашого бізнесу.</p>
                        </div>
                        <a href="#" class="button-default  d-inline-flex align-items-center" data-toggle="modal"
                           data-target="#m-feed">
                            <span class="value">отримати консультацію</span>
                            <span class="ic icon-arrow-right"></span>
                        </a>
                    </div>
                </div>
                <div class="items d-md-flex flex-wrap align-items-start justify-content-between">
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/wnuhyvza.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Бухгалтерія</div>
                        <div class="item-links d-inline-flex flex-wrap align-items-start">
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">Базова</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">ПРОФЕСІЙНА</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">КОРПОРАТИВНА</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <x-splade-link href="{{ route('products.product2', 1) }}" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </x-splade-link>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/tkzazvzk.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Комплексне управління підприємством</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/mnkcmpjb.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Управлінн торгівлею</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/iqwxqtkw.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Роздрібна торгівля</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/twprnhsj.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Малий бізнес</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/mnkcmpjb.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS ERP</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/kkrxwgqz.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS АГРО. ERP</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/jpijfliv.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Документообіг КОРП</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/xjbxrdaj.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Медицина</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/utuaopwm.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Комплексне управління паливним підприємством</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/hgvwxhhl.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Управління автотранспортом</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                    <div class="item">
                        <div class="item-icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/hhqwycmw.json"
                                trigger="loop"
                                delay="2000"
                                colors="primary:#4be1ec,secondary:#cb5eee"
                            >
                            </lord-icon>
                        </div>
                        <div class="item-name">BAS Управління холдингом</div>
                        <div class="item-anons">Готовий інструмент для вирішення всіх завдань, що стоять перед
                            бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за
                            облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік
                            продажів тощо.
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="catalog-others">
                <div class="item d-md-flex align-items-start justify-content-between">
                    <div class="item-images">
                        <div class="i-bg"><img src="/images/o1.svg" alt=""></div>
                        <div class="i-icon d-flex align-items-center justify-content-center"><img
                                src="/images/o11.svg" alt=""></div>
                    </div>
                    <div class="item-info">
                        <div class="number">02</div>
                        <div class="name">PROСкануй</div>
                        <div class="anons">Вже давно відомо, що читабельний зміст буде заважати зосередитись людині,
                            яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей
                            текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде
                            текст. Тут іде текст."
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                </div>
                <div class="item d-md-flex align-items-start justify-content-between">
                    <div class="item-images">
                        <div class="i-bg"><img src="/images/o2.svg" alt=""></div>
                        <div class="i-icon d-flex align-items-center justify-content-center"><img
                                src="/images/o22.svg" alt=""></div>
                    </div>
                    <div class="item-info">
                        <div class="number">03</div>
                        <div class="name">PPROДавай</div>
                        <div class="anons">Вже давно відомо, що читабельний зміст буде заважати зосередитись людині,
                            яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей
                            текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде
                            текст. Тут іде текст."
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                </div>
                <div class="item d-md-flex align-items-start justify-content-between">
                    <div class="item-images">
                        <div class="i-bg"><img src="/images/o3.svg" alt=""></div>
                        <div class="i-icon d-flex align-items-center justify-content-center"><img
                                src="/images/o33.svg" alt=""></div>
                    </div>
                    <div class="item-info">
                        <div class="number">04</div>
                        <div class="name">Dilosoft</div>
                        <div class="anons">Вже давно відомо, що читабельний зміст буде заважати зосередитись людині,
                            яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей
                            текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде
                            текст. Тут іде текст."
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
                    </div>
                </div>
                <div class="item d-md-flex align-items-start justify-content-between">
                    <div class="item-images">
                        <div class="i-bg"><img src="/images/o4.svg" alt=""></div>
                        <div class="i-icon d-flex align-items-center justify-content-center"><img
                                src="/images/o44.svg" alt=""></div>
                    </div>
                    <div class="item-info">
                        <div class="number">05</div>
                        <div class="name">CRM системи</div>
                        <div class="anons">Вже давно відомо, що читабельний зміст буде заважати зосередитись людині,
                            яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей
                            текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде
                            текст. Тут іде текст."
                        </div>
                        <a href="#" class="link-default d-inline-flex align-items-center">
                            <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                            <span class="value">детальніше</span>
                            <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                        </a>
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

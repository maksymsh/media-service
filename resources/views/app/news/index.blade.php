@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="news-page header-fix relative">
            <div class="grid-main inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <div class="top-container ">
                <div class="d-lg-flex align-items-center">
                    <div class="breadcrumps  black">
                        <ul class="nav flex-wrap">
                            <li>
                                <a href="/">Головна</a>
                            </li>
                            <li>
                                <span class="current">Новини</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1>Новини компанії</h1>
            </div>
            <div class="tabs-menu d-flex align-items-start flex-wrap">
                <a href="#" class="item active">показати всі</a>
                <a href="#" class="item">новини комнанії</a>
                <a href="#" class="item">публікації</a>
                <a href="#" class="item">новини школи</a>
            </div>
            <div class="news-list">
                <div class="row gutters-22">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column align-items-start justify-content-between">
                            <a href="#" class="item-image "><img class="parallax" src="/images/n1.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n2.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n3.jpg" alt=""></a>
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column align-items-start justify-content-between">
                            <a href="#" class="item-image "><img class="parallax" src="/images/n1.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n2.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n3.jpg" alt=""></a>
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column align-items-start justify-content-between">
                            <a href="#" class="item-image "><img class="parallax" src="/images/n1.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n2.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n3.jpg" alt=""></a>
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column align-items-start justify-content-between">
                            <a href="#" class="item-image "><img class="parallax" src="/images/n1.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n2.jpg" alt=""></a>
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
                            <a href="#" class="item-image "><img class="parallax" src="/images/n3.jpg" alt=""></a>
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
                <button class="button-more d-flex align-items-center justify-content-center">
                    <span class="value">показати більше</span>
                    <span class="ic icon-more"></span>
                </button>
            </div>
        </section>
    </div>

@endsection

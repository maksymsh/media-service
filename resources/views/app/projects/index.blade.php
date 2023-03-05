@extends('app.layout.app')

@php
    $app['layout']->headerClass = 'fix';
@endphp

@section('content')

    <div class="container-fluid">
        <section class="projects-page header-fix relative">
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
                                <span class="current">Проекти</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1>Реалізовані проекти <br/>компанії Mediaservice</h1>
            </div>
            <div class="tabs-menu d-flex align-items-start flex-wrap">
                <a href="#" class="item active">всі галузі</a>
                <a href="#" class="item">торгівля</a>
                <a href="#" class="item">медицина</a>
                <a href="#" class="item">логістика</a>
                <a href="#" class="item">виробництво</a>
                <a href="#" class="item">будівництво та нерухомість</a>
                <a href="#" class="item">галузі харчування</a>
            </div>
            <div class="projects-list">
                <div class="row gutters-22">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column justify-content-between align-items-start">
                            <div class="item-top d-flex align-items-start justify-content-between">
                                <div class="item-logo"><img src="/images/logo1.png" alt=""></div>
                                <div class="item-category">торгівля</div>
                            </div>
                            <div class="item-bottom">
                                <div class="name">Мережа магазинів «Gorgany»</div>
                                <div class="anons">Автоматизація мережі магазинів</div>
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column justify-content-between align-items-start">
                            <div class="item-top d-flex align-items-start justify-content-between">
                                <div class="item-logo"><img src="/images/logo1.png" alt=""></div>
                                <div class="item-category">торгівля</div>
                            </div>
                            <div class="item-bottom">
                                <div class="name">Мережа магазинів «Gorgany»</div>
                                <div class="anons">Автоматизація мережі магазинів</div>
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column justify-content-between align-items-start">
                            <div class="item-top d-flex align-items-start justify-content-between">
                                <div class="item-logo"><img src="/images/logo1.png" alt=""></div>
                                <div class="item-category">торгівля</div>
                            </div>
                            <div class="item-bottom">
                                <div class="name">Мережа магазинів «Gorgany»</div>
                                <div class="anons">Автоматизація мережі магазинів</div>
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="item d-flex flex-column justify-content-between align-items-start">
                            <div class="item-top d-flex align-items-start justify-content-between">
                                <div class="item-logo"><img src="/images/logo1.png" alt=""></div>
                                <div class="item-category">торгівля</div>
                            </div>
                            <div class="item-bottom">
                                <div class="name">Мережа магазинів «Gorgany»</div>
                                <div class="anons">Автоматизація мережі магазинів</div>
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                    <div class="col-12 col-md-6 col-lg-4">
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
                                <a href="#" class="link-default item-link white d-inline-flex align-items-center">
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
                <button class="button-more d-flex align-items-center justify-content-center">
                    <span class="value">показати більше</span>
                    <span class="ic icon-more"></span>
                </button>
            </div>
            <div class="clients-section">
                <div class="title-container d-lg-flex align-items-start justify-content-between">
                    <div class="title">Наші клієнти</div>
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
            </div>
        </section>
    </div>

@endsection

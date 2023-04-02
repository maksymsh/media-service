@extends('app.layout.app')

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
                <h1>{{ $category->name }}</h1>
            </div>
            <div class="tabs-menu d-flex align-items-start flex-wrap">
                <x-splade-link href="{{ route('projects.index') }}" class="item">всі галузі</x-splade-link>
                @foreach($categories as $c)
                    <x-splade-link href="{{ route('projects.category', $category) }}" class="item {{ $c->id === $category->id ? 'active' : '' }}">{{ $category->name }}</x-splade-link>
                @endforeach
            </div>
            <div class="projects-list">
                <div class="row gutters-22">
                    @foreach($projects as $project)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="item d-flex flex-column justify-content-between align-items-start">
                                <div class="item-top d-flex align-items-start justify-content-between">
                                    <div class="item-logo"><img src="{{ $project->getFirstMedia('logo')->originalUrl }}" alt=""></div>
                                    @foreach($project->categories as $pCategory)
                                        <div class="item-category">{{ $pCategory->name }}</div>
                                    @endforeach
                                </div>
                                <div class="item-bottom">
                                    <div class="name">{{ $project->title }}</div>
                                    <div class="anons">{{ $project->description_short }}</div>
                                    <x-splade-link href="{{ route('projects.project', $project) }}" class="link-default item-link white d-inline-flex align-items-center">
                                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                        <span class="value">детальніше</span>
                                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                    </x-splade-link>
                                </div>
                                <div class="item-image">
                                    <img src="{{ $project->getFirstMedia('image')->originalUrl }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
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

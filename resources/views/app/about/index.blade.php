@extends('app.layout.app')

@section('content')

    <div class="inner-main with-foto">
        <div class="info-container">
            <div class="container-fluid">
                <div class="breadcrumps">
                    <ul class="nav flex-wrap">
                        <li>
                            <x-splade-link href="/">Головна</x-splade-link>
                        </li>
                        <li>
                            <span class="current">Про компанію</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>{!! $page->title !!}</h1>
                    <div class="container-info">
                        <div class="anons">
                            {!! $page->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-4.jpg" alt="" class="parallax"></div>
        <div class="shape">
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>

    <div class="container-fluid">
        <section class="about-page relative">

            {!! $page->content !!}

        </section>
    </div>

@endsection

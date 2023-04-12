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
                            <a href="/">Навчання</a>
                        </li>
                        <li>
                            <span class="current">{{ $course->name }}</span>
                        </li>
                    </ul>
                </div>
                <div class="h1-container">
                    <h1>{{ $course->name }}</h1>
                    <div class="container-info">
                        <div class="anons">
                            {{ $course->description_short }}
                        </div>
                        <div class="d-lg-flex align-items-center buy-kurs">
                            <div class="buy-info order-12">{{ $course->description }}</div>
                            <button class="button-default d-inline-flex align-items-center"
                                    data-toggle="modal"
                                    data-target="#m-feed"
                                    @click="state.shared.feedback.type = 'course'; state.shared.feedback.id = '{{ $course->id }}';"
                            >
                                <span class="value">записатись на курс</span>
                                <span class="ic icon-arrow-right"></span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"><img src="/images/bg-5.jpg" alt="" class="parallax"></div>
        <div class="shape">
            <div class="shape-2"><img src="/images/sh2.svg" alt=""></div>
        </div>
    </div>
    <div class="container-fluid">
        <section class="kurs-detail relative">
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="kurs-description d-lg-flex align-items-start justify-content-between">
                <div class="title">Деталі курсу</div>
                <div class="description">{!! $course->detail !!}</div>
            </div>
            <div class="kurs-programm d-lg-flex align-items-start justify-content-between">
                <div class="program-info">
                    <div class="title">Програма курсу</div>
                    @if($course->program_file)
                        <a href="{{ $course->program_file?->previewUrl }}"
                           class="program-file d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ic icon-download"></span>
                            </div>
                            <div class="value">Завантажити программу курсу</div>
                        </a>
                    @endif
                    <div class="program-image">
                        <img src="{{ $course->getFirstMedia('image')?->originalUrl }}" alt="" class="parallax">
                    </div>
                </div>
                <div class="program-items">
                    <ul class="ul-custom-2">
                        @foreach($course->program as $program)
                            <li>{!! $program['title'] !!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="kurs-cert d-lg-flex align-items-center justify-content-between">
                <div class="lines"><img src="/images/lines-5.svg" alt=""></div>
                <a href="{{ $course->certificate?->previewUrl }}" class="cert-image" data-fancybox>
                    <img src="{{ $course->certificate?->previewUrl }}" alt="">
                </a>
                <div class="cert-info">
                    {!! $course->certificate_text !!}
                </div>
            </div>
            <div class="kurs-feedback d-lg-flex align-items-start justify-content-between">
                <div class="feed-info">
                    <div class="title">Запишись на курс або замов консультацію</div>
                    <div class="phone d-flex">
                        <div class="icon"><img src="/images/phone.svg" alt=""></div>
                        <div class="">
                            <div class="data">Консультації та запис</div>
                            <a href="tel:{{ rawPhone(settings('support_phone')) }}" class="value">{{ settings('support_phone') }}</a>
                        </div>
                    </div>
                    <div class="adres d-flex">
                        <div class="icon"><img src="/images/pin.svg" alt=""></div>
                        <div class="value">
                            <div>{!! __('pages.study.contacts_address') !!} {!! settings('address') !!}</div>
                            <a href="#" class="link-default item-link d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">показати на карті</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="buy-info">{{ $course->description_short }}</div>
                </div>
                <div class="feed-form">
                    <div class="modal-form">
                        <x-splade-form
                            :default="['type' => 'course','id' => $course->id, 'name' => '', 'email' => '', 'phone' => '', 'comment' => '', 'check' => false]"
                            :action="route('feedback')" class="form">
                            <div class="form-container">
                                <div class="input-container">
                                    <label class="label">Ваше ім’я</label>
                                    <input type="text" class="input" v-model="form.name" autocomplete="off">
                                </div>
                                <div class="input-container">
                                    <label class="label">Ваш email*</label>
                                    <input type="text" class="input email important" v-model="form.email"
                                           autocomplete="off">
                                </div>
                                <div class="input-container">
                                    <label class="label">Номер телефону</label>
                                    <input type="text" class="input phone" v-model="form.phone" autocomplete="off">
                                </div>
                                <div class="input-container">
                                    <label class="label">Повідомлення</label>
                                    <textarea v-model="form.comment" class="textarea"></textarea>
                                </div>
                            </div>
                            <div class="form-bottom d-md-flex">
                                <div class="bottom-left">
                                    <div class="checkbox">
                                        <input v-model="form.check" type="checkbox" id="politica"
                                               class="check important">
                                        <label for="politica">Даю згоду на обробку персональних данних, згідно з <a
                                                href="#">політикою конфіденційності</a></label>
                                    </div>
                                </div>
                                <div class="bottom-right">
                                    <x-splade-submit
                                        class="button-default bgl submit d-flex align-items-center justify-content-center"
                                        type="submit">
                                        <span class="value">надіслати</span>
                                        <span class="ic icon-arrow-right"></span>
                                    </x-splade-submit>
                                </div>
                            </div>
                        </x-splade-form>
                    </div>
                </div>
            </div>
            <div class="projects-small sml">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="title-container d-lg-flex align-items-center justify-content-between">
                            <div class="title-info">
                                <div class="title">Більше курсів</div>
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

                            @foreach($courses as $c)
                                <div class="slide">
                                    <div class="item d-flex flex-column justify-content-end align-items-start">
                                        <div class="item-bottom">
                                            <div class="name">{{ $c->name }}</div>
                                            <div class="anons">{!! $c->description_short !!}</div>
                                            <x-splade-link href="{{ $c->url }}"
                                               class="link-default item-link white d-inline-flex align-items-center">
                                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                                <span class="value">детальніше</span>
                                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                                            </x-splade-link>
                                        </div>
                                        <div class="item-image">
                                            <img src="{{ $c->getFirstMedia('image')?->originalUrl }}" class="parallax" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

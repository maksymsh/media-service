<footer class="footer">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="d-lg-flex align-items-start footer-to-form">
                <div class="footer-title">
                    <div class="item">Автоматизуємо</div>
                    <div class="item">ваш бізнес</div>
                </div>
                <button class="button-default white footer-button d-inline-flex align-items-center"
                        data-toggle="modal"
                        data-target="#m-feed"
                        @click="state.shared.feedback.type = 'contact'"
                >
                    <span class="value">зв’язатись з нами</span>
                    <span class="ic icon-arrow-right"></span>
                </button>
            </div>
            <div class="footer-container d-flex align-items-start">
                <div class="footer-info">
                    <a href="/" class="logo"><img src="/images/logo-footer.svg" alt=""></a>
                    <div class="info-item">
                        <div class="data">Відділ продажу</div>
                        <a href="tel:0322420727" class="value">(032) 242-07-27</a>
                    </div>
                    <div class="info-item">
                        <div class="data">Лінія підтримки</div>
                        <a href="tel:0322420727" class="value">(032) 242-07-27</a>
                    </div>
                    <div class="info-item">
                        <div class="data">Email</div>
                        <a href="mailto:sales@medias.com.ua" class="value email">sales@medias.com.ua</a>
                    </div>
                    <div class="footer-seti d-flex align-items-center">
                        <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                class="ic icon-fb"></span></a>
                        <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                class="ic icon-instagram"></span></a>
                        <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                class="ic icon-youtube"></span></a>
                        <a href="#" class="item d-flex align-items-center justify-content-center"><span
                                class="ic icon-linkedin"></span></a>
                    </div>
                </div>
                <div class="footer-navs">
                    <div class="row">
                        <div class="col-4">
                            <div class="nav-container">
                                <div class="nav-title">Компанія</div>
                                <ul class="nav flex-column">
                                    @foreach($pages as $page)
                                        <li>
                                            @php
                                                $url = '/' . ($page->code === 'home' ? '' : $page->code);

                                                if(in_array($url, ['/videos'])) {
                                                    $url = '/study' . $url;
                                                }
                                            @endphp
                                            <x-splade-link :href="$page->url" class="nav-item">{{ $page->title }}</x-splade-link>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="nav-container">
                                <div class="nav-title">Послуги</div>
                                <ul class="nav flex-column">
                                    @foreach($services as $service)
                                        <li>
                                            <x-splade-link :href="$service->url" class="nav-item">{{ $service->name }}</x-splade-link>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="nav-container">
                                <div class="nav-title">Товари</div>
                                <ul class="nav flex-column">

                                    @foreach($goodCategories as $category)
                                        <li>
                                            <x-splade-link :href="$category->url" class="nav-item">{{ $category->name }}</x-splade-link>
                                        </li>
                                    @endforeach
                                </ul>
                                <x-splade-link href="{{ route('goods.index') }}" class="link-default white more-nav d-inline-flex align-items-center">
                                    <span class="ic2"><img src="/images/arrow-left2-w.svg" alt=""></span>
                                    <span class="value">Всі товари</span>
                                    <span class="ic"><img src="/images/arrow-right.svg" alt=""></span>
                                </x-splade-link>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="nav-container">
                                <div class="nav-title">Продукти</div>
                                <ul class="nav flex-column">
                                    <li>
                                        <x-splade-link href="{{ route('products.index') }}" class="nav-item">BAS</x-splade-link>
                                    </li>
                                    @foreach($products as $product)
                                        <li>
                                            <x-splade-link :href="$product->url" class="nav-item">{{ $product->name }}</x-splade-link>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="nav-container">
                                <div class="nav-title">Курси</div>
                                <ul class="nav flex-column">
                                    @foreach($courses as $course)
                                        <li>
                                            <x-splade-link :href="$course->url" class="nav-item">{{ $course->name }}</x-splade-link>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="d-md-flex align-items-center justify-content-between">
                <div class="copy">Mediaservice © 2023</div>
                <div class="dev">
                    <span class="data">Design and develop</span>
                    <a href="https://esfirum.com" target="_blank"><img src="/images/esfirum.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>

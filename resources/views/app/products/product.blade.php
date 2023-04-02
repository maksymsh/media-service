@extends('app.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="service-detail-page header-fix">
            <div class="lines"><img src="/images/lines2.svg" alt=""></div>
            <div class="grid-inner">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
            </div>
            <div class="detail-top ">
                <div class="d-lg-flex align-items-center">
                    <div class="breadcrumps  black">
                        <ul class="nav flex-wrap">
                            <li>
                                <a href="/">Головна</a>
                            </li>
                            <li>
                                <a href="/">Продукти</a>
                            </li>
                            <li>
                                <span class="current">{{ $product->name }}</span>
                            </li>
                        </ul>
                    </div>
                    <x-splade-link href="{{ route('products.index') }}" class="link-back back d-inline-flex align-items-center">
                        <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                        <span class="value">нназад до продуктів</span>
                        <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                    </x-splade-link>
                </div>
                <h1>{{ $product->name }}</h1>
                <div class="price">Вартість продукту {{ $product->price }} грн.</div>
            </div>
            <div class="detail-info  d-lg-flex justify-content-between">
                <div class="anons order-12">
                    <p>
                        Програмний продукт "BAS Бухгалтерія" є призначеним для автоматизації бухгалтерського і
                        податкового обліку, зокрема й підготовки обов'язкової (регламентованої) звітності, в
                        організаціях, що здійснюють будь-які види комерційної діяльності: гуртову і роздрібну
                        торгівлю, комісійну торгівлю (включно з субкомісією), надання послуг, виробництво тощо.
                        Бухгалтерський та податковий облік ведеться відповідно до чинного законодавства України.
                    </p>
                    <p>"BAS Бухгалтерія" забезпечує вирішення всіх завдань, що стоять перед бухгалтерською службою
                        підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, серед
                        іншого, наприклад, виписку первинних документів, облік продажів тощо. Це прикладне рішення
                        також можна використовувати виключно для ведення бухгалтерського та податкового обліку, а
                        завдання автоматизації інших служб, наприклад, відділу продажів, вирішувати спеціалізованими
                        прикладними рішеннями BAS або іншими системами. До складу "BAS Бухгалтерії" включено план
                        рахунків бухгалтерського обліку, що відповідає Наказу Міністерства Фінансів України "Про
                        затвердження Плану рахунків бухгалтерського обліку і Інструкції про його використання" від
                        30 листопада 1999 р. №291. Склад рахунків, організація аналітичного, валютного, кількісного
                        обліку на рахунках відповідають вимогам законодавства щодо ведення бухгалтерського обліку та
                        відображення даних у звітності. За необхідності користувачі можуть самостійно створювати
                        додаткові субрахунки і розрізи аналітичного обліку.</p>
                    <div class="for-menus">
                        <div class="solutions-item solutions-item--solution" id="menu-1">
                            <div class="title-small">Облік "від документа" та типові операції</div>
                            <p>
                                "BAS Бухгалтерія" забезпечує вирішення всіх завдань, що стоять перед бухгалтерською
                                службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на
                                підприємстві, серед іншого, наприклад, виписку первинних документів, облік продажів
                                тощо. Це прикладне рішення також можна використовувати виключно для ведення
                                бухгалтерського та податкового обліку, а завдання автоматизації інших служб,
                                наприклад, відділу продажів, вирішувати спеціалізованими прикладними рішеннями BAS
                                або іншими системами. До складу "BAS Бухгалтерії" включено план рахунків
                                бухгалтерського обліку, що відповідає Наказу Міністерства Фінансів України "Про
                                затвердження Плану рахунків бухгалтерського обліку і Інструкції про його
                                використання" від 30 листопада 1999 р. №291. Склад рахунків, організація
                                аналітичного, валютного, кількісного обліку на рахунках відповідають вимогам
                                законодавства щодо ведення бухгалтерського обліку та відображення даних у звітності.
                                За необхідності користувачі можуть самостійно створювати додаткові субрахунки і
                                розрізи аналітичного обліку.
                            </p>
                        </div>
                        <div class="solutions-item solutions-item--solution" id="menu-2">
                            <div class="title-small">Ведення обліку діяльності кількох організацій</div>
                            <p>За допомогою "BAS Бухгалтерії" можна вести бухгалтерський та податковий облік
                                господарської діяльності кількох організацій. Облік для кожної організації можна
                                вести в окремій інформаційній базі. Водночас "BAS Бухгалтерія" надає можливість
                                ведення бухгалтерського та податкового обліку кількох організацій у загальній
                                інформаційній базі (в цьому випадку в ролі окремих організацій можуть виступати
                                фізичні особи – підприємці). Це зручно, якщо їх господарська діяльність тісно
                                пов'язана між собою: можна використовувати загальні списки товарів, контрагентів
                                (ділових партнерів), співробітників, складів (місць зберігання) тощо, а обов'язкову
                                звітність формувати окремо.</p>
                        </div>
                        <div class="solutions-item solutions-item--solution" id="menu-3">
                            <div class="title-small">Облік товарно-матеріальних цінностей</div>
                            <p>Облік товарів, матеріалів і готової продукції реалізовано згідно П(С)БО 9 "Запаси" і
                                методичних вказівок з його застосування. Підтримуються такі способи оцінки
                                матеріально-виробничих запасів під час їхнього вибуття:</p>
                            <ul class="ul-custom-2">
                                <li>За середньою собівартістю</li>
                                <li>За собівартістю перших за часом придбання матеріально-виробничих запасів (спосіб
                                    ФІФО)
                                </li>
                                <li>За ціною продажу із застосуванням середнього відсотка націнки (для роздрібної
                                    торгівлі)
                                </li>
                            </ul>
                            <p>Для підтримки способів оцінки ФІФО на рахунках обліку матеріально-виробничих запасів
                                ведеться партіонний облік. Різні способи оцінки можуть застосовуватися незалежно для
                                кожної організації.</p>
                        </div>
                        <div class="solutions-item solutions-item--solution" id="menu-4">
                            <div class="title-small">Ведення обліку діяльності кількох організацій</div>
                            <p>За допомогою "BAS Бухгалтерії" можна вести бухгалтерський та податковий облік
                                господарської діяльності кількох організацій. Облік для кожної організації можна
                                вести в окремій інформаційній базі. Водночас "BAS Бухгалтерія" надає можливість
                                ведення бухгалтерського та податкового обліку кількох організацій у загальній
                                інформаційній базі (в цьому випадку в ролі окремих організацій можуть виступати
                                фізичні особи – підприємці). Це зручно, якщо їх господарська діяльність тісно
                                пов'язана між собою: можна використовувати загальні списки товарів, контрагентів
                                (ділових партнерів), співробітників, складів (місць зберігання) тощо, а обов'язкову
                                звітність формувати окремо.</p>
                        </div>
                        <div class="solutions-item solutions-item--solution" id="menu-5">
                            <div class="title-small">Ведення обліку діяльності кількох організацій</div>
                            <p>За допомогою "BAS Бухгалтерії" можна вести бухгалтерський та податковий облік
                                господарської діяльності кількох організацій. Облік для кожної організації можна
                                вести в окремій інформаційній базі. Водночас "BAS Бухгалтерія" надає можливість
                                ведення бухгалтерського та податкового обліку кількох організацій у загальній
                                інформаційній базі (в цьому випадку в ролі окремих організацій можуть виступати
                                фізичні особи – підприємці). Це зручно, якщо їх господарська діяльність тісно
                                пов'язана між собою: можна використовувати загальні списки товарів, контрагентів
                                (ділових партнерів), співробітників, складів (місць зберігання) тощо, а обов'язкову
                                звітність формувати окремо.</p>
                        </div>
                        <div class="solutions-item solutions-item--solution" id="menu-6">
                            <div class="title-small">Ведення обліку діяльності кількох організацій</div>
                            <p>За допомогою "BAS Бухгалтерії" можна вести бухгалтерський та податковий облік
                                господарської діяльності кількох організацій. Облік для кожної організації можна
                                вести в окремій інформаційній базі. Водночас "BAS Бухгалтерія" надає можливість
                                ведення бухгалтерського та податкового обліку кількох організацій у загальній
                                інформаційній базі (в цьому випадку в ролі окремих організацій можуть виступати
                                фізичні особи – підприємці). Це зручно, якщо їх господарська діяльність тісно
                                пов'язана між собою: можна використовувати загальні списки товарів, контрагентів
                                (ділових партнерів), співробітників, складів (місць зберігання) тощо, а обов'язкову
                                звітність формувати окремо.</p>
                        </div>
                    </div>
                </div>
                <div class="info-left">
                    <a href="#" class="button-default feed d-inline-flex align-items-center justify-content-center"
                       data-toggle="modal"
                       data-target="#m-feed"
                       @click="data.feedback.type = 'demo'"
                    >
                        <span class="value">демо доступ</span>
                        <span class="ic icon-arrow-right"></span>
                    </a>
                    <div class="info-menu">
                        <div class="menu-title">Типи використання</div>
                        <nav class="menu-left">
                            <ul class="nav flex-column">
                                <li class="inf-act d-flex align-items-center" data-target="menu-1">
                                    <span class="li"><img src="/images/li.svg" alt=""></span>
                                    <a class="scroll" href="#menu-1">Облік "від документа" та типові операції</a>
                                </li>
                                <li class="inf-act d-flex align-items-center" data-target="menu-2">
                                    <span class="li"><img src="/images/li.svg" alt=""></span>
                                    <a class="scroll" href="#menu-2">Ведення обліку діяльності кількох
                                        організацій</a>
                                </li>
                                <li class="inf-act d-flex align-items-center" data-target="menu-3">
                                    <span class="li"><img src="/images/li.svg" alt=""></span>
                                    <a class="scroll" href="#menu-3">Облік товарно-матеріальних цінностей</a>
                                </li>
                                <li class="inf-act d-flex align-items-center" data-target="menu-4">
                                    <span class="li"><img src="/images/li.svg" alt=""></span>
                                    <a class="scroll" href="#menu-4">Складський облік</a>
                                </li>
                                <li class="inf-act d-flex align-items-center" data-target="menu-5">
                                    <span class="li"><img src="/images/li.svg" alt=""></span>
                                    <a class="scroll" href="#menu-5">Облік торгівельних операцій</a>
                                </li>
                                <li class="inf-act d-flex align-items-center" data-target="menu-6">
                                    <span class="li"><img src="/images/li.svg" alt=""></span>
                                    <a class="scroll" href="#menu-6">Облік комісійної торгівлі</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="inner-form">
            <div class="bg-container">
                <div class="container-fluid">
                    <div class="form-inner">
                        <div class="grid-form">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <div class="line-3"></div>
                            <div class="line-4"></div>
                        </div>
                        <div class="form-top d-lg-flex align-items-start">
                            <div class="form-title">
                                <div class="title">Шукаєте рішення <br/>для свого бізнесу?</div>
                                <div class="anons">Заповніть форму нище і ми вам зателефонуємо!</div>
                            </div>
                            <div class="form-contacts">
                                <div class="title">Контакти</div>
                                <a href="tel:(032) 242-07-27" class="item">(032) 242-07-27</a>
                                <a href="mailo:sales@medias.com.ua" class="item">sales@medias.com.ua</a>
                            </div>
                        </div>
                        <div class="modal-form white">
                            <form action="" class="form">
                                <div class="form-container d-md-flex">
                                    <div class="form-left">
                                        <div class="input-container">
                                            <label class="label">Ваше ім’я</label>
                                            <input type="text" class="input" name="imya" autocomplete="off">
                                        </div>
                                        <div class="input-container">
                                            <label class="label">Ваш email*</label>
                                            <input type="text" class="input email important" name="email"
                                                   autocomplete="off">
                                        </div>
                                        <div class="input-container">
                                            <label class="label">Номер телефону</label>
                                            <input type="text" class="input phone" name="phone" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-right">
                                        <div class="input-container">
                                            <label class="label">Повідомлення</label>
                                            <textarea name="message" class="textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-bottom d-md-flex">
                                    <div class="bottom-left">
                                        <div class="checkbox">
                                            <input type="checkbox" name="politica1" id="politica1"
                                                   class="check important">
                                            <label for="politica1">Даю згоду на обробку персональних данних, згідно
                                                з <a href="#">політикою конфіденційності</a></label>
                                        </div>
                                    </div>
                                    <div class="bottom-right">
                                        <button
                                            class="button-default white bgl submit d-flex align-items-center justify-content-center"
                                            type="submit">
                                            <span class="value">надіслати</span>
                                            <span class="ic icon-arrow-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="other-services">
            <div class="grid-other">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
            </div>
            <div class="other-container d-xl-flex align-items-start justify-content-between">
                <div class="title">Інші <br/>послуги</div>
                <div class="other-items d-md-flex flex-wrap ">
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/cc1.svg" alt="">
                            </div>
                            <div class="col-name">BAS</div>
                            <div class="col-anons">Програмний продукт призначений для автоматизації бізнес-процесів
                                роздрібних торгових точок
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
                                <img src="/images/o11.svg" alt="">
                            </div>
                            <div class="col-name">PROСкануй</div>
                            <div class="col-anons">Програмні рішення для створення комплексних систем автоматизації
                                бізнесу
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/o22.svg" alt="">
                            </div>
                            <div class="col-name">PROДавай</div>
                            <div class="col-anons">П'ять великих інструментів, які допомагають бізнесу ефективно
                                працювати
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/o33.svg" alt="">
                            </div>
                            <div class="col-name">Dilosoft</div>
                            <div class="col-anons">Галузеве рішення призначене для роботи зі специфічним
                                асортиментом
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="item-col">
                        <div class="col-item">
                            <div class="col-icon">
                                <img src="/images/o44.svg" alt="">
                            </div>
                            <div class="col-name">CRM-системи</div>
                            <div class="col-anons">П'ять великих інструментів, які допомагають бізнесу ефективно
                                працювати
                            </div>
                            <a href="#" class="link-default d-inline-flex align-items-center">
                                <span class="ic2"><img src="/images/arrow-left.svg" alt=""></span>
                                <span class="value">дізнатись більше</span>
                                <span class="ic"><img src="/images/arrow-right2.svg" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

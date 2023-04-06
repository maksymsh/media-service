<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'bottom' => 0,
                'code' => 'home',
                'title' => 'Aвтоматизація компаній та підприємств Service',
                'description' => 'Ми допомагаємо клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом',
            ],
            [
                'code' => 'about',
                'title' => 'Компанія Mediaservice',
                'description' => '«Ми - команда спеціалістів зі спільним бажанням - допомогти клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом.',
                'content' => '<div class="grid-inner"><div class="line-1"></div><div class="line-2"></div><div class="line-3"></div><div class="line-4"></div><div class="line-5"></div></div><div class="about-years d-lg-flex align-items-end"><div class="years-container"><div class="years-title">Компанія успішно працює та реалізує проекти більше</div><div class="years">17 років</div></div><div class="anons">До нас звертаються клієнти малого, середнього і великого бізнесів різних сфер діяльності: продуктові компанії, рітейли, промислові підприємства, медичні установи, компанії сфери обслуговування, аграрні підприємства та інші.</div></div><div class="about-images"><div class="simpleParallax simple-parallax-initialized" style="overflow: hidden;"><img src="images/about.jpg" alt="" class="parallax" style="transform: translate3d(0px, -66px, 0px) scale(1.2); will-change: transform;"></div><div class="image-logo"><img src="images/logo2.svg" alt=""></div></div><div class="about-mission d-lg-flex align-items-start"><div class="title">Місія компанії</div><div class="mission-content">Реалізувати сподівання клієнтів, власників та персоналу компанії шляхом ведення етичного бізнесу та забезпечення високої якості послуг.</div></div><div class="about-celi d-lg-flex align-items-start"><div class="title">Цілі компанії</div><div class="celi-content"><ul class="ul-custom-3"><li>Підвищення ефективності діяльності компанії та її конкурентоспроможності, враховуючи інтереси та потреби клієнтів, персоналу, керівництва.</li><li>Систематичний аналіз поточних та перспективних вимог та очікувань клієнтів, їхньої задоволеності продуктами та послугами компанії.</li><li>Проведення регулярного навчання, а також підвищення компетентності та професіоналізму персоналу.</li><li>Розбудова взаємовигідних відносин з партнерськими компаніями на основі довіри та партнерства.</li><li>Розбудова взаємовигідних відносин з партнерськими компаніями на основі довіри та партнерства.</li><li>Виконання вимог та постійне покращення результативності системи менеджменту якості на основі міжнародного стандарту ISO 9001:2015.</li></ul></div></div><div class="about-why d-flex justify-content-end"><div class="line"><img src="images/big-line.svg" alt=""></div><div class="med"><img src="images/med.svg" alt=""></div><div class="why-content"><div class="title">Чому обирають нас</div><div class="why-items d-flex flex-wrap"><div class="item"><div class="icon"><lord-icon src="https://cdn.lordicon.com/eqxbwsys.json" trigger="loop" colors="primary:#4be1ec,secondary:#cb5eee" state="loop" style="width:72px;height:72px"></lord-icon></div><div class="name">Великий досвід автоматизації підприємств</div></div><div class="item"><div class="icon"><lord-icon src="https://cdn.lordicon.com/cxebzamo.json" trigger="loop" colors="primary:#4be1ec,secondary:#cb5eee" state="loop" style="width:72px;height:72px"></lord-icon></div><div class="name">Команда <br>професіоналів</div></div><div class="item"><div class="icon"><lord-icon src="https://cdn.lordicon.com/rulwqkcr.json" trigger="loop" colors="primary:#4be1ec,secondary:#cb5eee" state="loop" style="width:72px;height:72px"></lord-icon></div><div class="name">Персональні акаунт-менеджери</div></div><div class="item"><div class="icon"><lord-icon src="https://cdn.lordicon.com/cwfsuwwr.json" trigger="loop" colors="primary:#4be1ec,secondary:#cb5eee" state="loop" style="width:72px;height:72px"></lord-icon></div><div class="name">Власний сервісний центр</div></div><div class="item"><div class="icon"><lord-icon src="https://cdn.lordicon.com/xclymqqn.json" trigger="loop" colors="primary:#4be1ec,secondary:#cb5eee" state="loop" style="width:72px;height:72px"></lord-icon></div><div class="name">Широкий асортимент товарів та послуг</div></div><div class="item"><div class="icon"><img src="images/l1.svg" alt=""></div><div class="name">Якісне обслуговування</div></div><div class="item"><div class="icon"><img src="images/l2.svg" alt=""></div><div class="name">ISO 9001:2015 у сфері автоматизації управління та обліку</div></div><div class="item"><div class="icon"><img src="images/l3.svg" alt=""></div><div class="name">ISO 27001:2013 у сфері інформаційної безпеки</div></div><div class="item"><div class="icon"><lord-icon src="https://cdn.lordicon.com/iwqwgvxf.json" trigger="loop" colors="primary:#4be1ec,secondary:#cb5eee" state="loop" style="width:72px;height:72px"></lord-icon></div><div class="name">Широкий асортимент товарів та послуг</div></div></div></div></div><div class="about-offer"><div class="title">Що ми пропонуємо</div><div class="d-lg-flex"><div class="offer-left"><div class="video"><video autoplay="" loop="" muted=""><source src="images/video.mp4">Your browser does not support HTML5 video.</video></div><div class="name">Ми не ідеальні. <br>Але працюємо над собою і прагнемо стати для вас кращим партнером і другом :)</div></div><div class="offer-items"><div class="item d-xl-flex align-items-center"><div class="item-info"><div class="item-title">Послуги</div><div class="anons">Автоматизуємо найскладніші бізнес-процеси великих підприємств. Створюємо єдиний інформаційний простір.</div></div><a href="/services" class="link-default-back d-inline-flex align-items-center all"><span class="icon d-flex align-items-center justify-content-center"><span class="ic icon-arrow-right"></span></span><span class="value">всі послуги</span></a></div><div class="item d-xl-flex align-items-center"><div class="item-info"><div class="item-title">Продукти</div><div class="anons">Продаж та впровадження програмних продуктів, що виведуть ваш бізнес на якісно новий рівень</div></div><a href="/products" class="link-default-back d-inline-flex align-items-center all"><span class="icon d-flex align-items-center justify-content-center"><span class="ic icon-arrow-right"></span></span><span class="value">всі Продукти</span></a></div><div class="item d-xl-flex align-items-center"><div class="item-info"><div class="item-title">Товари</div><div class="anons">Ми є імпортером і офіційним дистриб\'ютором широкого асортименту торгового обладнання.</div></div><a href="/goods" class="link-default-back d-inline-flex align-items-center all"><span class="icon d-flex align-items-center justify-content-center"><span class="ic icon-arrow-right"></span></span><span class="value">всі Товари</span></a></div><div class="item d-xl-flex align-items-center"><div class="item-info"><div class="item-title">Навчання</div><div class="anons">Курси BAS у Львові від офіційного представника, розроблені провідними методистами САБ - це гарантія якості Вашого навчання</div></div><a href="/study" class="link-default-back d-inline-flex align-items-center all"><span class="icon d-flex align-items-center justify-content-center"><span class="ic icon-arrow-right"></span></span><span class="value">детальніше</span></a></div></div></div></div><div class="clients-section"><div class="title-container d-lg-flex align-items-start justify-content-between"><div class="title">Наші клієнти</div><div class="title-info"><div class="anons">За 17 років на ринку, на нашому досвіді більше тисячі виконаних проектів у сферах торгівлі, будівництва, енергетики, медицини та інших.</div><a href="/projects" class="link-default-back d-inline-flex align-items-center all"><span class="icon d-flex align-items-center justify-content-center"><span class="ic icon-arrow-right"></span></span><span class="value">реалізовані проекти</span></a></div></div><div class="clients-logos"><div class="logos-container d-flex flex-wrap"><div class="item d-flex align-items-center justify-content-center"><img src="images/k1.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k2.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k3.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k4.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k5.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k6.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k7.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k8.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k9.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k10.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k11.png" alt=""></div><div class="item d-flex align-items-center justify-content-center"><img src="images/k12.png" alt=""></div></div></div></div>',
            ],
            [
                'code' => 'contacts',
                'title' => 'Контакти',
                'description' => '',
            ],
            [
                'code' => 'news',
                'title' => 'Новини компанії',
                'description' => '',
            ],
            [
                'code' => 'products',
                'title' => 'Реєстратори розрахункових операцій',
                'description' => 'Реєстратори розрахункових операцій',
            ],
            [
                'code' => 'goods',
                'title' => 'Автоматизуємо ваш бізнес',
                'description' => 'Автоматизуємо ваш бізнес',
            ],
            [
                'code' => 'services',
                'title' => 'Допомагаємо бізнесу функціонувати ефективно',
                'description' => 'Допомагаємо бізнесу функціонувати ефективно',
            ],
            [
                'code' => 'projects',
                'title' => 'Реалізовані проекти компанії Mediaservice',
                'description' => 'Реалізовані проекти компанії Mediaservice',
            ],
            [
                'code' => 'study',
                'title' => 'Сертифікований навчальний центр',
                'description' => 'Курси BAS у Львові від офіційного представника, розроблені провідними методистами САБ - це гарантія якості Вашого навчання',
            ],
            [
                'code' => 'videos',
                'title' => 'Навчальні відео',
                'description' => 'Навчальні відео',
            ],
        ];

        foreach ($data as $item) {
            $attrs['bottom'] = $item['bottom'] ?? 1;
            $attrs['code'] = $item['code'];
            $attrs['title'] = $item['title'];
            $attrs['description'] = $item['description'];
            $attrs['description_short'] = $item['description_short'] ?? '';
            $attrs['content'] = $item['content'] ?? '';
            $attrs['seo_title'] = $item['title'];
            $attrs['seo_description'] = $item['title'];
            $attrs['seo_keywords'] = $item['title'];
            $page = Page::query()->create($attrs);
        }
    }
}

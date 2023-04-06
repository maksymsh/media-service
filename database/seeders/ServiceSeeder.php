<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ServiceSeeder extends Seeder
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
                'image' => 's11.svg',
                'background' => 's1.svg',
                'name' => 'BAS',
                'slug' => 'bas-service',
                'description_short' => '<p><div class="anons">Програмні рішення для створення комплексних систем автоматизації бізнесу </div><ul class="ul-custom"><li>BAS Бухгалтерія / Базова / Проф / Корп</li><li>BAS Комплексне управління</li><li>BAS Управління торгівлею</li><li>BAS роздрібна торгівля</li><li>BAS Малий бізнес</li></ul></p>',
                'description' => '<p>BAS ERP - флагманське рішення з лінійки BAS, мета якого спрямована на автоматизацію найскладніших бізнес-процесів великого підприємства та створення єдиного інформаційного простору для управління діяльністю підприємства <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива!  <br/> <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива! <br/> Комплексна автоматизація підприємства в компанії “Медіа Сервіс” передбачає не лише продаж усіх позицій, а й встановлення, налагодження обмінів та коректної роботи обладнання, прав доступу користувачів, різноманітні доробки в програмних продуктах BAS, навчання персоналу і всебічну підтримку проекту після впровадження.</p>',
                'content' => '<section class="etapi"><div class="title">Етапи впровадження <br>великих проектів</div><div class="items"><p><div class="items"><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Підготовка проекту</div></div><div class="anons">Формування проектної команди, визначення та затвердження регламентів управління проектом, попередня оцінка рамок проекту, ініціація виконання проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Передпроектні роботи</div></div><div class="anons">Проведення передпроектного обстеження підприємтва або експрес-обстеження (аналіз існуючух бізнес-процесів на підприємствах Замовника), формалізація вимог Замовника, аналіз матеріальних та людських ресурсів для забезпечення успішного виконання проекту, оцінка ризиків, визначення бюджету та термінів реалізації проекту, екскізне проектування майбутньої інформаційної системи.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Розробка інфомаційної системи</div></div><div class="anons">Виконання програмування модулів системи, створення документації, тестування системи на функіональність та швидкодію, прийом результатів Замовником.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Введення системи в експлуатацію</div></div><div class="anons">Розгортання програмної та технічної інфраструктури системи, проведення навчання користувачів, перенесення даних з попередніх систем, рішення про готовність системи до промислової експлуатації.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">05</div><div class="name">Завершення інтеграції</div></div><div class="anons">Переведення системи в промислову експлуатацію, підведення підсумків проекту, формальне закриття проекту, передача проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">06</div><div class="name">Супровід</div></div><div class="anons">Надання необхідного саме вам комплексу послуг для забезпечення стабільної та комфортної роботи з програмами BAS</div></div></div></p></div></section>',
            ],
            [
                'image' => 's22.svg',
                'background' => 's2.svg',
                'name' => 'Впровадження CRM та корпоративних порталів',
                'description_short' => '<p><div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div><ul class="ul-custom"><li>Розробка сайтів та їх інтеграція</li><li>Впровадження CRM</li></ul></p>',
                'description' => '<p>BAS ERP - флагманське рішення з лінійки BAS, мета якого спрямована на автоматизацію найскладніших бізнес-процесів великого підприємства та створення єдиного інформаційного простору для управління діяльністю підприємства <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива!  <br/> <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива! <br/> Комплексна автоматизація підприємства в компанії “Медіа Сервіс” передбачає не лише продаж усіх позицій, а й встановлення, налагодження обмінів та коректної роботи обладнання, прав доступу користувачів, різноманітні доробки в програмних продуктах BAS, навчання персоналу і всебічну підтримку проекту після впровадження.</p>',
                'content' => '<section class="etapi"><div class="title">Етапи впровадження <br>великих проектів</div><div class="items"><p><div class="items"><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Підготовка проекту</div></div><div class="anons">Формування проектної команди, визначення та затвердження регламентів управління проектом, попередня оцінка рамок проекту, ініціація виконання проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Передпроектні роботи</div></div><div class="anons">Проведення передпроектного обстеження підприємтва або експрес-обстеження (аналіз існуючух бізнес-процесів на підприємствах Замовника), формалізація вимог Замовника, аналіз матеріальних та людських ресурсів для забезпечення успішного виконання проекту, оцінка ризиків, визначення бюджету та термінів реалізації проекту, екскізне проектування майбутньої інформаційної системи.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Розробка інфомаційної системи</div></div><div class="anons">Виконання програмування модулів системи, створення документації, тестування системи на функіональність та швидкодію, прийом результатів Замовником.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Введення системи в експлуатацію</div></div><div class="anons">Розгортання програмної та технічної інфраструктури системи, проведення навчання користувачів, перенесення даних з попередніх систем, рішення про готовність системи до промислової експлуатації.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">05</div><div class="name">Завершення інтеграції</div></div><div class="anons">Переведення системи в промислову експлуатацію, підведення підсумків проекту, формальне закриття проекту, передача проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">06</div><div class="name">Супровід</div></div><div class="anons">Надання необхідного саме вам комплексу послуг для забезпечення стабільної та комфортної роботи з програмами BAS</div></div></div></p></div></section>',
            ],
            [
                'image' => 's33.svg',
                'background' => 's3.svg',
                'name' => 'Обслуговування сервісів та мереж',
                'description_short' => '<p><div class="anons">Надійна локальна мережа та телефонія є фундаментом вашої безперебійної роботи бізнесу </div></p>',
                'description' => '<p>BAS ERP - флагманське рішення з лінійки BAS, мета якого спрямована на автоматизацію найскладніших бізнес-процесів великого підприємства та створення єдиного інформаційного простору для управління діяльністю підприємства <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива!  <br/> <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива! <br/> Комплексна автоматизація підприємства в компанії “Медіа Сервіс” передбачає не лише продаж усіх позицій, а й встановлення, налагодження обмінів та коректної роботи обладнання, прав доступу користувачів, різноманітні доробки в програмних продуктах BAS, навчання персоналу і всебічну підтримку проекту після впровадження.</p>',
                'content' => '<section class="etapi"><div class="title">Етапи впровадження <br>великих проектів</div><div class="items"><p><div class="items"><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Підготовка проекту</div></div><div class="anons">Формування проектної команди, визначення та затвердження регламентів управління проектом, попередня оцінка рамок проекту, ініціація виконання проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Передпроектні роботи</div></div><div class="anons">Проведення передпроектного обстеження підприємтва або експрес-обстеження (аналіз існуючух бізнес-процесів на підприємствах Замовника), формалізація вимог Замовника, аналіз матеріальних та людських ресурсів для забезпечення успішного виконання проекту, оцінка ризиків, визначення бюджету та термінів реалізації проекту, екскізне проектування майбутньої інформаційної системи.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Розробка інфомаційної системи</div></div><div class="anons">Виконання програмування модулів системи, створення документації, тестування системи на функіональність та швидкодію, прийом результатів Замовником.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Введення системи в експлуатацію</div></div><div class="anons">Розгортання програмної та технічної інфраструктури системи, проведення навчання користувачів, перенесення даних з попередніх систем, рішення про готовність системи до промислової експлуатації.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">05</div><div class="name">Завершення інтеграції</div></div><div class="anons">Переведення системи в промислову експлуатацію, підведення підсумків проекту, формальне закриття проекту, передача проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">06</div><div class="name">Супровід</div></div><div class="anons">Надання необхідного саме вам комплексу послуг для забезпечення стабільної та комфортної роботи з програмами BAS</div></div></div></p></div></section>',
            ],
            [
                'image' => 's44.svg',
                'background' => 's4.svg',
                'name' => 'Обслуговування РРО/ПРРО',
                'description_short' => '<p><div class="anons">Допоможемо на етапі підбору, впровадження та подальшого обслуговування </div></p>',
                'description' => '<p>BAS ERP - флагманське рішення з лінійки BAS, мета якого спрямована на автоматизацію найскладніших бізнес-процесів великого підприємства та створення єдиного інформаційного простору для управління діяльністю підприємства <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива!  <br/> <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива! <br/> Комплексна автоматизація підприємства в компанії “Медіа Сервіс” передбачає не лише продаж усіх позицій, а й встановлення, налагодження обмінів та коректної роботи обладнання, прав доступу користувачів, різноманітні доробки в програмних продуктах BAS, навчання персоналу і всебічну підтримку проекту після впровадження.</p>',
                'content' => '<section class="etapi"><div class="title">Етапи впровадження <br>великих проектів</div><div class="items"><p><div class="items"><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Підготовка проекту</div></div><div class="anons">Формування проектної команди, визначення та затвердження регламентів управління проектом, попередня оцінка рамок проекту, ініціація виконання проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Передпроектні роботи</div></div><div class="anons">Проведення передпроектного обстеження підприємтва або експрес-обстеження (аналіз існуючух бізнес-процесів на підприємствах Замовника), формалізація вимог Замовника, аналіз матеріальних та людських ресурсів для забезпечення успішного виконання проекту, оцінка ризиків, визначення бюджету та термінів реалізації проекту, екскізне проектування майбутньої інформаційної системи.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Розробка інфомаційної системи</div></div><div class="anons">Виконання програмування модулів системи, створення документації, тестування системи на функіональність та швидкодію, прийом результатів Замовником.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Введення системи в експлуатацію</div></div><div class="anons">Розгортання програмної та технічної інфраструктури системи, проведення навчання користувачів, перенесення даних з попередніх систем, рішення про готовність системи до промислової експлуатації.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">05</div><div class="name">Завершення інтеграції</div></div><div class="anons">Переведення системи в промислову експлуатацію, підведення підсумків проекту, формальне закриття проекту, передача проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">06</div><div class="name">Супровід</div></div><div class="anons">Надання необхідного саме вам комплексу послуг для забезпечення стабільної та комфортної роботи з програмами BAS</div></div></div></p></div></section>',
            ],
            [
                'image' => 's55.svg',
                'background' => 's5.svg',
                'name' => 'Розробка мобільних додатків',
                'description_short' => '<p><div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div></p>',
                'description' => '<p>BAS ERP - флагманське рішення з лінійки BAS, мета якого спрямована на автоматизацію найскладніших бізнес-процесів великого підприємства та створення єдиного інформаційного простору для управління діяльністю підприємства <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива!  <br/> <br/> А найголовніше - при підборі ми враховуємо сумісність усіх цих складових між собою, тому ймовірність конфлікту в роботі техніки майже неможлива! <br/> Комплексна автоматизація підприємства в компанії “Медіа Сервіс” передбачає не лише продаж усіх позицій, а й встановлення, налагодження обмінів та коректної роботи обладнання, прав доступу користувачів, різноманітні доробки в програмних продуктах BAS, навчання персоналу і всебічну підтримку проекту після впровадження.</p>',
                'content' => '<section class="etapi"><div class="title">Етапи впровадження <br>великих проектів</div><div class="items"><p><div class="items"><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Підготовка проекту</div></div><div class="anons">Формування проектної команди, визначення та затвердження регламентів управління проектом, попередня оцінка рамок проекту, ініціація виконання проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Передпроектні роботи</div></div><div class="anons">Проведення передпроектного обстеження підприємтва або експрес-обстеження (аналіз існуючух бізнес-процесів на підприємствах Замовника), формалізація вимог Замовника, аналіз матеріальних та людських ресурсів для забезпечення успішного виконання проекту, оцінка ризиків, визначення бюджету та термінів реалізації проекту, екскізне проектування майбутньої інформаційної системи.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Розробка інфомаційної системи</div></div><div class="anons">Виконання програмування модулів системи, створення документації, тестування системи на функіональність та швидкодію, прийом результатів Замовником.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Введення системи в експлуатацію</div></div><div class="anons">Розгортання програмної та технічної інфраструктури системи, проведення навчання користувачів, перенесення даних з попередніх систем, рішення про готовність системи до промислової експлуатації.</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">05</div><div class="name">Завершення інтеграції</div></div><div class="anons">Переведення системи в промислову експлуатацію, підведення підсумків проекту, формальне закриття проекту, передача проекту</div></div><div class="etap d-md-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">06</div><div class="name">Супровід</div></div><div class="anons">Надання необхідного саме вам комплексу послуг для забезпечення стабільної та комфортної роботи з програмами BAS</div></div></div></p></div></section>',
            ],
        ];

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];
            $attrs['description_short'] = $item['description_short'];
            $attrs['description'] = $item['description'];
            $attrs['content'] = $item['content'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            if ($item['slug'] ?? false) {
                $attrs['slug'] = $item['slug'];
            }
            $service = Service::factory()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $service->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
            File::copy(public_path('images/'.$item['background']), resource_path('images/'.$item['background']));
            $service->addMedia(resource_path('images/'.$item['background']))->toMediaCollection('background');
        }
    }
}

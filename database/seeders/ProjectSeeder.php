<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProjectSeeder extends Seeder
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
                'image' => 'j1.jpg',
                'logo' => 'logo1.png',
                'images' => ['g1.jpg', 'g1.jpg', 'g1.jpg'],
                'title' => 'Мережа магазинів «Gorgany»',
                'description' => '«Gorgany» - експерти з туристичного спорядження. У магазинах можна придбати одяг, взуття, обладнання для подорожей, кемпінгу, альпінізму та інші активності. На даний момент в Україні успішно працює 12 магазинів у Києві, Львові, Івано-Франківську, Тернополі, Чернівцях, Рівному, Житомирі, Вінниці, Одесі та Буковелі.',
                'description_short' => 'Автоматизація мережі магазинів',
                'content' => '<div class="detail-etapi"><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Основне завдання</div></div><div class="anons"><p>Основними завданнями компанії “Медіа Сервіс” було спрощення однотипної механічної роботи працівника та автоматизація системи усіх бізнес-процесів компанії.</p></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Запропоновані рішення</div></div><div class="anons"><p>Для того, щоб обслуговування клієнтів проводилось не тільки швидко, але й ефективно були запропоновані та впроваджені наступні рішення, в тому числі мобільні:</p><ul class="ul-custom-2"><li>Інтеграція із зовнішніми системами</li><li>Обмін з інтернет-магазинами</li><li>Оптимізація роботи складу завдяки мобільному додатку PROскануй</li><li>Оптимізація роботи кур’єрських доставок</li><li>Замовлення з сайту</li><li>Отримання аналітики на месенжери/пошту</li></ul></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Впровадження та розробка</div></div><div class="anons"><p>Наші спеціалісти розробили програмне забезпечення для терміналів збору даних відповідно до потреб замовника, для більш якісної та ефективної роботи торгових точок.</p><p>Також до облікової системи підключене та налагоджене наступне торгове обладнання:</p><ul class="ul-custom-2"><li>POS-термінали</li><li>Принтери</li><li>Грошові скриньки</li><li>РРО та ПРРО</li></ul></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Результати роботи</div></div><div class="anons"><p>Завдяки компанії "Медіа Сервіс" налагоджено роботу мережі магазинів «Gorgany». Відтепер автоматизовано всі необхідні операції, починаючи від надходження товарів на склад (їх реалізація, переміщення, торгівля, оприбуткування, інвентаризація та списання), та завершуючи різними аналітичними звітами, що дозволяють проаналізувати діяльність магазину (провести вартісну оцінку товарів у роздрібних цінах, аналіз продажів та повернень товарів, а також визначити, яку годину і який товар краще продається в різних торгових точках - дані про продаж миттєво надходять до головного офісу, що дозволяє ефективно планувати закупівлю товарів та отримувати дані про доходи кожного з магазинів).</p></div></div></div>',
            ],
            [
                'image' => 'j2.jpg',
                'logo' => 'logo2.png',
                'images' => ['g1.jpg', 'g1.jpg', 'g1.jpg'],
                'title' => 'Автоматизація та встановлення BAS КУП “Вухо.Ком”',
                'description' => '«Gorgany» - експерти з туристичного спорядження. У магазинах можна придбати одяг, взуття, обладнання для подорожей, кемпінгу, альпінізму та інші активності. На даний момент в Україні успішно працює 12 магазинів у Києві, Львові, Івано-Франківську, Тернополі, Чернівцях, Рівному, Житомирі, Вінниці, Одесі та Буковелі.',
                'description_short' => 'Автоматизація мережі магазинів',
                'content' => '<div class="detail-etapi"><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Основне завдання</div></div><div class="anons"><p>Основними завданнями компанії “Медіа Сервіс” було спрощення однотипної механічної роботи працівника та автоматизація системи усіх бізнес-процесів компанії.</p></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Запропоновані рішення</div></div><div class="anons"><p>Для того, щоб обслуговування клієнтів проводилось не тільки швидко, але й ефективно були запропоновані та впроваджені наступні рішення, в тому числі мобільні:</p><ul class="ul-custom-2"><li>Інтеграція із зовнішніми системами</li><li>Обмін з інтернет-магазинами</li><li>Оптимізація роботи складу завдяки мобільному додатку PROскануй</li><li>Оптимізація роботи кур’єрських доставок</li><li>Замовлення з сайту</li><li>Отримання аналітики на месенжери/пошту</li></ul></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Впровадження та розробка</div></div><div class="anons"><p>Наші спеціалісти розробили програмне забезпечення для терміналів збору даних відповідно до потреб замовника, для більш якісної та ефективної роботи торгових точок.</p><p>Також до облікової системи підключене та налагоджене наступне торгове обладнання:</p><ul class="ul-custom-2"><li>POS-термінали</li><li>Принтери</li><li>Грошові скриньки</li><li>РРО та ПРРО</li></ul></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Результати роботи</div></div><div class="anons"><p>Завдяки компанії "Медіа Сервіс" налагоджено роботу мережі магазинів «Gorgany». Відтепер автоматизовано всі необхідні операції, починаючи від надходження товарів на склад (їх реалізація, переміщення, торгівля, оприбуткування, інвентаризація та списання), та завершуючи різними аналітичними звітами, що дозволяють проаналізувати діяльність магазину (провести вартісну оцінку товарів у роздрібних цінах, аналіз продажів та повернень товарів, а також визначити, яку годину і який товар краще продається в різних торгових точках - дані про продаж миттєво надходять до головного офісу, що дозволяє ефективно планувати закупівлю товарів та отримувати дані про доходи кожного з магазинів).</p></div></div></div>',
            ],
            [
                'image' => 'j3.jpg',
                'logo' => 'logo3.png',
                'images' => ['g1.jpg', 'g1.jpg', 'g1.jpg'],
                'title' => 'Мережа роздрібної торгівлі “Свій Маркет”.',
                'description' => '«Gorgany» - експерти з туристичного спорядження. У магазинах можна придбати одяг, взуття, обладнання для подорожей, кемпінгу, альпінізму та інші активності. На даний момент в Україні успішно працює 12 магазинів у Києві, Львові, Івано-Франківську, Тернополі, Чернівцях, Рівному, Житомирі, Вінниці, Одесі та Буковелі.',
                'description_short' => 'Автоматизація мережі магазинів',
                'content' => '<div class="detail-etapi"><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">01</div><div class="name">Основне завдання</div></div><div class="anons"><p>Основними завданнями компанії “Медіа Сервіс” було спрощення однотипної механічної роботи працівника та автоматизація системи усіх бізнес-процесів компанії.</p></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">02</div><div class="name">Запропоновані рішення</div></div><div class="anons"><p>Для того, щоб обслуговування клієнтів проводилось не тільки швидко, але й ефективно були запропоновані та впроваджені наступні рішення, в тому числі мобільні:</p><ul class="ul-custom-2"><li>Інтеграція із зовнішніми системами</li><li>Обмін з інтернет-магазинами</li><li>Оптимізація роботи складу завдяки мобільному додатку PROскануй</li><li>Оптимізація роботи кур’єрських доставок</li><li>Замовлення з сайту</li><li>Отримання аналітики на месенжери/пошту</li></ul></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">03</div><div class="name">Впровадження та розробка</div></div><div class="anons"><p>Наші спеціалісти розробили програмне забезпечення для терміналів збору даних відповідно до потреб замовника, для більш якісної та ефективної роботи торгових точок.</p><p>Також до облікової системи підключене та налагоджене наступне торгове обладнання:</p><ul class="ul-custom-2"><li>POS-термінали</li><li>Принтери</li><li>Грошові скриньки</li><li>РРО та ПРРО</li></ul></div></div><div class="etap d-xl-flex align-items-start justify-content-between"><div class="d-flex align-items-center"><div class="number">04</div><div class="name">Результати роботи</div></div><div class="anons"><p>Завдяки компанії "Медіа Сервіс" налагоджено роботу мережі магазинів «Gorgany». Відтепер автоматизовано всі необхідні операції, починаючи від надходження товарів на склад (їх реалізація, переміщення, торгівля, оприбуткування, інвентаризація та списання), та завершуючи різними аналітичними звітами, що дозволяють проаналізувати діяльність магазину (провести вартісну оцінку товарів у роздрібних цінах, аналіз продажів та повернень товарів, а також визначити, яку годину і який товар краще продається в різних торгових точках - дані про продаж миттєво надходять до головного офісу, що дозволяє ефективно планувати закупівлю товарів та отримувати дані про доходи кожного з магазинів).</p></div></div></div>',
            ],
        ];

        $categories = Category::query()->where('type', Project::class)->pluck('id')->toArray();

        foreach ($data as $item) {
            $attrs['title'] = $item['title'];
            $attrs['description'] = $item['description'];
            $attrs['seo_title'] = $item['title'];
            $attrs['seo_description'] = $item['title'];
            $attrs['seo_keywords'] = $item['title'];
            $project = Project::factory()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $project->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
            File::copy(public_path('images/'.$item['logo']), resource_path('images/'.$item['logo']));
            $project->addMedia(resource_path('images/'.$item['logo']))->toMediaCollection('logo');
            foreach ($item['images'] as $image) {
                File::copy(public_path('images/'.$image), resource_path('images/'.$image));
                $project->addMedia(resource_path('images/'.$image))->toMediaCollection('images');
            }
            $project->categories()->sync($categories);
        }
    }
}

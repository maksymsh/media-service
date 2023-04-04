<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class NewsSeeder extends Seeder
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
                'title' => 'Вебінар до дня Бухгалтера',
                'description' => '<p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з\'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).</p>',
                'content' => '<p><div class="news-title">Теми зустрічі:</div><ul><li>ПДВ і фінзвітність, а також все що стосується бухобліку та податку на прибуток від спікера Людмили Шахно</li><li>Як підтримувати у собі високий рівень ентузіазму та енергії? Доповідь бізнес-тренера Романа Кушніра</li><li>Відповіді на найбільш поширені запити щодо роботи з програмами BAS від фахівця-аналітика нашої компанії.</li></ul><div class="news-questions">Якщо у Вас залишились запитання – пишіть їх на пошту: <a href="mailto:info@medias.com.ua">info@medias.com.ua</a></div><div class="news-video"><a href="https://youtu.be/fdk7yCMnre8" class="video-container" data-fancybox=""><div class="play-button anim"><img src="images/video2.svg" alt=""></div><img src="images/video2.jpg" alt=""></a></div></p>',
                'image' => 'n1.jpg',
                'video' => 'https://youtu.be/5_dcRN8il-w',
            ],
            [
                'title' => 'З Днем Української Державності, Україно!',
                'description' => '<p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з\'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).</p>',
                'content' => '<p><div class="news-title">Теми зустрічі:</div><ul><li>ПДВ і фінзвітність, а також все що стосується бухобліку та податку на прибуток від спікера Людмили Шахно</li><li>Як підтримувати у собі високий рівень ентузіазму та енергії? Доповідь бізнес-тренера Романа Кушніра</li><li>Відповіді на найбільш поширені запити щодо роботи з програмами BAS від фахівця-аналітика нашої компанії.</li></ul><div class="news-questions">Якщо у Вас залишились запитання – пишіть їх на пошту: <a href="mailto:info@medias.com.ua">info@medias.com.ua</a></div><div class="news-video"><a href="https://youtu.be/fdk7yCMnre8" class="video-container" data-fancybox=""><div class="play-button anim"><img src="images/video2.svg" alt=""></div><img src="images/video2.jpg" alt=""></a></div></p>',
                'image' => 'n2.jpg',
                'video' => 'https://youtu.be/5_dcRN8il-w',
            ],
            [
                'title' => 'З Днем Збройних Сил України!',
                'description' => '<p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з\'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).</p>',
                'content' => '<p><div class="news-title">Теми зустрічі:</div><ul><li>ПДВ і фінзвітність, а також все що стосується бухобліку та податку на прибуток від спікера Людмили Шахно</li><li>Як підтримувати у собі високий рівень ентузіазму та енергії? Доповідь бізнес-тренера Романа Кушніра</li><li>Відповіді на найбільш поширені запити щодо роботи з програмами BAS від фахівця-аналітика нашої компанії.</li></ul><div class="news-questions">Якщо у Вас залишились запитання – пишіть їх на пошту: <a href="mailto:info@medias.com.ua">info@medias.com.ua</a></div><div class="news-video"><a href="https://youtu.be/fdk7yCMnre8" class="video-container" data-fancybox=""><div class="play-button anim"><img src="images/video2.svg" alt=""></div><img src="images/video2.jpg" alt=""></a></div></p>',
                'image' => 'n3.jpg',
                'video' => 'https://youtu.be/5_dcRN8il-w',
            ],
        ];

        $categories = Category::query()->where('type', News::class)->pluck('id')->toArray();

        foreach ($data as $item) {
            $attrs['title'] = $item['title'];
            $attrs['description'] = $item['description'];
            $attrs['content'] = $item['content'];
            $news = News::query()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $news->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');

            $news->categories()->sync($categories);
        }
    }
}

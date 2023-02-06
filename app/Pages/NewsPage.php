<?php

namespace App\Pages;

use App\Models\Layout;
use App\Pages\Base\AppPage;
use ProtoneMedia\Splade\Head;

class NewsPage extends AppPage
{
    public function seo(): Head
    {
        $title = 'fsdfsd';
        /** @var Head $seo */
        $seo = \SEO::title($title);

        return $seo;
    }

    public function layout(): Layout
    {
        return Layout::query()->where('code', 'news-index')->first();
        // TODO: Implement layout() method.
    }
}

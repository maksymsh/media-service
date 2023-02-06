<?php

namespace App\Pages;

use App\Pages\Base\AppPage;
use ProtoneMedia\Splade\Head;

class HomePage extends AppPage
{
    public $code = 'home-index';

    public function seo(Head $seo): Head
    {
        return $seo->title('jgjg');
    }
}

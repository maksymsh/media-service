<?php

namespace App\Pages\Base;

use App\Models\Layout;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Head;

abstract class AppPage
{
    public Request $request;

    public Layout $layout;

    public Head $seo;

    public $code;

    public $route;

    public function __construct(Request $request, Layout $layout, Head $seo)
    {
        $this->request = $request;
        $this->layout = $layout;
        $this->seo = $seo;
    }

    public function getLayout(): Layout
    {
        return Layout::query()->firstOr(['code' => $this->code]);
    }
}

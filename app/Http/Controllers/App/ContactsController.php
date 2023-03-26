<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use ProtoneMedia\Splade\Facades\SEO;

class ContactsController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('code', 'contacts')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        SEO::headerClass('fix');

        return view('app.contacts.index', [
            'page' => $page,
        ]);
    }
}

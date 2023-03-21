<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use ProtoneMedia\Splade\Facades\SEO;

class ContactsController extends Controller
{
    public function index()
    {
        SEO::headerClass('fix');

        $page = Page::query()->where('code', 'contacts')->firstOrFail();

        return view('app.contacts.index', [
            'page' => $page,
        ]);
    }
}

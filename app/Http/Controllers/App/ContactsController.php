<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\Facades\SEO;

class ContactsController extends Controller
{
    public function index()
    {
        SEO::headerClass('fix');

        return view('app.contacts.index');
    }
}

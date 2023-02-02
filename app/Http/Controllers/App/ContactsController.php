<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index()
    {
        return view('app.contacts.index');
    }
}

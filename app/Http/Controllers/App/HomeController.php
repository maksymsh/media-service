<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\Facades\SEO;

class HomeController extends Controller
{
    public function index()
    {
        SEO::title('Media Serice - Home');

        return view('app.home.index', [
        ]);
    }
}

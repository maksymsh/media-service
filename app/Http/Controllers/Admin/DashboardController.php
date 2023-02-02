<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\Facades\SEO;

class DashboardController extends Controller
{
    public function index()
    {
        SEO::title('Laravel Splade Course')
            ->description('Become the Splade expert!')
            ->keywords('laravel, splade, course');

        return view('admin.dashboard.index');
    }
}

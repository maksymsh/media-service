<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('app.services.index');
    }

    public function service(Service $service)
    {
        return view('app.services.service');
    }
}

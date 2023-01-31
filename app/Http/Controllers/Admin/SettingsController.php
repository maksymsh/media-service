<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneratSettingsRequest;
use App\Settings\GeneralSettings;
use ProtoneMedia\Splade\Facades\Toast;

class SettingsController extends Controller
{
    public function index(GeneralSettings $settings)
    {
        return view('admin.settings.index', [
            'settings' => $settings,
        ]);
    }

    public function save(GeneratSettingsRequest $request, GeneralSettings $settings)
    {
        $settings->fill($request->validated());
        $settings->save();

        Toast::success('General settings updated!');

        return redirect()->route('admin.settings.index');
    }
}

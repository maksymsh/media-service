<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SortingRequest;
use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Model;

class SortingController extends Controller
{
    public function update(SortingRequest $request)
    {
        /** @var Model $model */
        $model = app()->make($request->get('model'));

        $model = app()->make(MenuItem::class);

        if ($model) {
            foreach ($request->get('data') as $data) {
                $model->newQuery()->whereKey($data['id'])->update(['position' => $data['position']]);
            }
        }
    }
}

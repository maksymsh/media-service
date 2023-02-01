<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SortingRequest;
use Illuminate\Database\Eloquent\Model;
use Toast;

class SortingController extends Controller
{
    public function update(SortingRequest $request)
    {
        /** @var Model $model */
        $model = app()->make($request->get('model'));

        if ($model) {
            foreach ($request->get('data') as $data) {
                $model->newQuery()->whereKey($data['id'])->update(['position' => $data['position']]);
            }
        }

        Toast::success('Model updated.');

        return redirect()->back();
    }
}

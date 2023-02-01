<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PublishingRequest;
use Illuminate\Database\Eloquent\Model;
use Toast;

class PublishingController extends Controller
{
    public function update(PublishingRequest $request)
    {
        /** @var Model $model */
        $model = app()->make($request->get('model'))->find($request->get('id'));

        $model->published = $request->get('published');
        $model->save();

        Toast::success('Model updated.');

        return redirect()->back();
    }
}

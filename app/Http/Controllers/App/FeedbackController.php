<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\FeedbackRequest;
use App\Models\Order;
use Illuminate\Support\Facades\URL;
use ProtoneMedia\Splade\Facades\Toast;

class FeedbackController extends Controller
{
    public function index(FeedbackRequest $request)
    {
        $type = $request->get('type', 'contact');

        if ($type === 'order_good') {
            $order = Order::query()->create([
                'model_type' => $request->get('type'),
                'model_id' => $request->get('id'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment'),
            ]);

            Toast::success('Order created #'.$order->id);
        }

        if ($type === 'contact') {
            $order = Order::query()->create([
                'model_type' => $request->get('type'),
                'model_id' => $request->get('id'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment'),
            ]);

            Toast::success('Order created #'.$order->id);
        }

        if ($type === 'consult') {
            $order = Order::query()->create([
                'model_type' => $request->get('type'),
                'model_id' => $request->get('id'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment'),
            ]);

            Toast::success('Order created #'.$order->id);
        }

        if ($type === 'demo') {
            $order = Order::query()->create([
                'model_type' => $request->get('type'),
                'model_id' => $request->get('id'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment'),
            ]);

            Toast::success('Order created #'.$order->id);
        }

        if ($type === 'course') {
            $order = Order::query()->create([
                'model_type' => $request->get('type'),
                'model_id' => $request->get('id'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment'),
            ]);

            Toast::success('Order created #'.$order->id);
        }

        $url = URL::previous();

        return redirect($url);
    }
}

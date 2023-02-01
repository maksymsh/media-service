<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\StoreOrderRequest;
use App\Http\Requests\Admin\Order\UpdateOrderRequest;
use App\Models\Order;
use App\Services\UploadMediaService;
use App\Tables\OrdersTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class OrderController extends Controller
{
    public function __construct(
        protected UploadMediaService $uploadMediaService
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  OrdersTable  $orders
     * @return View
     */
    public function index(Request $request, OrdersTable $orders)
    {
        return view('admin.orders.index', [
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Order  $order
     * @return View
     */
    public function create(Request $request, Order $order)
    {
        return view('admin.orders.create', [
            'order' => $order,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreOrderRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreOrderRequest $request)
    {
        $order = Order::query()->create($request->validated());

        $this->uploadMediaService->sync($request, $order);

        Toast::success("Order #$order->id created successfully.");

        return redirect()->route('admin.orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Order  $order
     * @return View
     */
    public function show(Request $request, Order $order)
    {
        return view('admin.orders.show', [
            'order' => $order,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Order  $order
     * @return View
     */
    public function edit(Request $request, Order $order)
    {
        return view('admin.orders.edit', [
            'order' => $order,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateOrderRequest  $request
     * @param  Order  $order
     * @return RedirectResponse
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->validated());

        $this->uploadMediaService->sync($request, $order);

        Toast::success("Order #$order->id updated successfully.");

        return redirect()->route('admin.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Order  $order
     * @return RedirectResponse
     */
    public function destroy(Request $request, Order $order)
    {
        $order->delete();

        Toast::success("Order #$order->id updated successfully.");

        return redirect()->route('admin.orders.index');
    }
}

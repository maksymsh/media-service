<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGoodRequest;
use App\Http\Requests\UpdateGoodRequest;
use App\Models\Good;
use App\Tables\GoodsTable;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GoodsTable $goods)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function show(Good $good)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function edit(Good $good)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoodRequest  $request
     * @param  \App\Models\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoodRequest $request, Good $good)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function destroy(Good $good)
    {
        //
    }
}

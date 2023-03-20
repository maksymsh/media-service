<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Attribute\StoreAttributeRequest;
use App\Http\Requests\Admin\Attribute\UpdateAttributeRequest;
use App\Models\Attribute;
use App\Services\AttributeService;
use App\Tables\AttributesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class AttributeController extends Controller
{
    public function __construct(
        protected AttributeService $attributeService,
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  AttributesTable  $attributes
     * @return View
     */
    public function index(Request $request, AttributesTable $attributes)
    {
        return view('admin.attributes.index', [
            'attributes' => $attributes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @param  Attribute  $attribute
     * @return View
     */
    public function create(Request $request, Attribute $attribute)
    {
        return view('admin.attributes.create', [
            'attribute' => $attribute,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAttributeRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreAttributeRequest $request)
    {
        $attribute = $this->attributeService->create($request->validated());

        Toast::success("Attribute #$attribute->id created successfully.");

        return redirect()->route('admin.attributes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Attribute  $attribute
     * @return View
     */
    public function show(Request $request, Attribute $attribute)
    {
        return view('admin.attributes.show', [
            'attribute' => $attribute,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Attribute  $attribute
     * @return View
     */
    public function edit(Request $request, Attribute $attribute)
    {
        return view('admin.attributes.edit', [
            'attribute' => $attribute,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAttributeRequest  $request
     * @param  Attribute  $attribute
     * @return RedirectResponse
     */
    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        $this->attributeService->update($attribute, $request->validated());

        Toast::success("Attribute #$attribute->id updated successfully.");

        return redirect()->route('admin.attributes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Attribute  $attribute
     * @return RedirectResponse
     */
    public function destroy(Request $request, Attribute $attribute)
    {
        $this->attributeService->delete($attribute);

        Toast::success("Attribute #$attribute->id deleted successfully.");

        return redirect()->route('admin.attributes.index');
    }
}

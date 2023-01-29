<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Example\StoreExampleRequest;
use App\Http\Requests\Admin\Example\UpdateExampleRequest;
use App\Models\Example;
use App\Tables\ExamplesTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @param  ExamplesTable  $examples
     * @return View
     */
    public function index(Request $request, ExamplesTable $examples)
    {
        return view('admin.examples.index', [
            'examples' => $examples,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return View
     */
    public function create(Request $request)
    {
        return view('admin.examples.create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreExampleRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreExampleRequest $request)
    {
        $example = Example::query()->create($request->validated());

        Toast::success("Example #$example->id created successfully.");

        return redirect()->route('admin.examples.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Example  $example
     * @return View
     */
    public function show(Request $request, Example $example)
    {
        return view('admin.examples.show', [
            'example' => $example,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Example  $example
     * @return View
     */
    public function edit(Request $request, Example $example)
    {
        return view('admin.examples.create', [
            'example' => $example,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateExampleRequest  $request
     * @param  Example  $example
     * @return RedirectResponse
     */
    public function update(UpdateExampleRequest $request, Example $example)
    {
        $example->update($request->validated());

        Toast::success("Example #$example->id updated successfully.");

        return redirect()->route('admin.examples.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Example  $example
     * @return RedirectResponse
     */
    public function destroy(Request $request, Example $example)
    {
        if ($example->id !== $request->example()->id) {
            $example->delete();

            Toast::success("Example #$example->id updated successfully.");
        } else {
            Toast::danger("Cannot delete authenticated Example #$example->id.");
        }

        return redirect()->route('admin.examples.index');
    }
}

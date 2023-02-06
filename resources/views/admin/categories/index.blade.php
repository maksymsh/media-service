@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Categories') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.categories.create', request()->route('category_type'))">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$categories" />

        <x-slot:footer>
            <h1>{{ __('Categories') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.categories.create', request()->route('category_type'))">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Layouts'), 'url' => route('admin.layouts.index')],
    ]">

        <x-slot:header>
            <h1>{{ __('Layouts') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.layouts.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$layouts" />

        <x-slot:footer>
            <h1>{{ __('Layouts') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.layouts.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

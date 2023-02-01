@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Examples'), 'url' => route('admin.examples.index')],
    ]">

        <x-slot:header>
            <h1>{{ __('Examples') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.examples.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$examples" />

        <x-slot:footer>
            <h1>{{ __('Examples') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.examples.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

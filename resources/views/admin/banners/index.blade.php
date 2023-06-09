@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Banners'), 'url' => route('admin.banners.index')],
    ]">

        <x-slot:header>
            <h1>{{ __('Banners') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.banners.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$banners" />

        <x-slot:footer>
            <h1>{{ __('Banners') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.banners.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

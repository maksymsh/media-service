@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('MenuItems') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.menu.item.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$menu_items" />

        <x-slot:footer>
            <h1>{{ __('MenuItems') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.menu.item.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

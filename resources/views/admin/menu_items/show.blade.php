@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('MenuItem') }} #{{ $menu_item->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.menu_items.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            {{ json_encode($menu_item) }}
        </div>

        <x-slot:footer>
            <h1>{{ __('MenuItem') }} #{{ $menu_item->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.menu_items.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

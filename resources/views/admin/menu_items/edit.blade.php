@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('MenuItem') }} #{{ $menu_item->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.menu_items.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$menu_item" method="PUT" :action="route('admin.menu_items.update', $menu_item)">
                @include('admin.menu_items.includes.form')

                <x-splade-submit />
            </x-splade-form>
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

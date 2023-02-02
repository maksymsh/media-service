@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Create') }} {{ __('Menu') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.menu.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$menu" method="POST" :action="route('admin.menu.store')">
                @include('admin.menus.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Create') }} {{ __('Menu') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.menu.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

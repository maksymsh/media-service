@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Category') }} #{{ $category->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.categories.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            {{ json_encode($category) }}
        </div>

        <x-slot:footer>
            <h1>{{ __('Category') }} #{{ $category->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.categories.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

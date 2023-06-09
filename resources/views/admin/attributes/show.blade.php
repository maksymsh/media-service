@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Attributes'), 'url' => route('admin.attributes.index')],
        ['title' => '#' . $attribute->id, 'url' => route('admin.attributes.show', $attribute)],
    ]">

        <x-slot:header>
            <h1>{{ __('Attribute') }} #{{ $attribute->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.attributes.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            {{ json_encode($attribute) }}
        </div>

        <x-slot:footer>
            <h1>{{ __('Attribute') }} #{{ $attribute->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.attributes.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

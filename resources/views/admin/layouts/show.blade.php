@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Layouts'), 'url' => route('admin.layouts.index')],
        ['title' => '#' . $layout->id, 'url' => route('admin.layouts.show', $layout)],
    ]">

        <x-slot:header>
            <h1>{{ __('Layout') }} #{{ $layout->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.layouts.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            {{ json_encode($layout) }}
        </div>

        <x-slot:footer>
            <h1>{{ __('Layout') }} #{{ $layout->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.layouts.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

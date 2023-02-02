@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Courses'), 'url' => route('admin.courses.index')],
    ]">

        <x-slot:header>
            <h1>{{ __('Courses') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.courses.create')">
                    <x-admin.icon name="plus"/>
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$courses"/>

        <x-slot:footer>
            <h1>{{ __('Courses') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.courses.create')">
                    <x-admin.icon name="plus"/>
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

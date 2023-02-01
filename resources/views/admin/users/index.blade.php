@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('users'), 'url' => route('admin.users.index')],
        ['title' => '#' . $user->id, 'url' => route('admin.users.create', $user)],
    ]">

        <x-slot:header>
            <h1>{{ __('Users') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$users" />

        <x-slot:footer>
            <h1>{{ __('Users') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

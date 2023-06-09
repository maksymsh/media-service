@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('users'), 'url' => route('admin.users.index')],
        ['title' => '#' . $user->id, 'url' => route('admin.users.create', $user)],
    ]">

        <x-slot:header>
            <h1>{{ __('User') }} #{{ $user->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            {{ json_encode($user) }}
        </div>

        <x-slot:footer>
            <h1>{{ __('User') }} #{{ $user->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('users'), 'url' => route('admin.users.index')],
        ['title' => '#' . $user->id, 'url' => route('admin.users.create', $user)],
    ]">

        <x-slot:header>
            <h1>{{ __('Create') }} {{ __('User') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$user" method="POST" :action="route('admin.users.store')">
                @include('admin.users.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Create') }} {{ __('User') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

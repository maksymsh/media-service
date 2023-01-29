@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }}{{ __('User') }} #{{ $user->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$user" method="PUT" :action="route('admin.users.update', $user)">
                @include('admin.users.includes.form')

                <x-splade-submit />
            </x-splade-form>
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

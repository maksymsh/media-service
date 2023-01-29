@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Users') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.users.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$users">
            <x-splade-cell actions>
                @include('admin.users.includes.actions')
            </x-splade-cell>
        </x-splade-table>

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

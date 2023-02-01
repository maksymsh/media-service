@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Role') }} #{{ $role->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.roles.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="array_merge($role->toArray(), ['permissions' => $permissions])" method="PUT" :action="route('admin.roles.update', $role)">
                @include('admin.roles.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Role') }} #{{ $role->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.roles.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

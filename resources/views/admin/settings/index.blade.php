@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1 class="h3 mb-3">
                <strong>{{ __('Users') }}</strong> general
            </h1>
        </x-slot:header>

        <x-splade-form :default="$settings">

            <x-splade-input name="app_name" :label="__('App name')" />
            <x-splade-input name="app_description" :label="__('App description')" />

            <x-splade-group inline :label="__('App active')">
                <x-splade-checkbox name="app_active" switch />
            </x-splade-group>

            <x-splade-submit />

        </x-splade-form>

    </x-admin.layout.page>
@endsection

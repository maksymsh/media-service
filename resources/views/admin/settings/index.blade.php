@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1 class="h3 mb-3">
                <strong>{{ __('Users') }}</strong> general
            </h1>
        </x-slot:header>

        <x-splade-form :default="$settings">

            <x-splade-input name="site_name" :label="__('Site name')" />

            <x-splade-group inline :label="__('Site active')">
                <x-splade-checkbox name="site_active" switch />
            </x-splade-group>

            <x-splade-submit />

        </x-splade-form>

    </x-admin.layout.page>
@endsection

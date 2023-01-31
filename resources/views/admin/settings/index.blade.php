@extends('admin.layout.app')

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">
            <strong>Settings</strong> general
        </h1>

        <x-splade-form :default="$settings">

            <x-splade-input name="site_name" :label="__('Site name')" />

            <x-splade-group inline :label="__('Site active')">
                <x-splade-checkbox name="site_active" switch />
            </x-splade-group>

            <x-splade-submit />

        </x-splade-form>
    </div>
@endsection

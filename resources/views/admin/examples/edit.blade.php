@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Examples'), 'url' => route('admin.examples.index')],
        ['title' => '#' . $example->id, 'url' => route('admin.examples.edit', $example)],
    ]">

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Example') }} #{{ $example->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.examples.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$example" method="PUT" :action="route('admin.examples.update', $example)">
                @include('admin.examples.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Example') }} #{{ $example->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.examples.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

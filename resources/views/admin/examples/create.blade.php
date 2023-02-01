@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Examples'), 'url' => route('admin.examples.index')],
        ['title' => '#' . $example->id, 'url' => route('admin.examples.create', $example)],
    ]">

        <x-slot:header>
                <h1>{{ __('Create') }} {{ __('Example') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.examples.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$example" method="POST" :action="route('admin.examples.store')">
                @include('admin.examples.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Create') }} {{ __('Example') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.examples.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

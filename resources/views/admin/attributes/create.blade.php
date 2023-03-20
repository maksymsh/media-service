@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Attributes'), 'url' => route('admin.attributes.index')],
        ['title' => '#' . $attribute->id, 'url' => route('admin.attributes.create', $attribute)],
    ]">

        <x-slot:header>
                <h1>{{ __('Create') }} {{ __('Attribute') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.attributes.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$attribute" method="POST" :action="route('admin.attributes.store')">
                @include('admin.attributes.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Create') }} {{ __('Attribute') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.attributes.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

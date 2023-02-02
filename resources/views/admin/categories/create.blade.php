@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Create') }} {{ __('Category') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.categories.index', request()->route('category_type'))">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$category" method="POST" :action="route('admin.categories.store', request()->route('category_type'))">
                @include('admin.categories.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Create') }} {{ __('Category') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.categories.index', request()->route('category_type'))">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

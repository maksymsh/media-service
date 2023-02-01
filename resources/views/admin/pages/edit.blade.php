@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Page') }} #{{ $page->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.pages.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$page" method="PUT" :action="route('admin.pages.update', $page)">
                @include('admin.pages.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Page') }} #{{ $page->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.pages.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

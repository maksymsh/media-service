@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Create') }}{{ __('News') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.News.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$news" method="POST" :action="route('admin.News.store')">
                @include('admin.News.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Create') }} {{ __('News') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.News.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

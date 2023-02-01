@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('News') }} #{{ $news->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.news.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$news" method="PUT" :action="route('admin.news.update', $news)">
                @include('admin.news.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('News') }} #{{ $news->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.news.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

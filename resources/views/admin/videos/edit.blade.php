@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Videos'), 'url' => route('admin.videos.index')],
        ['title' => '#' . $video->id, 'url' => route('admin.videos.edit', $video)],
    ]">

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Video') }} #{{ $video->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.videos.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$video" method="PUT" :action="route('admin.videos.update', $video)">
                @include('admin.videos.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Video') }} #{{ $video->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.videos.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

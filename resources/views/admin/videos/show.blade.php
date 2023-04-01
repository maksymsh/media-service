@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Videos'), 'url' => route('admin.videos.index')],
        ['title' => '#' . $video->id, 'url' => route('admin.videos.show', $video)],
    ]">

        <x-slot:header>
            <h1>{{ __('Video') }} #{{ $video->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.videos.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            {{ json_encode($video) }}
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

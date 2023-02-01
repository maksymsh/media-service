@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }}{{ __('Project') }} #{{ $project->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.projects.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$project" method="PUT" :action="route('admin.projects.update', $project)">
                @include('admin.projects.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Project') }} #{{ $project->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.projects.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

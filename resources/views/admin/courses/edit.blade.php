@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Courses'), 'url' => route('admin.courses.index')],
        ['title' => '#' . $course->id, 'url' => route('admin.courses.edit', $course)],
    ]">

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Course') }} #{{ $course->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.courses.index')">
                    <x-admin.icon name="arrow-left"/>
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$course->toArray()" method="PUT" :action="route('admin.courses.update', $course)">
                @include('admin.courses.includes.form')

                <x-splade-submit/>
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Course') }} #{{ $course->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.courses.index')">
                    <x-admin.icon name="arrow-left"/>
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

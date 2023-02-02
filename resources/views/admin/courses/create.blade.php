@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page :breadcrumbs="[
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
        ['title' => __('Courses'), 'url' => route('admin.courses.index')],
        ['title' => '#' . $course->id, 'url' => route('admin.courses.create', $course)],
    ]">

        <x-slot:header>
            <h1>{{ __('Create') }} {{ __('Course') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.courses.index')">
                    <x-admin.icon name="arrow-left"/>
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$course" method="POST" :action="route('admin.courses.store')">
                @include('admin.courses.includes.form')

                <x-splade-submit/>
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Create') }} {{ __('Course') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.courses.index')">
                    <x-admin.icon name="arrow-left"/>
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }}{{ __('Vacancy') }} #{{ $vacancy->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.vacancies.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$vacancy" method="PUT" :action="route('admin.vacancies.update', $vacancy)">
                @include('admin.vacancies.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Vacancy') }} #{{ $vacancy->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.vacancies.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Study') }} #{{ $study->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.studies.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$study" method="PUT" :action="route('admin.studies.update', $study)">
                @include('admin.studies.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Study') }} #{{ $study->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.studies.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Service') }} #{{ $service->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.services.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$service->toArray()" method="PUT" :action="route('admin.services.update', $service)">
                @include('admin.services.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Service') }} #{{ $service->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.services.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

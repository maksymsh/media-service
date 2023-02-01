@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Product') }} #{{ $product->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.products.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$product" method="PUT" :action="route('admin.products.update', $product)">
                @include('admin.products.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Product') }} #{{ $product->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.products.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

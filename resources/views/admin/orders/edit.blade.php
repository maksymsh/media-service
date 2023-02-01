@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Edit') }} {{ __('Order') }} #{{ $order->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.orders.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <div>
            <x-splade-form :default="$order" method="PUT" :action="route('admin.orders.update', $order)">
                @include('admin.orders.includes.form')

                <x-splade-submit />
            </x-splade-form>
        </div>

        <x-slot:footer>
            <h1>{{ __('Order') }} #{{ $order->id }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.orders.index')">
                    <x-admin.icon name="arrow-left" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection

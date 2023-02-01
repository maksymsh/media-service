@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1>{{ __('Pages') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.pages.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:header>

        <x-splade-table :for="$pages">
            <x-splade-cell published>
                <x-splade-form :default="['model' => 'App\\Models\\Page', 'id' => $item->id, 'published' => $item->published]" :action="route('admin.publishing.update')">
                    <x-splade-checkbox name="published" switch @change="form.submit()" />
                </x-splade-form>
            </x-splade-cell>
        </x-splade-table>

        <x-slot:footer>
            <h1>{{ __('Pages') }}</h1>

            <div>
                <x-admin.link class="btn btn-primary" :href="route('admin.pages.create')">
                    <x-admin.icon name="plus" />
                </x-admin.link>
            </div>
        </x-slot:footer>

    </x-admin.layout.page>
@endsection
@props([
    'key' => null,
    'item' => null,
    'sort' => false,
    'show' => true,
    'edit' => true,
    'delete' => true,
])

@php
    $key = $key ?: $item->getTable();
@endphp

<div class="row-actions">
    @if($sort)
        <a href="#" class="handle" @click.prevent>
            <x-admin.icon name="move"/>
        </a>
    @endif

    @if($show)
        <x-admin.link class="btn btn-sm" href="{{ route('admin.'.$key.'.show', $item) }}">
            <x-admin.icon name="eye"/>
        </x-admin.link>
    @endif

    @if($edit)
        <x-admin.link class="btn btn-sm" href="{{ route('admin.'.$key.'.edit', $item) }}">
            <x-admin.icon name="edit"/>
        </x-admin.link>
    @endif

    @if($delete)
        <x-admin.link method="delete" class="btn btn-sm" href="{{ route('admin.'.$key.'.destroy', $item) }}" confirm>
            <x-admin.icon name="delete"/>
        </x-admin.link>
    @endif
</div>

@props([
    'key' => null,
    'item' => null,
    'show' => true,
    'edit' => true,
    'delete' => true,
])

<div class="row-actions">
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

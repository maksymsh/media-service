@props([
    'type' => request()->route('category_type'),
    'item' => null,
    'sort' => false,
    'show' => true,
    'edit' => true,
    'delete' => true,
])

<div class="row-actions">
    @if($sort)
        <a href="#" class="handle" @click.prevent>
            <x-admin.icon name="move" />
        </a>
    @endif

    @if($show)
        <x-admin.link class="btn btn-sm" href="{{ route('admin.categories.show', [$type, $item]) }}">
            <x-admin.icon name="eye"/>
        </x-admin.link>
    @endif

    @if($edit)
        <x-admin.link class="btn btn-sm" href="{{ route('admin.categories.edit', [$type, $item]) }}">
            <x-admin.icon name="edit"/>
        </x-admin.link>
    @endif

    @if($delete)
        <x-admin.link method="delete" class="btn btn-sm" href="{{ route('admin.categories.destroy', [$type, $item]) }}" confirm>
            <x-admin.icon name="delete"/>
        </x-admin.link>
    @endif
</div>

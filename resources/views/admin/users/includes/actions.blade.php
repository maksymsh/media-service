<x-admin.link class="btn btn-sm" :href="route('admin.users.show', $item)">
    <x-admin.icon name="eye" />
</x-admin.link>

<x-admin.link class="btn btn-sm" :href="route('admin.users.edit', $item)">
    <x-admin.icon name="edit" />
</x-admin.link>

<x-admin.link class="btn btn-sm" confirm :href="route('admin.users.destroy', $item)">
    <x-admin.icon name="delete" />
</x-admin.link>

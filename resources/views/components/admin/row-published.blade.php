@props([
    'key' => null,
    'item' => null,
])

<x-splade-form :default="['model' => get_class($item), 'id' => $item->id, 'published' => $item->published]"
               :action="route('admin.publishing.update')">
    <x-splade-checkbox name="published" switch @change="form.submit()"/>
</x-splade-form>

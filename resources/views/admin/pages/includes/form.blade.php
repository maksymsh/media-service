<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-input name="name" :label="__('Name')" />

<x-splade-file name="image" :label="__('Image')" filepond preview server />

<x-splade-file name="images" :label="__('Images')" filepond multiple preview server />

@if(!$page->exists)

@endif

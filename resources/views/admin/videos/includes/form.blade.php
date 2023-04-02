<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-input name="name" :label="__('Name')" />

<x-splade-textarea name="description" :label="__('Description')" wysiwyg />

<x-splade-textarea name="short_description" :label="__('Short Description')" />

<x-splade-textarea name="content" :label="__('Content')" wysiwyg/>

<div>
    <h2>Media</h2>

    <x-splade-file name="image" :label="__('Image')" filepond preview server />

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server />
</div>

@if(!$video->exists)

@endif

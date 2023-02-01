<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-input name="code" :label="__('Code')" />

<x-splade-input name="title" :label="__('Title')" />

<x-splade-input name="slug" :label="__('Slug')" />

<x-splade-textarea name="text" :label="__('Text')" wysiwyg />

<div>
    <h2>Seo</h2>
    <x-splade-input name="seo_h1" :label="__('H1')" />
    <x-splade-input name="seo_title" :label="__('Title')" />
    <x-splade-input name="seo_description" :label="__('Description')" />
    <x-splade-input name="seo_keywords" :label="__('Keywords')" />
</div>

<div>
    <h2>Media</h2>

    <x-splade-file name="image" :label="__('Image')" filepond preview server />

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server />
</div>

@if(!$page->exists)

@endif

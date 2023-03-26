<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-input name="name" :label="__('Name')" />

<x-splade-input name="slug" :label="__('Slug')" />

<x-splade-input name="price" :label="__('Price')" />

<x-splade-select name="categories[]" :options="$categories" :label="__('Categories')" multiple choices relation />

<x-splade-textarea name="description" :label="__('Description')" wysiwyg />

<x-splade-textarea name="short_description" :label="__('Short Description')" />

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

    <x-splade-file name="background" :label="__('Background')" filepond preview server />

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server />
</div>

@if(!$service->exists)

@endif

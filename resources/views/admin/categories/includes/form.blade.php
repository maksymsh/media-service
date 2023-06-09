<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-group inline :label="__('Display Top')">
    <x-splade-checkbox name="top" switch />
</x-splade-group>

<x-splade-group inline :label="__('Display Home')">
    <x-splade-checkbox name="home" switch />
</x-splade-group>

<x-splade-group inline :label="__('Display Bottom')">
    <x-splade-checkbox name="bottom" switch />
</x-splade-group>

<x-splade-select name="parent_id" :options="$categories" :label="__('Parent Category')" :placeholder="__('Parent Category')" />

<x-splade-input name="name" :label="__('Name')" />

<x-splade-input name="slug" :label="__('Slug')" />

<x-splade-textarea name="description" :label="__('Description')" wysiwyg />

<x-splade-textarea name="description_short" :label="__('Short Description')" wysiwyg />

<x-splade-textarea name="content" :label="__('Content')" />

<x-admin.form.seo />

<div>
    <h2>Media</h2>

    <x-splade-file name="image" :label="__('Image')" filepond preview server />

    <x-splade-file name="background" :label="__('Background')" filepond preview server />

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server />
</div>

@if(!$category->exists)

@endif

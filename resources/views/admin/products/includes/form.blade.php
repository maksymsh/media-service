<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-group inline :label="__('Display Top')">
    <x-splade-checkbox name="top" switch />
</x-splade-group>

<x-splade-group inline :label="__('Display Bottom')">
    <x-splade-checkbox name="bottom" switch />
</x-splade-group>

<x-splade-input name="options" type="hidden"/>

<x-splade-input name="name" :label="__('Name')" />

<x-splade-input name="slug" :label="__('Slug')" />

<x-splade-input name="price" :label="__('Price')" />

<x-splade-select name="categories[]" :options="$categories" :label="__('Categories')" multiple choices relation />

<x-splade-textarea name="description" :label="__('Description')" wysiwyg />

<x-splade-textarea name="description_short" :label="__('Short Description')" wysiwyg />

<x-admin.form.seo />

<div>
    <h2>Media</h2>

    <x-splade-textarea name="icon" :label="__('Icon')"/>

    <x-splade-file name="image" :label="__('Image')" filepond preview server />

    <x-splade-file name="background" :label="__('Background')" filepond preview server />

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server />
</div>

@include('admin.products.includes.usage')

@include('admin.products.includes.options')

@if($product->exists)

@endif

<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-input name="attributes" type="hidden"/>

<x-splade-input name="name" :label="__('Name')" />

<x-splade-input name="slug" :label="__('Slug')" />

<x-splade-input name="price" :label="__('Price')" />

<x-splade-select name="categories[]" :options="$categories" :label="__('Categories')" multiple choices relation />

<x-splade-textarea name="description" :label="__('Description')" wysiwyg />

<x-splade-textarea name="description_short" :label="__('Short Description')" wysiwyg />

<x-splade-textarea name="content" :label="__('Content')" wysiwyg/>


<x-admin.form.seo />

<div>
    <h2>Documents</h2>

    <x-splade-file name="documents" :label="__('Documents')" filepond multiple />
</div>

<div>
    <h2>Media</h2>

    <x-splade-input name="video" :label="__('Video')" />

    <x-splade-file name="image" :label="__('Image')" filepond preview server />

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server />
</div>

@include('admin.goods.includes.attributes')

@if($good->exists)

@endif

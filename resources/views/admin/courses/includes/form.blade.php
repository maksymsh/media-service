<x-splade-input name="id" :label="__('Id')" disabled/>

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch/>
</x-splade-group>

<x-splade-group inline :label="__('Display Top')">
    <x-splade-checkbox name="top" switch />
</x-splade-group>

<x-splade-group inline :label="__('Display Bottom')">
    <x-splade-checkbox name="bottom" switch />
</x-splade-group>

<x-splade-input name="name" :label="__('Name')"/>

<x-splade-textarea name="description" :label="__('Description')" wysiwyg/>

<x-splade-textarea name="description_short" :label="__('Short Description')" wysiwyg />

<x-splade-textarea name="detail" :label="__('Details')" wysiwyg/>

<x-splade-textarea name="certificate_text" :label="__('Certificate')" wysiwyg/>

<x-splade-textarea name="content" :label="__('Content')" wysiwyg/>

<div>
    <h2>Media</h2>

    <x-splade-file name="image" :label="__('Image')" filepond preview server/>

    <x-splade-file name="certificate" :label="__('Certificate')" filepond preview server/>

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server/>
</div>

@include('admin.courses.includes.program')

@if(!$course->exists)

@endif

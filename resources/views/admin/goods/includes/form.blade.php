<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-input name="name" :label="__('Name')" />

<x-splade-input name="slug" :label="__('Slug')" />

<x-splade-input name="price" :label="__('Price')" />

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

    <x-splade-file name="images" :label="__('Images')" filepond multiple preview server />
</div>

<div>
    <h2>Attributes</h2>

    <div>
        <x-splade-data :default="['attributes' => $attributes]">
            <div v-for="(attribute, i) in form.attributes">
                <div class="row">
                    <div class="col-5">
                        <select class="form-control" :name="'attributes['+i+'][attribute_id]'" v-model="form.attributes[i].attribute_id">
                            <option v-for="(name, id) in data.attributes" :value="id">@{{ name }}</option>
                        </select>
                    </div>
                    <div class="col-5">
                        <input class="form-control" type="text" :name="'attributes['+i+'][attribute_id]'" v-model="form.attributes[i].value">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-danger" @click.prevent="form.attributes.splice(i)">Remove</button>

                    </div>

                </div>
            </div>
        </x-splade-data>


        <button class="btn btn-primary" @click.prevent="form.attributes.push({attribute_id: 0, value: ''})">Add</button>
    </div>
</div>

@if($good->exists)

@endif

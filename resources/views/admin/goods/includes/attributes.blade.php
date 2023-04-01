<div>
    <h2>Attributes</h2>

    <div class="mb-3">
        <x-splade-data :default="['attributes' => $attributes]">
            <div v-for="(attribute, i) in form.attributes">
                <div class="row mb-1">
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

<div>
    <h2>Options</h2>

    <div class="mb-3">
        <div v-for="(option, i) in form.options">
            <div class="row mb-1">
                <div class="col-5">
                    <label>Назва</label>
                    <input class="form-control" type="text" :name="'options['+i+'][name]'" v-model="form.options[i].name">
                </div>
                <div class="col-5">
                    <label>Ціна</label>
                    <input class="form-control" type="text" :name="'options['+i+'][price]'" v-model="form.options[i].price">
                </div>
                <div class="col-2">
                    <button class="btn btn-danger" @click.prevent="form.options.splice(i)">Remove</button>

                </div>

            </div>
        </div>

        <button class="btn btn-primary" @click.prevent="form.options.push({name: '', price: ''})">Add</button>
    </div>
</div>

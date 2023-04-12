<div>
    <h2>{{ __('Usage types') }}</h2>
    <input class="form-control" type="hidden" name="usage" v-model="form.usage">

    <div class="mb-3">
        <div v-for="(p, i) in form.usage">
            <div class="row mb-1">
                <div class="col-5">
                    <input class="form-control" type="text" :name="'usage['+i+'][title]'" v-model="form.usage[i].title">
                </div>
                <div class="col-5">
                    <input class="form-control" type="text" :name="'usage['+i+'][text]'" v-model="form.usage[i].text">
                </div>
                <div class="col-2">
                    <button class="btn btn-danger" @click.prevent="form.usage.splice(i)">Remove</button>
                </div>

            </div>
        </div>

        <button class="btn btn-primary" @click.prevent="form.usage = form.usage || [];form.usage.push({title: '', text: ''})">Add</button>
    </div>
</div>

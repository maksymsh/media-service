<div>
    <h2>Stages</h2>
    <input class="form-control" type="hidden" name="stages" v-model="form.stages">

    <div class="mb-3">
        <div v-for="(stage, i) in form.stages">
            <div class="row mb-1">
                <div class="col-5">
                    <input class="form-control" type="text" :name="'stages['+i+'][title]'" v-model="form.stages[i].title">
                </div>
                <div class="col-5">
                    <textarea class="form-control" :name="'stages['+i+'][text]'" v-model="form.stages[i].text" />
                </div>
                <div class="col-2">
                    <button class="btn btn-danger" @click.prevent="form.stages.splice(i, 1)">Remove</button>
                </div>

            </div>
        </div>

        <button class="btn btn-primary" @click.prevent="form.stages = form.stages || [];form.stages.push({title: '', text: ''})">Add</button>
    </div>
</div>

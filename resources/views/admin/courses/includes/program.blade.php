<div>
    <h2>Program</h2>
    <input class="form-control" type="hidden" name="program" v-model="form.program">

    <x-splade-file name="program_file" :label="__('Program')" filepond />

    <div class="mb-3">
        <div v-for="(p, i) in form.program">
            <div class="row mb-1">
                <div class="col-10">
                    <input class="form-control" type="text" :name="'program['+i+'][title]'" v-model="form.program[i].title">
                </div>
                <div class="col-2">
                    <button class="btn btn-danger" @click.prevent="form.program.splice(i, 1)">Remove</button>
                </div>

            </div>
        </div>

        <button class="btn btn-primary" @click.prevent="form.program = form.program || [];form.program.push({title: ''})">Add</button>
    </div>
</div>

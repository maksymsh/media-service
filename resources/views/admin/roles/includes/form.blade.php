<x-splade-input name="id" :label="__('Id')" disabled/>

<x-splade-input name="name" :label="__('Name')"/>

<x-splade-group inline :label="__('Permissions')">
    <div class="row">
        <div class="col-12 mb-3">
            <label for="permissions">
                <input type="checkbox" id="permissions"
                       {{ $role->name === 'superadmin' ? 'disabled' : '' }}
                       :checked="Object.keys(form.$all.permissions).every(resource => Object.keys(form.$all.permissions[resource]).every(key => form.$all.permissions[resource][key] === true))"
                       @change.prevent="Object.keys(form.$all.permissions).forEach(resource => Object.keys(form.$all.permissions[resource]).forEach(key => form.$all.permissions[resource][key] = $event.target.checked))"/>
                <span>
                    {{ __('Select All') }}
                </span>
            </label>
        </div>
        @foreach($permissions as $resource => $actions)
            <div class="col-4">

                <div class="card">

                    <div class="card-header">
                        <h4>
                            <label for="permissions.{{ $resource }}">
                                <input type="checkbox" id="permissions.{{ $resource }}"
                                       {{ $role->name === 'superadmin' ? 'disabled' : '' }}
                                       :checked="Object.keys(form.$all.permissions.{{ $resource }}).every(key => form.$all.permissions.{{ $resource }}[key] === true)"
                                       @change.prevent="Object.keys(form.$all.permissions.{{ $resource }}).forEach(key => form.$all.permissions.{{ $resource }}[key] = $event.target.checked)"/>
                                <span>
                                    {{ $resource }}
                                </span>
                            </label>
                        </h4>
                    </div>

                    <div class="card-body">
                        @foreach($actions as $action => $key)
                            <x-splade-checkbox name="permissions.{{ $resource }}.{{ $action }}"
                                               label="{{ $resource }}.{{ $action }}"
                                               :disabled="$role->name === 'superadmin'"
                            />
                        @endforeach
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</x-splade-group>

@if(!$role->exists)

@endif

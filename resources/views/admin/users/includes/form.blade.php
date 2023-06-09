<x-splade-input name="id" :label="__('Id')" disabled />

<x-splade-group inline :label="__('Published')">
    <x-splade-checkbox name="published" switch />
</x-splade-group>

<x-splade-input name="firstname" :label="__('Firstname')" />

<x-splade-input name="lastname" :label="__('Lastname')" />

<x-splade-input name="username" :label="__('Username')" />

<x-splade-input name="email" :label="__('Email')" />

<x-splade-select name="roles[]" :options="$roles" :label="__('Roles')" multiple choices relation />

<x-splade-file name="avatar" :label="__('Avatar')" filepond preview server />

<x-splade-file name="images" :label="__('Images')" filepond multiple preview server />

@if(!$user->exists)
    <x-splade-input name="password" type="password" :label="__('Password')" />
@endif

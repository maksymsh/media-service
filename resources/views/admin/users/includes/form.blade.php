<x-splade-input name="firstname" :label="__('Firstname')" />

<x-splade-input name="lastname" :label="__('Lastname')" />

<x-splade-input name="username" :label="__('Username')" />

<x-splade-input name="email" :label="__('Email')" />

<x-splade-select name="roles[]" :options="$roles" :label="__('Roles')" multiple choices relation />

<x-splade-file name="avatar" :label="__('Avatar')" filepond preview />

@if(!$user->exists)
    <x-splade-input name="password" type="password" :label="__('Password')" />
@endif

<x-splade-input name="firstname" :label="__('Firstname')" />

<x-splade-input name="lastname" :label="__('Lastname')" />

<x-splade-input name="examplename" :label="__('Examplename')" />

<x-splade-input name="email" :label="__('Email')" />

<x-splade-select name="roles[]" :options="$roles" :label="__('Roles')" multiple choices relation />

<x-splade-file name="avatar" :label="__('Avatar')" filepond preview server />

<x-splade-file name="images" :label="__('Images')" filepond multiple preview server />

@if(!$example->exists)
    <x-splade-input name="password" type="password" :label="__('Password')" />
@endif

<x-admin.layout.auth>
    <x-slot name="header">
        {{ __('Login') }}
    </x-slot>

    <x-splade-form>
        <x-splade-input name="email" label="{{ __('Email') }}" />

        <x-splade-input name="password" type="password" label="{{ __('Password') }}"/>

        <x-splade-checkbox name="remember" label="{{ __('Remember me') }}" />

        <x-splade-submit label="{{ __('Log in') }}"/>

    </x-splade-form>
</x-admin.layout.auth>


@extends('admin.layout.app')

@section('content')
    <x-admin.layout.page>

        <x-slot:header>
            <h1 class="h3 mb-3">
                <strong>{{ __('Settings') }}</strong> general
            </h1>
        </x-slot:header>

        <x-splade-form :default="$settings">

            <h2 class="mb-3">App</h2>

            <x-splade-input name="app_name" :label="__('App name')" />
            <x-splade-input name="app_description" :label="__('App description')" />

            <x-splade-group class="mb-3" inline :label="__('App active')">
                <x-splade-checkbox name="app_active" switch />
            </x-splade-group>

            <h2 class="mb-3">Contacts</h2>

            <x-splade-input name="info_email" :label="__('Info email')" />
            <x-splade-input name="sales_phone" :label="__('Sales phone')" />
            <x-splade-input name="sales_email" :label="__('Sales email')" />
            <x-splade-input name="accounting_phone" :label="__('Accounting phone')" />
            <x-splade-input name="support_email" :label="__('Support email')" />
            <x-splade-input name="support_phone" :label="__('Support phone')" />
            <x-splade-input name="support_phone2" :label="__('Support phone2')" />
            <x-splade-input name="support_phone3" :label="__('Support phone3')" />
            <x-splade-input name="support_phone4" :label="__('Support phone4')" />
            <x-splade-input name="web_email" :label="__('Web email')" />
            <x-splade-input name="partners_email" :label="__('Partners email')" />
            <x-splade-input name="hr_email" :label="__('Hr email')" />
            <x-splade-input name="hotline_email" :label="__('Hotline email')" />
            <x-splade-input name="cso_email" :label="__('Cso email')" />
            <x-splade-input name="address" :label="__('Address')" />
            <x-splade-input name="schedule" :label="__('Schedule')" />

            <h2 class="mb-3">Social</h2>

            <x-splade-input name="telegram" :label="__('telegram')" />
            <x-splade-input name="viber" :label="__('viber')" />
            <x-splade-input name="facebook" :label="__('facebook')" />
            <x-splade-input name="instagram" :label="__('instagram')" />
            <x-splade-input name="youtube" :label="__('youtube')" />
            <x-splade-input name="linkedin" :label="__('linkedin')" />

            <x-splade-submit />

        </x-splade-form>

    </x-admin.layout.page>
@endsection

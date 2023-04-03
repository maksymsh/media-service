<div class="wrapper">
    <x-splade-state>
        <x-app.header />

        <div class="content">
            @yield('content')
        </div>

        <x-app.footer />

        @include('app.layout.modals')
    </x-splade-state>
</div>

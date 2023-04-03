<div class="wrapper">
    <x-splade-state>
        @include('app.layout.header')

        <div class="content">
            @yield('content')
        </div>

        @include('app.layout.footer')

        @include('app.layout.modals')
    </x-splade-state>
</div>

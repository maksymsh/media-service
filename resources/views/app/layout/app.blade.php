<div class="wrapper">

    <x-splade-data :default="['feedback' => ['type' => '', 'id' => '']]">
        @include('app.layout.header')

        <div class="content">
            @yield('content')
        </div>

        @include('app.layout.footer')

        @include('app.layout.modals')
    </x-splade-data>

</div>

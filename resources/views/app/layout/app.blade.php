<div class="wrapper">

    @include('app.layout.header')

    <div class="content">
        @yield('content')
    </div>

    @include('app.layout.footer')

</div>

@include('app.layout.modals')

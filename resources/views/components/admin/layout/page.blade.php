@props([
    'breadcrumbs' => [
        ['title' => __('Dashboard'), 'url' => route('admin.dashboard.index')],
    ],
])

<div class="container-fluid p-0">

    <x-admin.layout.breadcrumbs :items="$breadcrumbs"/>

    <div>
        <div class="d-flex justify-content-between">
            {!! $header ?? '' !!}
        </div>

        <div class="card">
            <div class="card-body">
                {!! $slot !!}
            </div>
        </div>

        <div class="d-flex justify-content-between">
            {!! $footer ?? '' !!}
        </div>

    </div>
</div>

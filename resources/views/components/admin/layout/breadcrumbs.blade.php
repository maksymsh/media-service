@props([
    'items' => [],
])

<ol class="breadcrumb">
    @foreach($items as $item)
        <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
            <x-admin.link :href="$item['url']">
                <span>{{ $item['title'] }}</span>
            </x-admin.link>
        </li>
    @endforeach
</ol>

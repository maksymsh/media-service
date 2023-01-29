@props([
    'id' => Str::random(10),
    'route' => null,
    'title' => null,
    'icon' => null,
    'url' => null,
    'children' => [],
])

@php
    $active = routeActive($route);
@endphp

<li {{ $attributes->class([
    'sidebar-item' => true,
    'active' => $active,
]) }}>

    @if($slot != '' || $children)
        <a class="sidebar-link {{ $active ? '' : 'collapsed' }}"
           href="#"
           data-bs-target="#{{ $id }}"
           data-bs-toggle="collapse"
        >
            @if($icon)
                <i class="align-middle" data-feather="{{ $icon }}"></i>
            @endif
            <span class="align-middle">{{ $title }}</span>
        </a>
    @else
        <x-splade-link class="sidebar-link {{ $active ? '' : 'collapsed' }}"
                       :href="$url"
                       :data-bs-target="$slot != '' ? '#'.$id : null"
                       :data-bs-toggle="$slot != '' ? 'collapse' : null"
        >
            @if($icon)
                <i class="align-middle" data-feather="{{ $icon }}"></i>
            @endif
            <span class="align-middle">{{ $title }}</span>
        </x-splade-link>
    @endif

    @if($slot != '' || $children)
        <ul id="{{ $id }}" class="sidebar-dropdown list-unstyled collapse {{ $active ? 'show' : '' }} "
            data-bs-parent="#sidebar">
            @if($slot != '')
                {!! $slot !!}
            @else
                @foreach($children as $item)
                    <x-admin.layout.sidebar-item :title="$item['title']"
                                                 :icon="$item['icon']"
                                                 :url="$item['url']"
                                                 :route="$item['route']"
                                                 :children="$item['children']"
                    />
                @endforeach
            @endif
        </ul>
    @endif
</li>

@props([
    'as' => 'button'
])

<x-splade-component is="dropdown" :as="$as" {{ $attributes->class('btn') }}>
    <x-slot:trigger>
        {{ $button }}
    </x-slot:trigger>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-start py-0 show">
        {{ $slot }}
    </div>
</x-splade-component>

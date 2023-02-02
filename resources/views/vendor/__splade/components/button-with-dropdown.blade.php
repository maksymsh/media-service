@props([
    'as' => 'button'
])

<x-splade-component is="dropdown" :as="$as" {{ $attributes->class('') }}>
    <x-slot:trigger>
        {{ $button }}
    </x-slot:trigger>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0 show">
        {{ $slot }}
    </div>
</x-splade-component>

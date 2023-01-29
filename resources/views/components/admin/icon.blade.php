@props([
    'name' => ''
])

@if($name)
    <i {{ $attributes->class(['icon']) }} data-feather="{{ $name }}" />
@endif

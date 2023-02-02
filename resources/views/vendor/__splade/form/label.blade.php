@props([
    'inline' => true,
])

<label {{ $attributes->except(['v-if', 'v-show', 'class'])->class([
    'form-label' => true,
    $inline ? 'col-sm-2' : 'col-sm-12' => true,
]) }}>{{ $label }}</label>

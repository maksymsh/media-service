@props([
    'image' => null,
    'alt' => null,
    'width' => 100,
    'height' => 100,
])
@if($image)
    <img width="{{ $width }}" height="{{ $height }}" src="{{ $image }}" alt="">
@endif

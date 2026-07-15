@props([
    'variant' => 'primary',
    'type' => 'button'
])

@php

$classes = [

'primary' => 'vf-btn vf-btn-primary',

'secondary' => 'vf-btn vf-btn-secondary',

'outline' => 'vf-btn vf-btn-outline',

];

@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class'=>$classes[$variant]]) }}
>

    {{ $slot }}

</button>
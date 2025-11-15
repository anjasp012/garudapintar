@props([
    'as' => 'div',
])


@php
    $class=" relative overflow-hidden bg-white shadow-xs rounded-2xl"
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</{{ $as }}>

@php
    $classes = 'text-gray-700 hover:text-blue-600 transition-colors pb-1';
@endphp

<li>
    <a wire:navigate wire:current="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>

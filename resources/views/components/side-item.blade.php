@props([
    'as' => 'a',
    'active' => false,
    'wireNavigate' => true,
])

@php
    $baseClasses = 'cursor-pointer group w-full inline-flex items-center gap-2 sm:gap-3 sm:gap-4 transition-all duration-300 ease rounded-lg sm:rounded-xl text-gray-100';
    $activeClasses = 'relative bg-white/10 border border-white/15 shadow-xs before:absolute before:start-0 before:top-1/2 before:-translate-y-1/2 before:rounded-r';
    $inactiveClasses = 'hover:bg-white/5';

    // Padding & icon size responsive
    $responsivePadding = 'py-2.5 px-3 sm:py-3.5 sm:px-4';
    $responsiveIcon = '[&>svg]:size-4.5 sm:[&>svg]:size-5.5';

    // before size responsive
    $responsiveBefore = 'before:bg-white before:w-1 before:h-4.5 sm:before:w-1 sm:before:h-6';

    $classes = "$baseClasses $inactiveClasses $responsivePadding $responsiveIcon hover:translate-x-1";
@endphp

<{{ $as }} @if ($wireNavigate) wire:navigate.hover wire:current="{{ $activeClasses }}" @endif {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>

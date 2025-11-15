{{-- @php
    $btnClass =
        'aspect-ratio-1 w-full font-semibold flex items-center text-center justify-center rounded-xl';

    if ($active) {
        $btnClass .= ' bg-gradient-to-br from-indigo-500 to-indigo-400 border-2 border-indigo-500 text-white';
    } elseif ($doubt ?? false) {
    $btnClass .= ' bg-gradient-to-b from-yellow-300 via-yellow-400 to-yellow-500 border-2 border-yellow-300 text-white';
    } elseif ($answered ?? false) {
        $btnClass .= ' bg-gradient-to-br from-green-500 via-green-600 to-green-600 border-2 border-green-600 text-white';
    } else {
        $btnClass .= ' bg-white border-2 border-slate-300 hover:text-indigo-500 hover:border-indigo-500 text-slate-500';
    }
@endphp --}}

<div x-data="{ number: null }" x-init="number = $el.getAttribute('x-bind:number')">
    <button style="aspect-ratio: 1;" type="button">
        <span x-text='number'></span>
    </button>
</div>

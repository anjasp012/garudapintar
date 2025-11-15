@php
    $field = $attributes->get('wire:model') ?? $attributes->get('name');
@endphp


<textarea
    {{ $attributes->merge([
        'class' =>
            'w-full py-3 px-4 text-sm border rounded-lg bg-white
                            hover:border-indigo-200 focus:border-indigo-200 focus:outline-none
                            focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500
                            transition-all duration-300 ease placeholder:text-zinc-500' .
            ($errors->has($field) ? ' border-red-500' : ' border-slate-200'),
    ]) }}></textarea>

@if ($field)
    @error($field)
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
@endif

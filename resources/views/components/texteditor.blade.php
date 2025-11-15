@php
    $field = $attributes->get('wire:model') ?? $attributes->get('name');
    $errorClass = $field && $errors->has($field) ? '!border !border-red-500 rounded-lg overflow-hidden' : '';
@endphp

<div class="{{ $errorClass }}">
    <livewire:jodit-text-editor
        identifier="{{ $field }}"
        wire:model="{{ $field }}"
        wire:key="{{ $field }}"
    />
</div>

@if ($field)
    @error($field)
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
@endif

<div class="flex flex-col items-center gap-3" wire:loading.attr="disabled">
    <h1 class="text-4xl font-bold mb-3">{{ $count }}</h1>

    <div class="d-flex gap-2">
        {{-- Tombol Increment --}}
        <button class="btn btn-primary" wire:click="increment" wire:loading.attr="disabled" wire:target="increment">
            <span wire:loading wire:target="increment" class="spinner-border spinner-border-sm"></span>
            <span wire:loading.remove wire:target="increment">
                <i class="bi bi-plus"></i>
            </span>
        </button>

        <button class="btn btn-danger" wire:click="decrement" wire:loading.attr="disabled" wire:target="decrement">
            <span wire:loading wire:target="decrement" class="spinner-border spinner-border-sm"></span>
            <span wire:loading.remove wire:target="decrement">
                <i class="bi bi-dash"></i>
            </span>
        </button>

    </div>

</div>

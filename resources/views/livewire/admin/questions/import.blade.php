<div x-data="{ importSoal: false }" x-on:importSucceeded.window="importSoal = false"  class="ms-auto">
    <button
        x-on:click="importSoal = true"
        class="me-2 py-4 px-8 border-2 border-slate-200 hover:border-indigo-500 text-indigo-500 font-bold rounded-xl text-sm transition-all duration-300 ease">
        Import Soal
    </button>

    {{-- Overlay --}}
    <div
        x-cloak
        x-show="importSoal"
        x-transition.opacity
        class="fixed inset-0 bg-black/40 z-40"
        x-on:click="importSoal = false">
    </div>

    {{-- Modal --}}
    <div
        x-cloak
        x-show="importSoal"
        x-transition
        class="fixed inset-0 flex items-center justify-center z-50">

        <div class="bg-white rounded-xl p-6 w-[90%] max-w-md shadow-xl">
            <h2 class="text-lg font-bold mb-4">Import Soal</h2>

            {{-- Form Livewire --}}
            <form wire:submit.prevent="save" enctype="multipart/form-data">
                <input type="file" wire:model="file" class="border w-full p-2 rounded-lg">

                <div class="flex justify-end mt-4 gap-2">
                    <button
                        type="button"
                        x-on:click="importSoal = false"
                        class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition">
                        Tutup
                    </button>
                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:target="save"
                        class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <span wire:loading.remove wire:target="save">Upload</span>
                        <span wire:loading wire:target="save">Mengupload...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div>
    <x-card>
        <x-card.body>
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Kelola Ujian Anda</h3>
                <div class="flex gap-3 items-center">
                    <x-input wire:model.live.debounce.150ms="search" />
                </div>
            </div>
        </x-card.body>
        <table class="min-w-full" wire:poll.15s>
            <tr class="border-b border-slate-50 text-left bg-slate-50">
                <th class="p-3 text-sm uppercase">Nama ujian</th>
                <th class="p-3 text-sm uppercase">tanggal mulai</th>
                <th class="p-3 text-sm uppercase">Progres</th>
                <th class="p-3 text-sm uppercase">sisa waktu</th>
                <th class="p-3 text-sm uppercase">Aksi</th>
            </tr>
            <tr class="border-b border-slate-50 text-left hover:bg-slate-50">
                <td class="px-3 py-6 text-sm">
                    Ujian B
                </td>
                <td class="px-3 py-6 text-sm">
                    9 November 2025
                </td>
                <td class="px-3 py-6 text-sm">
                    <div class="flex flex-col items-center">
                        <span class="font-medium text-center text-indigo-600 text-xs">80%</span>
                        <div class="relative w-full bg-indigo-100 rounded-full h-2 overflow-hidden">
                            <div class="presentase w-[80%] bg-indigo-600 h-2">
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-3 py-6 text-sm">
                    30 Menit
                </td>
                <td class="px-3 py-6 text-sm space-x-1 text-nowrap">
                    <div class="flex gap-1">
                        <a href="" wire:navigate
                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-green-400 bg-green-100 rounded-lg hover:bg-green-400 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </a>
                        <a href="" wire:navigate
                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-sky-300 bg-sky-100 rounded-lg hover:bg-sky-400 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
        <x-card.body>
            {{ $exams->links('livewire::tailwind') }}
        </x-card.body>
    </x-card>
</div>

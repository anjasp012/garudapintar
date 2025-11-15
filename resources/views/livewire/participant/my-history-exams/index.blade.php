<div>
    <x-card>
        <x-card.body>
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Kelola Riwayat Ujian Anda</h3>
                <div class="flex gap-3 items-center">
                    <x-input wire:model.live.debounce.150ms="search" />
                </div>
            </div>
        </x-card.body>
        <table class="min-w-full" wire:poll.15s>
            <tr class="border-b border-slate-50 text-left bg-slate-50">
                <th class="p-3 text-sm uppercase">Nama ujian</th>
                <th class="p-3 text-sm uppercase">tanggal mulai</th>
                <th class="p-3 text-sm uppercase">Ranking</th>
                <th class="p-3 text-sm uppercase">Nilai</th>
                <th class="p-3 text-sm uppercase">Aksi</th>
            </tr>
            <tr class="border-b border-slate-50 text-left hover:bg-slate-50">
                <td class="px-3 py-6 text-sm">
                    Ujian A
                </td>
                <td class="px-3 py-6 text-sm">
                    8 November 2025
                </td>
                <td class="px-3 py-6 text-sm">

                    <span class="px-5 py-1.5 bg-slate-200 font-medium rounded">2</span>
                </td>
                <td class="px-3 py-6 text-sm">
                    80
                </td>
                <td class="px-3 py-6 text-sm space-x-1 text-nowrap">
                    <div class="flex gap-1">
                        <a href="" wire:navigate
                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-sky-300 bg-sky-100 rounded-lg hover:bg-sky-400 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('participant.my-history-exams.analysis', 1) }}" wire:navigate
                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-violet-500 bg-violet-200 rounded-lg hover:bg-violet-500 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M2.25 13.5a8.25 8.25 0 0 1 8.25-8.25.75.75 0 0 1 .75.75v6.75H18a.75.75 0 0 1 .75.75 8.25 8.25 0 0 1-16.5 0Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M12.75 3a.75.75 0 0 1 .75-.75 8.25 8.25 0 0 1 8.25 8.25.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75V3Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </a>
                        <a href="{{ route('participant.my-history-exams.ranking', 1) }}" wire:navigate
                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-amber-400 bg-amber-100 rounded-lg hover:bg-amber-400 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </a>
                        <a href="{{ route('participant.my-history-exams.certificate', 1) }}" wire:navigate
                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-teal-300 bg-teal-100 rounded-lg hover:bg-teal-400 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                <path
                                    d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
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

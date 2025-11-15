<div>
    <x-card>
        <x-card.body>
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Ranking Ujian A</h3>
                <a href="{{ route('participant.my-history-exams.index') }}" wire:navigate
                    class="text-nowrap py-3 px-4 bg-red-600 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-red-200 focus:border-red-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-red-500 transition-all duration-300 ease">Kembali</a>
            </div>
        </x-card.body>
        <table class="min-w-full" wire:poll.15s>
            <tr class="border-b border-slate-50 text-left bg-slate-50">
                <th class="p-3 text-sm text-center uppercase">No</th>
                <th class="p-3 text-sm uppercase">Nama peserta</th>
                <th class="p-3 text-sm uppercase">Nilai</th>
                <th class="p-3 text-sm uppercase">tanggal selesai</th>
                <th class="p-3 text-sm uppercase"></th>
            </tr>
            <tr class="border-b border-slate-50 text-left hover:bg-slate-50">
                <td class="px-3 py-6 text-sm text-center">
                    <span class="px-5 py-1.5 bg-amber-400 font-medium rounded">1</span>
                </td>
                <td class="px-3 py-6 text-sm">
                    Rohman
                </td>
                <td class="px-3 py-6 text-sm">
                    84
                </td>
                <td class="px-3 py-6 text-sm">
                    8 November 2025
                </td>
                <td class="px-3 py-6 text-sm">
                </td>
            </tr>
            <tr class="border-b border-slate-50 text-left hover:bg-slate-50">
                <td class="px-3 py-6 text-sm text-center">
                    <span class="px-5 py-1.5 bg-slate-200 font-medium rounded">2</span>
                </td>
                <td class="px-3 py-6 text-sm">
                    Anjas
                </td>
                <td class="px-3 py-6 text-sm">
                    80
                </td>
                <td class="px-3 py-6 text-sm">
                    9 November 2025
                </td>
                <td class="px-3 py-6 text-sm">
                    <span class="inline-block h-2 aspect-square rounded-full bg-green-400"></span>
                </td>
            </tr>
            <tr class="border-b border-slate-50 text-left hover:bg-slate-50">
                <td class="px-3 py-6 text-sm text-center">
                    <span class="px-5 py-1.5 bg-orange-400 rounded">3</span>
                </td>
                <td class="px-3 py-6 text-sm">
                    Cita
                </td>
                <td class="px-3 py-6 text-sm">
                    76
                </td>
                <td class="px-3 py-6 text-sm">
                    8 November 2025
                </td>
                <td class="px-3 py-6 text-sm">
                </td>
            </tr>
            <tr class="border-b border-slate-50 text-left hover:bg-slate-50">
                <td class="px-3 py-6 text-sm text-center">
                    <span class="px-5 py-1.5 font-medium rounded">4</span>
                </td>
                <td class="px-3 py-6 text-sm">
                    Intan
                </td>
                <td class="px-3 py-6 text-sm">
                    70
                </td>
                <td class="px-3 py-6 text-sm">
                    8 November 2025
                </td>
                <td class="px-3 py-6 text-sm">
                </td>
            </tr>
        </table>
        {{-- <x-card.body>
            {{ $exams->links('livewire::tailwind') }}
        </x-card.body> --}}
    </x-card>
</div>

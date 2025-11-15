<div class="space-y-4">
    <x-card>
        <x-card.body>
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Analisis Ujian A</h3>
                <a href="{{ route('participant.my-history-exams.index') }}" wire:navigate
                    class="text-nowrap py-3 px-4 bg-red-600 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-red-200 focus:border-red-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-red-500 transition-all duration-300 ease">Kembali</a>
            </div>
        </x-card.body>
    </x-card>
    <x-card>
        <x-card.body>
            <div class="flex items-center justify-between">
                <div>
                    <div class="text-slate-500 mb-1">Skor anda</div>
                    <h3 class="text-indigo-700 text-5xl font-bold mb-1">
                        80
                    </h3>
                    <div class="text-slate-500">80 benar • 20 Salah dari 100 soal</div>
                </div>
                <div>
                    <div class="text-end text-slate-500 mb-1">Ranking</div>
                    <h3 class="text-end text-indigo-700 text-2xl font-bold mb-1">
                        2
                    </h3>
                    <div class="text-end text-slate-500">anda ranking 2 dari 4 peserta</div>
                </div>
            </div>
        </x-card.body>
    </x-card>
    <x-card class="!bg-red-100">
        <x-card.body>
            <div class="flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-6 text-red-600">
                    <path fill-rule="evenodd"
                        d="M1.72 5.47a.75.75 0 0 1 1.06 0L9 11.69l3.756-3.756a.75.75 0 0 1 .985-.066 12.698 12.698 0 0 1 4.575 6.832l.308 1.149 2.277-3.943a.75.75 0 1 1 1.299.75l-3.182 5.51a.75.75 0 0 1-1.025.275l-5.511-3.181a.75.75 0 0 1 .75-1.3l3.943 2.277-.308-1.149a11.194 11.194 0 0 0-3.528-5.617l-3.809 3.81a.75.75 0 0 1-1.06 0L1.72 6.53a.75.75 0 0 1 0-1.061Z"
                        clip-rule="evenodd" />
                </svg>
                <div>
                    <h5 class="text-red-600 text-lg font-semibold mb-3">
                        Anda Lemah di Topik:
                    </h5>
                    <div class="space-y-1">
                    <div class="text-red-400"><span class="font-medium text-red-600">Aljabar</span> - 38% benar (3/8
                        soal)
                    </div>
                    </div>
                </div>
            </div>
        </x-card.body>
    </x-card>
    <x-card>
        <x-card.body>
            <h5 class="text-lg font-bold text-slate-800">Analisa Pertopik</h5>
            <ul class="mt-4 space-y-4">
                <li>
                    <div class="flex justify-bewteen gap-5 mb-1">
                        <div class="flex-1 text-slate-700 font-medium">Aljabar</div>
                        <div class="text-red-600">38%</div>
                    </div>
                    <div class="flex items-center gap-5">
                        <div class="relative flex-1 bg-red-100 rounded-full h-2.5 overflow-hidden">
                            <div class="presentase w-[38%] bg-red-600 h-2.5">
                            </div>
                        </div>
                        <div class="text-slate-500 text-sm text-end">7/20 soal</div>
                    </div>
                </li>
                <li>
                    <div class="flex justify-bewteen gap-5 mb-1">
                        <div class="flex-1 text-slate-700 font-medium">Geometri</div>
                        <div class="text-red-600">83%</div>
                    </div>
                    <div class="flex items-center gap-5">
                        <div class="relative flex-1 bg-green-100 rounded-full h-2.5 overflow-hidden">
                            <div class="presentase w-[83%] bg-green-600 h-2.5">
                            </div>
                        </div>
                        <div class="text-slate-500 text-sm text-end">32/40 soal</div>
                    </div>
                </li>
                <li>
                    <div class="flex justify-bewteen gap-5 mb-1">
                        <div class="flex-1 text-slate-700 font-medium">Tenses</div>
                        <div class="text-red-600">76%</div>
                    </div>
                    <div class="flex items-center gap-5">
                        <div class="relative flex-1 bg-yellow-100 rounded-full h-2.5 overflow-hidden">
                            <div class="presentase w-[75%] bg-yellow-600 h-2.5">
                            </div>
                        </div>
                        <div class="text-slate-500 text-sm text-end">30/40 soal</div>
                    </div>
                </li>
                <li>
                    <div class="flex justify-bewteen gap-5 mb-1">
                        <div class="flex-1 text-slate-700 font-medium">Antonim</div>
                        <div class="text-red-600">100%</div>
                    </div>
                    <div class="flex items-center gap-5">
                        <div class="relative flex-1 bg-green-100 rounded-full h-2.5 overflow-hidden">
                            <div class="presentase w-[100%] bg-green-600 h-2.5">
                            </div>
                        </div>
                        <div class="text-slate-500 text-sm text-end">20/20 soal</div>
                    </div>
                </li>
            </ul>
        </x-card.body>
    </x-card>
    <x-card class="!bg-green-100">
        <x-card.body>
            <div class="flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-6 text-green-700">
                    <path fill-rule="evenodd"
                        d="M15.22 6.268a.75.75 0 0 1 .968-.431l5.942 2.28a.75.75 0 0 1 .431.97l-2.28 5.94a.75.75 0 1 1-1.4-.537l1.63-4.251-1.086.484a11.2 11.2 0 0 0-5.45 5.173.75.75 0 0 1-1.199.19L9 12.312l-6.22 6.22a.75.75 0 0 1-1.06-1.061l6.75-6.75a.75.75 0 0 1 1.06 0l3.606 3.606a12.695 12.695 0 0 1 5.68-4.974l1.086-.483-4.251-1.632a.75.75 0 0 1-.432-.97Z"
                        clip-rule="evenodd" />
                </svg>

                <div>
                    <h5 class="text-green-800 text-lg font-semibold mb-3">
                        Topik yang anda kuasai:
                    </h5>
                    <div class="space-y-1">
                        <div class="text-green-500"><span class="font-medium text-green-700">Geometri</span> - 83% benar
                            (32/40
                            soal)</div>
                        <div class="text-green-500"><span class="font-medium text-green-700">Antonim</span> - 100% benar
                            (40/40
                            soal)</div>
                    </div>
                </div>
            </div>
        </x-card.body>
    </x-card>
</div>

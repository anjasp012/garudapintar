<div class="space-y-5">
    <x-card>
        <x-card.body>
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-3">
                <h3 class="text-2xl font-bold text-slate-800">Semua Ujian</h3>
                <div class="flex gap-3 items-center">
                    <x-input />
                     <a href="{{ route('admin.exams.create') }}" wire:navigate
                        class="text-nowrap py-3 px-4 bg-linear-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease">Tambah</a>
                </div>
            </div>
        </x-card.body>
    </x-card>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
        @foreach ($exams as $exam)
            <x-card class="border-2 border-transparent hover:border-indigo-500 transition-all duration-300 ease"
                wire:key="{{ $exam->id }}">
                <x-card.body>
                    <div class="flex items-center gap-1">
                        <strong class="text-lg block mb-1">{{ $exam->name }}</strong>
                        <a wire:navigate href="{{ route('admin.exams.edit', $exam) }}"
                            class="ms-auto p-2 [&>svg]:size-4 text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-700 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path
                                    d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                            </svg>

                        </a>
                        <button
                            class="cursor-pointer p-2 [&>svg]:size-4 text-red-700 bg-red-100 rounded-lg hover:bg-red-700 hover:text-white transition-all duration-300 ease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                    clip-rule="evenodd" />
                            </svg>


                        </button>
                    </div>

                    <div class="mt-5 text-[15px]">
                        {{ $exam->description }}
                    </div>

                    <div class="mt-5 grid grid-cols-2 gap-4">
                        <div class="px-px py-3 bg-slate-100 rounded-lg text-center">
                            <strong class="block mb-1">{{ $exam->examSettings->sum('question_count') }}</strong>
                            <div class="text-[10px] text-slate-500 font-medium">TOTAL SOAL</div>
                        </div>
                        <div class="px-px py-3 bg-slate-100 rounded-lg text-center">
                            <strong class="block mb-1">{{ $exam->duration }}</strong>
                            <div class="text-[10px] text-slate-500 font-medium">DURASI (MENIT)</div>
                        </div>
                        <div class="px-px py-3 bg-slate-100 rounded-lg text-center">
                            <strong class="block mb-1">
                                @if ($exam->type == 'paid')
                                    <span class="text-red-500">Rp {{ number_format($exam->price, 0, 0, '.') }}</span>
                                @else
                                    <span class="text-green-500">Gratis</span>
                                @endif
                            </strong>
                            <div class="text-[10px] text-slate-500 font-medium">JENIS UJIAN</div>
                        </div>
                        <div class="px-px py-3 bg-slate-100 rounded-lg text-center">
                            <strong class="block mb-1">{{ $exam->examSession->count() }}</strong>
                            <div class="text-[10px] text-slate-500 font-medium">PESERTA AKTIF</div>
                        </div>
                    </div>

                    <div class="flex items-center pt-4 mt-6 border-t-2 border-slate-100 mb-4">
                        <div class="text-slate-500 flex items-center text-sm gap-1 [&>svg]:size-4.5 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path
                                    d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                <path fill-rule="evenodd"
                                    d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Dibuat: {{ $exam->created_at }}</span>
                        </div>
                    </div>
                </x-card.body>
            </x-card>
        @endforeach
    </div>
    @if ($exams->hasPages())
        <x-card>
            <x-card.body>
                {{ $exams->links('livewire::tailwind') }}
            </x-card.body>
        </x-card>
    @endif

</div>

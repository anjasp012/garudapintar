<div>
    <x-card>
        <x-card.body class="!pb-2">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Tambah Soal</h3>
                <div class="flex gap-3 items-center">
                    <a href="{{ route('admin.questions.index') }}" wire:navigate
                        class="text-nowrap py-3 px-4 bg-red-600 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-red-200 focus:border-red-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-red-500 transition-all duration-300 ease">Kembali</a>
                </div>
            </div>
        </x-card.body>
        <x-card.body class="!pt-2">
            <form wire:submit="save">
                <div class="grid grid-cols-6 gap-4 mb-4">
                    <div class="col-span-2">
                        <x-label for="type" label="Tipe" />
                        <x-select id="type" wire:model.live="type">
                            <option selected disabled value="">Pilih Tipe</option>
                            <option value="single_choice">Pilihan Ganda</option>
                            <option value="essay">Isian Singkat</option>
                        </x-select>
                    </div>
                    <div class="col-span-2">
                        <x-label for="category" label="Kategori" />
                        <x-select id="category" wire:model.live="category">
                            <option selected disabled value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="col-span-2">
                        <x-label for="topic" label="Topik" />
                        <x-select id="topic" wire:model.live="topic">
                            <option selected disabled value="">Pilih Topik</option>
                            @foreach ($topics as $topic)
                                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="col-span-6">
                        <x-label for="question" label="Soal" />
                        <x-texteditor identifier="question" wire:model="question" />
                    </div>
                    <hr class="col-span-6 mt-4 border-slate-100">
                    @if ($type == 'single_choice')
                        <div class="col-span-3">
                            <div
                                class="flex gap-4 items-center justify-between py-1 ps-2 border-s-4 border-indigo-500 font-medium mb-8">
                                Jawaban
                                <div class="flex items-center gap-2 bg-green-50 py-1 px-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                    </svg>
                                    <small>
                                        Centang Jawaban yang benar
                                    </small>
                                </div>
                            </div>
                            <div class="space-y-4">
                                @foreach ($question_options as $index => $option)
                                    <div {{ $index }}>
                                        <div class="flex items-start gap-2">
                                            <input id="option_{{ $index }}" type="radio"
                                                wire:model="correct_answer" value="{{ $option['option_label'] }}"
                                                @class([
                                                    'h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500 focus:ring-2',
                                                    '!border-red-500' => $errors->has('correct_answer'),
                                                ]) />

                                            <div class="flex-1">
                                                <x-label for="option_{{ $index }}"
                                                    label="Pilihan {{ $option['option_label'] }}" />
                                                <x-texteditor
                                                    identifier="question_options[{{ $index }}].option_text"
                                                    wire:model="question_options.{{ $index }}.option_text" />
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if ($type == 'essay')
                        <div class="col-span-3">
                            <div
                                class="flex gap-4 items-center justify-between py-1 ps-2 border-s-4 border-indigo-500 font-medium mb-10">
                                Jawaban
                            </div>
                            <x-label for="correct_answer" label="Jawaban Essay" />
                            <x-texteditor identifier="correct_answer" wire:model="correct_answer" />
                        </div>
                    @endif

                    @if ($type !== '')
                        <div class="col-span-3">
                            <div
                                class="flex gap-4 items-center justify-between py-1 ps-2 border-s-4 border-indigo-500 font-medium mb-10">
                                Pembahasan
                            </div>
                            <x-label for="explanation" label="Pembahasan" />
                            <x-texteditor identifier="explanation" wire:model="explanation" />
                        </div>
                    @endif

                    {{-- ADD BUTTON --}}
                </div>
                <button
                    class="cursor-pointer text-nowrap py-3 px-4 bg-linear-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease">Simpan</button>
            </form>
        </x-card.body>
    </x-card>
</div>

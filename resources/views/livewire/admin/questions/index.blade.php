<div class="space-y-5">
    <x-card>
        <x-card.body>
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Kelola Soal</h3>
                <div class="flex gap-3 items-center">
                    <x-input />
                    <a href="{{ route('admin.questions.create') }}" wire:navigate
                        class="text-nowrap py-3 px-4 bg-linear-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease">Tambah</a>
                </div>
            </div>
        </x-card.body>
    </x-card>

    @foreach ($questions as $question)
        <x-card class="border-2 border-transparent hover:border-indigo-500 transition-all duration-300 ease">
            <x-card.body>
                <div class="flex items-center gap-2">
                    <span
                        class="flex gap-1 items-center text-xs font-semibold bg-green-100 text-green-700 px-2 py-1.5 rounded-lg [&>svg]:size-3.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                clip-rule="evenodd" />
                        </svg>
                        @if ($question->type == 'single_choice')
                            Pilihan Ganda
                        @elseif($question->type == 'essay')
                            Esai
                        @endif
                    </span>
                    <span
                        class="flex gap-1 items-center text-xs font-semibold bg-pink-100 text-pink-700 px-2 py-1.5 rounded-lg [&>svg]:size-3.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M5.25 2.25a3 3 0 0 0-3 3v4.318a3 3 0 0 0 .879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 0 0 5.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 0 0-2.122-.879H5.25ZM6.375 7.5a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ $question->category->name }}
                    </span>
                    <span
                        class="flex gap-1 items-center text-xs font-semibold bg-orange-100 text-orange-700 px-2 py-1.5 rounded-lg [&>svg]:size-3.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z"
                                clip-rule="evenodd" />
                        </svg>

                        {{ $question->topic->name }}</span>
                    <a href=""
                        class="ms-auto p-2.5 [&>svg]:size-4.5 text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-700 hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                        </svg>

                    </a>
                    <button wire:click="destroy({{ $question->id }})" wire:confirm="Anda yakin menghapus soal ini?"
                        class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-red-700 bg-red-100 rounded-lg hover:bg-red-700 hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="py-5 px-6 bg-slate-50 rounded-xl border-s-4 border-indigo-500 mt-5 text-[15px]">
                    <strong class="block mb-4">ID: QWERTY21829</strong>
                    {!! $question->question !!}
                </div>

                @if ($question->type == 'single_choice')
                    <div class="grid grid-cols-2 gap-3 mt-4">
                        @foreach ($question->questionOptions as $questionOption)
                            <div
                                class="border-2 {{ $questionOption->option_label == $question->correct_answer ? 'border-emerald-500 bg-emerald-100' : 'border-slate-200 bg-slate-50' }} rounded-lg p-3 flex items-center">
                                <span
                                    class="flex items-center justify-center size-7 {{ $questionOption->option_label == $question->correct_answer ? 'bg-emerald-500 text-white' : 'bg-white text-slate-600' }} rounded me-2 text-[13px] font-bold">{{ $questionOption->option_label }}</span>
                                <span class="text-sm">{!! $questionOption->option_text !!}</span>
                            </div>
                        @endforeach
                    </div>
                @elseif ($question->type == 'essay')
                    <div class="border-2 border-emerald-500 bg-emerald-100 rounded-lg p-3 flex items-center mt-4">
                        <span class="text-sm">{!! $question->correct_answer !!}</span>
                    </div>
                @endif
            </x-card.body>
        </x-card>
    @endforeach

</div>

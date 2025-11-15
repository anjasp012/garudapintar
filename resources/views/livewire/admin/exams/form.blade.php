<div>
    <x-card>
        <x-card.body class="!pb-2">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Kelola User</h3>
                <div class="flex gap-3 items-center">
                    <a href="{{ route('admin.exams.index') }}" wire:navigate
                        class="text-nowrap py-3 px-4 bg-red-600 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-red-200 focus:border-red-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-red-500 transition-all duration-300 ease">Kembali</a>
                </div>
            </div>
        </x-card.body>
        <x-card.body class="!pt-2">
            <form wire:submit="save">
                <div class="grid grid-cols-1 gap-4 mb-4">
                    <div>
                        <x-label for="name" label="Nama Ujian" />
                        <x-input type="text" id="name" wire:model="name" placeholder="Contoh: Tryout CPNS" />
                    </div>
                    <div>
                        <x-label for="description" label="Deskripsi Ujian" />
                        <x-textarea id="description" wire:model="description" placeholder="Jelaskan secara singkat" />
                    </div>
                    <div>
                        <x-label for="duration" label="Durasi" />
                        <x-input type="number" id="duration" wire:model="duration" />
                    </div>
                    <div>
                        <x-label for="type" label="Tipe" />
                        <x-select id="type" wire:model.live="type">
                            <option selected disabled value="">Pilih Tipe</option>
                            <option value="free">Gratis</option>
                            <option value="paid">Berbayar</option>
                        </x-select>
                    </div>
                    @if ($type === 'paid')
                        <div>
                            <x-label for="price" label="Harga" />
                            <x-input type="number" id="price" wire:model="price" />
                        </div>
                    @endif
                    @foreach ($exam_settings as $index => $setting)
                        <div wire:key="{{ $index }}">
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-5">
                                    <x-label for="{{ 'exam_settings' . $index . 'category_id' }}"
                                        label="Kategori Soal" />
                                    <x-select id="{{ 'exam_settings' . $index . 'category_id' }}"
                                        wire:model.live="exam_settings.{{ $index }}.category_id">
                                        <option selected disabled value="">Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </x-select>
                                </div>

                                {{-- TOPIC --}}
                                <div class="col-span-4">
                                    <x-label for="{{ 'exam_settings' . $index . 'topic_id' }}" label="Topik Soal" />
                                    <x-select id="{{ 'exam_settings' . $index . 'topic_id' }}"
                                        wire:model="exam_settings.{{ $index }}.topic_id"
                                        wire:key="exam_settings.{{ $index }}.category_id">
                                        <option selected disabled value="">Pilih Topik</option>
                                        @if (isset($setting['category_id']))
                                            {
                                            @foreach ((clone $topics)->whereCategoryId($setting['category_id'])->get() as $topic)
                                                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                            @endforeach
                                            }
                                        @endif
                                    </x-select>
                                </div>

                                {{-- QUESTION COUNT --}}
                                <div class="col-span-2">
                                    <x-label for="{{ 'exam_settings' . $index . 'question_count' }}"
                                        label="Jumlah Soal" />
                                    <x-input id="{{ 'exam_settings' . $index . 'question_count' }}" type="number"
                                        wire:model="exam_settings.{{ $index }}.question_count" />
                                </div>

                                {{-- REMOVE BUTTON --}}
                                @if ($index != 0)
                                    <div
                                        class="col-span-1 {{ $errors->has('exam_settings.' . $index . '.category_id') ||
                                        $errors->has('exam_settings.' . $index . '.topic_id') ||
                                        $errors->has('exam_settings.' . $index . '.question_count')
                                            ? 'self-center'
                                            : 'self-end' }}">
                                        <button type="button"
                                            class="cursor-pointer py-3 px-3 bg-red-600 rounded-lg text-white hover:bg-red-700 transition-all duration-300 ease"
                                            wire:click="removeSetting({{ $index }})"
                                            wire:target="removeSetting({{ $index }})"
                                            wire:loading.attr="disabled">
                                            <span wire:target="removeSetting({{ $index }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="size-6">
                                                    <path fill-rule="evenodd"
                                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                        clip-rule="evenodd" />
                                                </svg>

                                            </span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    {{-- ADD BUTTON --}}
                    <div>
                        {{-- <button type="button" wire:click="addSetting" class="btn btn-success" wire:loading.attr="disabled"
                        wire:target="save">
                    </button> --}}
                        <button type="button"
                            class="cursor-pointer py-3 px-3 bg-green-600 rounded-lg text-white hover:bg-green-700 transition-all duration-300 ease w-full font-semibold flex gap-2 justify-center [&>svg]:size-5.5"
                            wire:click="addSetting" wire:target="addSetting" wire:loading.attr="disabled">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                    clip-rule="evenodd" />
                            </svg>

                            Tambah Topik

                        </button>

                    </div>
                </div>
                <button
                    class="cursor-pointer text-nowrap py-3 px-4 bg-linear-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease">Simpan</button>
            </form>
        </x-card.body>
    </x-card>
</div>

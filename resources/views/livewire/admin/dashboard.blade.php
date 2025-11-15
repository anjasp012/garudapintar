<div class="space-y-4">
    <x-card class="bg-linear-to-r from-indigo-500 to-purple-500">
        <x-card.body class="md:py-10 relative z-99">
            <h3 class="z-99 text-white text-2xl md:text-3xl font-bold mb-3">👋 Selamat Datang, Admin!</h3>
            <p class="z-99 text-slate-100 text-xs md:text-normal mb-6">Kelola seluruh sistem ujian dan pantau aktivitas
                peserta dengan mudah</p>
            <a as="button" href="{{ route('admin.exams.create') }}" wire:navigate
                class="z-99 inline-block py-3 px-4 bg-white text-slate-700 font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-slate-200 focus:border-slate-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-slate-500 transition-all duration-300 ease">Buat
                Ujian Baru</a>
        </x-card.body>
        <div
            class="z-0 block absolute h-80 bg-white/10 border shadow-xs border-white/15 top-[-60%] end-[-6%] aspect-square rounded-full">
        </div>
    </x-card>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <x-card class="group border-2 border-transparent hover:border-indigo-500 transition-all duration-300 ease">
            <x-card.body class="flex flex-col gap-3 justify-between items-baseline w-full h-full">
                <div class="flex justify-between w-full items-center mb-2">
                    <div class="flex-1 me-auto">
                        <h5 class="text-slate-700 text-3xl md:text-4xl font-bold mb-1">{{ $userCount }}</h5>
                        <p class="text-slate-400 text-xs md:text-normal font-medium mb-1">Total Peserta</p>
                    </div>
                    <div
                        class="cursor-pointer p-3 [&>svg]:size-7 text-indigo-400 bg-indigo-100 rounded-lg group-hover:bg-indigo-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                    </div>
                </div>
                <div class="py-1 px-3 font-semibold text-green-500 bg-green-100 inline text-xs rounded-full">+ 10
                    Peserta Baru</div>
            </x-card.body>
        </x-card>
        <x-card class="group border-2 border-transparent hover:border-blue-500 transition-all duration-300 ease">
            <x-card.body class="flex flex-col gap-3 justify-between items-baseline w-full h-full">
                <div class="flex justify-between w-full items-center mb-2">
                    <div class="flex-1 me-auto">
                        <h5 class="text-slate-700 text-3xl md:text-4xl font-bold mb-1">{{ $examCount }}</h5>
                        <p class="text-slate-400 text-xs md:text-normal font-medium mb-1">Total Ujian</p>
                    </div>
                    <div
                        class="cursor-pointer p-3 [&>svg]:size-7 text-blue-400 bg-blue-100 rounded-lg group-hover:bg-blue-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="py-1 px-3 font-semibold text-green-500 bg-green-100 inline text-xs rounded-full">+ 10 Ujian
                    Baru</div>
            </x-card.body>
        </x-card>
        <x-card class="group border-2 border-transparent hover:border-lime-500 transition-all duration-300 ease">
            <x-card.body class="flex flex-col gap-3 justify-between h-full w-full items-baseline">
                <div class="flex justify-between w-full items-center mb-2">
                    <div class="flex-1 me-auto">
                        <h5 class="text-slate-700 text-3xl md:text-4xl font-bold mb-1">{{ $examCount }}</h5>
                        <p class="text-slate-400 text-xs md:text-normal font-medium mb-1">Total Soal</p>
                    </div>
                    <div
                        class="cursor-pointer p-3 [&>svg]:size-7 text-lime-400 bg-lime-100 rounded-lg group-hover:bg-lime-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="py-1 px-3 font-semibold text-green-500 bg-green-100 inline text-xs rounded-full">+ 10 Soal
                    Baru</div>
            </x-card.body>
        </x-card>
        <x-card class="group border-2 border-transparent hover:border-orange-500 transition-all duration-300 ease">
            <x-card.body class="flex flex-col gap-3 justify-between h-full w-full items-baseline">
                <div class="flex justify-between w-full items-center mb-2">
                    <div class="flex-1 me-auto">
                        <h5 class="text-slate-700 text-3xl md:text-4xl font-bold mb-1">{{ $examSessionCount }}</h5>
                        <p class="text-slate-400 text-xs md:text-normal font-medium mb-1">Total Sesi Ujian</p>
                    </div>
                    <div
                        class="cursor-pointer p-3 [&>svg]:size-7 text-orange-400 bg-orange-100 rounded-lg group-hover:bg-orange-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                            <path
                                d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                        </svg>
                    </div>
                </div>
                <div class="py-1 px-3 font-semibold text-green-500 bg-green-100 inline text-xs rounded-full">+ 4 Soal
                    Baru</div>
            </x-card.body>
        </x-card>
    </div>
    <x-card>
        <x-card.body>
            <h3 class="font-bold text-slate-800 text-xl mb-6">⚡Aksi Cepat</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 py-4 gap-4 md:gap-0 md:divide-x-1 md:divide-slate-200">
                <div class="cursor-pointer group flex flex-col justify-center items-center">
                    <div
                        class="p-3 [&>svg]:size-7 text-indigo-400 bg-indigo-100 rounded-lg group-hover:bg-indigo-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                    </div>
                    <div class="text-slate-700 font-bold mt-3">Tambah Peserta</div>
                </div>
                <div class="cursor-pointer group flex flex-col justify-center items-center">
                    <div
                        class="p-3 [&>svg]:size-7 text-blue-400 bg-blue-100 rounded-lg group-hover:bg-blue-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-slate-700 font-bold mt-3">Tambah Ujian</div>
                </div>
                <div class="cursor-pointer group flex flex-col justify-center items-center">
                    <div
                        class="p-3 [&>svg]:size-7 text-lime-400 bg-lime-100 rounded-lg group-hover:bg-lime-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-slate-700 font-bold mt-3">Tambah Soal</div>
                </div>
                <div class="cursor-pointer group flex flex-col justify-center items-center">
                    <div
                        class="p-3 [&>svg]:size-7 text-orange-400 bg-orange-100 rounded-lg group-hover:bg-orange-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                            <path
                                d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                        </svg>
                    </div>
                    <div class="text-slate-700 font-bold mt-3">Tambah Sesi Ujian</div>
                </div>

            </div>
        </x-card.body>
    </x-card>
    <div class="grid md:grid-cols-12 gap-4">
        <div class="md:col-span-8">
            <x-card>
                <x-card.body>
                    <h3 class="font-bold text-slate-800 text-xl mb-6">📃 Pengguna Baru</h3>
                    <table class="min-w-full" wire:poll.15s>
                        <tr class="border-b border-slate-50 text-left bg-slate-50">
                            <th class="p-3 text-sm uppercase">Nama</th>
                            <th class="p-3 text-sm uppercase">Email</th>
                            <th class="p-3 text-sm uppercase">Role</th>
                            <th class="p-3 text-sm uppercase">Tgl Daftar</th>
                            <th class="p-3 text-sm uppercase">Aksi</th>
                        </tr>
                        @foreach ($users as $no => $user)
                            <tr class="border-b border-slate-50 text-left hover:bg-slate-50"
                                wire:key="{{ $user->id }}">
                                <td class="px-3 py-6 text-sm">
                                    {{ $user->name }}
                                </td>
                                <td class="px-3 py-6 text-sm">
                                    {{ $user->email }}
                                </td>
                                <td class="px-3 py-6 text-sm">
                                    {{ $user->role }}
                                </td>
                                <td class="px-3 py-6 text-sm">
                                    {{ $user->created_at->diffForHumans() }}
                                </td>
                                <td class="px-3 py-6 text-sm space-x-1 text-nowrap">
                                    <div class="flex gap-1">
                                        <a href="{{ route('admin.users.edit', $user) }}" wire:navigate
                                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-yellow-400 bg-yellow-100 rounded-lg hover:bg-yellow-400 hover:text-white transition-all duration-300 ease">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="size-6">
                                                <path
                                                    d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                            </svg>
                                        </a>
                                        <button type="button" wire:click="destroy({{ $user->id }})"
                                            wire:confirm="Anda yakin menghapus pengguna ini?"
                                            class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-red-700 bg-red-100 rounded-lg hover:bg-red-700 hover:text-white transition-all duration-300 ease">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="size-6">
                                                <path fill-rule="evenodd"
                                                    d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                    {{-- <a href="#" wire:ignore
                            class="py-2 px-3 bg-red-600 font-semibold text-white rounded hover:bg-red-700 hover:shadow-xs hover:shadow-red-300 focus:border-red-300 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-red-300 transition-all duration-300 ease">
                            Delete
                        </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </x-card.body>
            </x-card>
        </div>
        <div class="md:col-span-4">
            <x-card>
                <x-card.body>
                    <h3 class="font-bold text-slate-800 text-xl mb-6">🕛 Aktivitas Pengguna</h3>
                    <div class="space-y-3" style="max-height: 480px; overflow-y: auto;">
                        @foreach ($activities as $activity)
                            <x-activity :$activity />
                        @endforeach
                    </div>
                </x-card.body>
            </x-card>
        </div>
    </div>
</div>

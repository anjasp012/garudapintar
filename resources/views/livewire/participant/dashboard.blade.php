<div class="space-y-4">
    <x-card class="bg-linear-to-r from-indigo-500 to-purple-500">
        <x-card.body class="!py-10">
            <h3 class="text-white text-3xl font-bold mb-3">🎯 Selamat Datang, Anjas!</h3>
            <p class="text-slate-100 mb-6">Siap untuk meningkatkan kemampuanmu hari ini? Mari kita mulai latihan!</p>
            <a as="button" href="{{ route('admin.users.create') }}" wire:navigate
                class="inline-block py-3 px-4 bg-white text-slate-700 font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-slate-500 focus:border-slate-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-slate-500 transition-all duration-300 ease">Mulai
                Ujian Sekarang</a>
        </x-card.body>
        <div
            class="block absolute h-80 bg-white/10 border shadow-xs border-white/15 top-[-60%] end-[-6%] aspect-square rounded-full">
        </div>
    </x-card>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <x-card class="group border-2 border-transparent hover:border-indigo-500 transition-all duration-300 ease">
            <x-card.body>
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-slate-700 text-4xl font-bold mb-1">{{ $userCount }}</h5>
                        <p class="text-slate-400 font-medium mb-1">Total Ujian Diikuti</p>
                    </div>
                    <div
                        class="cursor-pointer p-3 [&>svg]:size-7 text-indigo-400 bg-indigo-100 rounded-lg group-hover:bg-indigo-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                </div>
            </x-card.body>
        </x-card>
        <x-card class="group border-2 border-transparent hover:border-blue-500 transition-all duration-300 ease">
            <x-card.body>
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-slate-700 text-4xl font-bold mb-1">{{ $examCount }}</h5>
                        <p class="text-slate-400 font-medium mb-1">Rata-rata Nilai</p>
                    </div>
                    <div
                        class="cursor-pointer p-3 [&>svg]:size-7 text-blue-400 bg-blue-100 rounded-lg group-hover:bg-blue-400 group-hover:text-white transition-all duration-300 ease">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M7.491 5.992a.75.75 0 0 1 .75-.75h12a.75.75 0 1 1 0 1.5h-12a.75.75 0 0 1-.75-.75ZM7.49 11.995a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75ZM7.491 17.994a.75.75 0 0 1 .75-.75h12a.75.75 0 1 1 0 1.5h-12a.75.75 0 0 1-.75-.75ZM2.24 3.745a.75.75 0 0 1 .75-.75h1.125a.75.75 0 0 1 .75.75v3h.375a.75.75 0 0 1 0 1.5H2.99a.75.75 0 0 1 0-1.5h.375v-2.25H2.99a.75.75 0 0 1-.75-.75ZM2.79 10.602a.75.75 0 0 1 0-1.06 1.875 1.875 0 1 1 2.652 2.651l-.55.55h.35a.75.75 0 0 1 0 1.5h-2.16a.75.75 0 0 1-.53-1.281l1.83-1.83a.375.375 0 0 0-.53-.53.75.75 0 0 1-1.062 0ZM2.24 15.745a.75.75 0 0 1 .75-.75h1.125a1.875 1.875 0 0 1 1.501 2.999 1.875 1.875 0 0 1-1.501 3H2.99a.75.75 0 0 1 0-1.501h1.125a.375.375 0 0 0 .036-.748H3.74a.75.75 0 0 1-.75-.75v-.002a.75.75 0 0 1 .75-.75h.411a.375.375 0 0 0-.036-.748H2.99a.75.75 0 0 1-.75-.75Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                </div>
            </x-card.body>
        </x-card>
        <x-card class="group border-2 border-transparent hover:border-lime-500 transition-all duration-300 ease">
            <x-card.body>
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-slate-700 text-4xl font-bold mb-1">{{ $examCount }}</h5>
                        <p class="text-slate-400 font-medium mb-1">Rata rata Peringkat</p>
                    </div>
                    <div
                        class="cursor-pointer p-3 [&>svg]:size-7 text-lime-400 bg-lime-100 rounded-lg group-hover:bg-lime-400 group-hover:text-white transition-all duration-300 ease">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z"
                                clip-rule="evenodd" />
                        </svg>


                    </div>
                </div>
            </x-card.body>
        </x-card>
        <x-card class="group border-2 border-transparent hover:border-orange-500 transition-all duration-300 ease">
            <x-card.body>
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-slate-700 text-4xl font-bold mb-1">{{ $examSessionCount }}</h5>
                        <p class="text-slate-400 font-medium mb-1">Total Sesi Ujian</p>
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
            </x-card.body>
        </x-card>
    </div>
    <div class="grid md:grid-cols-2 gap-4">
        <x-card>
            <x-card.body>
                <h3 class="font-bold text-slate-800 text-xl mb-6">📃 Ujian Terbaru Anda</h3>
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
                                <div class="progress relative w-full bg-indigo-100 rounded-full h-2 overflow-hidden">
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
                    <tr class="border-b border-slate-50 text-left hover:bg-slate-50">
                        <td class="px-3 py-6 text-sm">
                            Ujian A
                        </td>
                        <td class="px-3 py-6 text-sm">
                            8 November 2025
                        </td>
                        <td class="px-3 py-6 text-sm">
                            <div class="flex flex-col items-center">
                                <span class="font-medium text-center text-indigo-600 text-xs">100%</span>
                                <div class="progress relative w-full bg-indigo-100 rounded-full h-2 overflow-hidden">
                                    <div class="presentase w-[100%] bg-indigo-600 h-2"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-6 text-sm">
                            3 Menit
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
                            </div>
                        </td>
                    </tr>
                </table>
            </x-card.body>
        </x-card>
        <x-card>
            <x-card.body>
                <h3 class="font-bold text-slate-800 text-xl mb-6">🕛 Aktivitas Anda</h3>
                <div class="space-y-3" style="max-height: 480px; overflow-y: auto;">
                    <x-card class="border-s-4 border-green-600 !bg-slate-50 !rounded-lg">
                        <x-card.body class="!p-4">
                            <div class="flex gap-3 items-start">
                                <div
                                    class="p-2.5 [&>svg]:size-4.5 text-green-600 bg-green-100 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-300 ease">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>


                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-semibold">Memulai Ujian</div>
                                    <div class="text-xs text-slate-500">Anda memulai ujian Ujian B</div>
                                    <span class="text-xs text-slate-400">1 menit yang lalu</span>
                                </div>
                            </div>
                        </x-card.body>
                    </x-card>
                    <x-card class="border-s-4 border-red-700 !bg-slate-50 !rounded-lg">
                        <x-card.body class="!p-4">
                            <div class="flex gap-3 items-start">
                                <div
                                    class="p-2.5 [&>svg]:size-4.5 text-red-700 bg-red-100 rounded-lg hover:bg-red-700 hover:text-white transition-all duration-300 ease">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                    </svg>

                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-semibold">Enrol Ujian</div>
                                    <div class="text-xs text-slate-500">Anda enrol ujian Ujian B</div>
                                    <span class="text-xs text-slate-400">1 menit yang lalu</span>
                                </div>
                            </div>
                        </x-card.body>
                    </x-card>
                    <x-card class="border-s-4 border-yellow-400 !bg-slate-50 !rounded-lg">
                        <x-card.body class="!p-4">
                            <div class="flex gap-3 items-start">
                                <div
                                    class="p-2.5 [&>svg]:size-4.5 text-yellow-400 bg-yellow-100 rounded-lg hover:bg-yellow-400 hover:text-white transition-all duration-300 ease">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M3 2.25a.75.75 0 0 1 .75.75v.54l1.838-.46a9.75 9.75 0 0 1 6.725.738l.108.054A8.25 8.25 0 0 0 18 4.524l3.11-.732a.75.75 0 0 1 .917.81 47.784 47.784 0 0 0 .005 10.337.75.75 0 0 1-.574.812l-3.114.733a9.75 9.75 0 0 1-6.594-.77l-.108-.054a8.25 8.25 0 0 0-5.69-.625l-2.202.55V21a.75.75 0 0 1-1.5 0V3A.75.75 0 0 1 3 2.25Z"
                                            clip-rule="evenodd" />
                                    </svg>



                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-semibold">Menyelesaikan Ujian</div>
                                    <div class="text-xs text-slate-500">Anda menyelesaikan ujian Ujian A</div>
                                    <span class="text-xs text-slate-400">1 menit yang lalu</span>
                                </div>
                            </div>
                        </x-card.body>
                    </x-card>
                    <x-card class="border-s-4 border-green-600 !bg-slate-50 !rounded-lg">
                        <x-card.body class="!p-4">
                            <div class="flex gap-3 items-start">
                                <div
                                    class="p-2.5 [&>svg]:size-4.5 text-green-600 bg-green-100 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-300 ease">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>


                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-semibold">Memulai Ujian</div>
                                    <div class="text-xs text-slate-500">Anda memulai ujian Ujian A</div>
                                    <span class="text-xs text-slate-400">1 menit yang lalu</span>
                                </div>
                            </div>
                        </x-card.body>
                    </x-card>
                    <x-card class="border-s-4 border-red-700 !bg-slate-50 !rounded-lg">
                        <x-card.body class="!p-4">
                            <div class="flex gap-3 items-start">
                                <div
                                    class="p-2.5 [&>svg]:size-4.5 text-red-700 bg-red-100 rounded-lg hover:bg-red-700 hover:text-white transition-all duration-300 ease">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                    </svg>

                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-semibold">Enrol Ujian</div>
                                    <div class="text-xs text-slate-500">Anda enrol ujian Ujian A</div>
                                    <span class="text-xs text-slate-400">1 menit yang lalu</span>
                                </div>
                            </div>
                        </x-card.body>
                    </x-card>
                    <x-card class="border-s-4 border-blue-700 !bg-slate-50 !rounded-lg">
                        <x-card.body class="!p-4">
                            <div class="flex gap-3 items-start">
                            <div
                                class="p-2.5 [&>svg]:size-4.5 text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-700 hover:text-white transition-all duration-300 ease">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                                <div class="flex-1">
                                    <div class="text-sm font-semibold">Login</div>
                                    <div class="text-xs text-slate-500">Anda login ke dashboard</div>
                                    <span class="text-xs text-slate-400">1 menit yang lalu</span>
                                </div>
                            </div>
                        </x-card.body>
                    </x-card>
                </div>
            </x-card.body>
        </x-card>
    </div>
</div>

@php
    $config = [
        'register' => [
            'border' => 'border-green-700',
            'icon_bg' => 'text-green-700 bg-green-100 hover:bg-green-700 hover:text-white',
            'icon' => 'user-plus', // nanti dipakai svg helper
        ],
        'login' => [
            'border' => 'border-blue-700',
            'icon_bg' => 'text-blue-700 bg-blue-100 hover:bg-blue-700 hover:text-white',
            'icon' => 'login',
        ],
        'enrol ujian' => [
            'border' => 'border-red-700',
            'icon_bg' => 'text-red-700 bg-red-100 hover:bg-red-700 hover:text-white',
            'icon' => 'enrol',
        ],
        'memulai ujian' => [
            'border' => 'border-red-700',
            'icon_bg' => 'text-red-700 bg-red-100 hover:bg-red-700 hover:text-white',
            'icon' => 'enrol',
        ],
    ];

    $item = $config[$activity->log_name] ?? [
        'border' => 'border-slate-300',
        'icon_bg' => 'text-slate-700 bg-slate-100',
        'icon' => 'dots',
    ];
@endphp

<x-card class="border-s-4 {{ $item['border'] }} !bg-slate-50 !rounded-lg">
    <x-card.body class="!p-4">
        <div class="flex gap-3 items-start">

            {{-- ICON SECTION --}}
            <div class="p-2.5 [&>svg]:size-4.5 rounded-lg transition-all duration-300 ease {{ $item['icon_bg'] }}">
                @switch($item['icon'])
                    @case('user-plus')
                        {{-- REGISTER ICON --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.375 0 0 1-8.25 0Z..." />
                        </svg>
                    @break

                    @case('login')
                        {{-- LOGIN ICON --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                    @break

                    @default
                        {{-- DEFAULT DOTS --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="5" cy="12" r="2" />
                            <circle cx="12" cy="12" r="2" />
                            <circle cx="19" cy="12" r="2" />
                        </svg>
                @endswitch
            </div>

            {{-- TEXT SECTION --}}
            <div class="flex-1">
                <div class="text-sm font-semibold capitalize">{{ $activity->log_name }}</div>
                <div class="text-xs text-slate-500">{{ $activity->description }}</div>
                <span class="text-xs text-slate-400">2 menit yang lalu</span>
            </div>
        </div>
    </x-card.body>
</x-card>

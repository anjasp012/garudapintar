<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
</head>

<body class="bg-slate-50 relative antialiased box-border transition-all duration-300 ease">
    {{-- Main content --}}
    <div class="wrapper" x-data="{ sidebarOpen: false }">
        <div x-cloak x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 bg-black/30 z-1 sm:hidden"
            x-on:click="sidebarOpen = false">
        </div>
        @if (auth()->user()->role == 'admin')
            <x-sidebar-admin />
        @else
            <x-sidebar-participant />
        @endif
        <main class="sm:ms-70 py-4 px-3 sm:px-5 space-y-4">
            <x-card as="nav" class="overflow-visible">
                <x-card.body class="flex justify-between items-center !py-4">
                    <div class="hidden lg:block">
                        <div class="font-bold text-2xl text-slate-800">Dashboard</div>
                        <span class="text-sm text-slate-500">Kelola semuanya disini</span>
                    </div>
                    <button x-on:click="sidebarOpen = true" class="lg:hidden p-2 bg-slate-100 rounded cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="relative" @click.outside="authMenu = false" x-data="{ authMenu: false }">
                        <button x-on:click="authMenu = !authMenu"
                            class="relative flex items-center gap-3 bg-slate-50 px-6 py-2 rounded-lg shadow-2xs hover:bg-slate-100 hover:shadow-xs transition-all duration-300 ease">
                            <div
                                class="rounded-full flex justify-center items-center h-10 aspect-square bg-orange-500 font-semibold">
                                A</div>
                            <div>
                                <div class="text-start font-medium text-slate-700 capitalize">
                                    {{ auth()->user()->name }}
                                </div>
                                <div class="text-start text-xs text-slate-500">
                                    {{ auth()->user()->role }}
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 transition-all duration-200 ease-in-out"
                                :class="authMenu ? 'rotate-180' : ''">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                        <div :class="authMenu ? 'z-100 visible h-auto overflow-hidden' : ''"
                            class="absolute rounded-lg z-1 invisible ms-auto w-50 translate-y-2 top-full start-0 end-0 bg-slate-50 shadow-xs transition-all duration-100 ease">
                            <ul class="divide-y-1 divide-slate-100">
                                <li>
                                    <a class="flex gap-3 items-center py-3 px-5 hover:bg-slate-100"
                                        href="{{ route('participant.settings') }}" wire:navigate><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="size-6">
                                            <path
                                                d="M17.004 10.407c.138.435-.216.842-.672.842h-3.465a.75.75 0 0 1-.65-.375l-1.732-3c-.229-.396-.053-.907.393-1.004a5.252 5.252 0 0 1 6.126 3.537ZM8.12 8.464c.307-.338.838-.235 1.066.16l1.732 3a.75.75 0 0 1 0 .75l-1.732 3c-.229.397-.76.5-1.067.161A5.23 5.23 0 0 1 6.75 12a5.23 5.23 0 0 1 1.37-3.536ZM10.878 17.13c-.447-.098-.623-.608-.394-1.004l1.733-3.002a.75.75 0 0 1 .65-.375h3.465c.457 0 .81.407.672.842a5.252 5.252 0 0 1-6.126 3.539Z" />
                                            <path fill-rule="evenodd"
                                                d="M21 12.75a.75.75 0 1 0 0-1.5h-.783a8.22 8.22 0 0 0-.237-1.357l.734-.267a.75.75 0 1 0-.513-1.41l-.735.268a8.24 8.24 0 0 0-.689-1.192l.6-.503a.75.75 0 1 0-.964-1.149l-.6.504a8.3 8.3 0 0 0-1.054-.885l.391-.678a.75.75 0 1 0-1.299-.75l-.39.676a8.188 8.188 0 0 0-1.295-.47l.136-.77a.75.75 0 0 0-1.477-.26l-.136.77a8.36 8.36 0 0 0-1.377 0l-.136-.77a.75.75 0 1 0-1.477.26l.136.77c-.448.121-.88.28-1.294.47l-.39-.676a.75.75 0 0 0-1.3.75l.392.678a8.29 8.29 0 0 0-1.054.885l-.6-.504a.75.75 0 1 0-.965 1.149l.6.503a8.243 8.243 0 0 0-.689 1.192L3.8 8.216a.75.75 0 1 0-.513 1.41l.735.267a8.222 8.222 0 0 0-.238 1.356h-.783a.75.75 0 0 0 0 1.5h.783c.042.464.122.917.238 1.356l-.735.268a.75.75 0 0 0 .513 1.41l.735-.268c.197.417.428.816.69 1.191l-.6.504a.75.75 0 0 0 .963 1.15l.601-.505c.326.323.679.62 1.054.885l-.392.68a.75.75 0 0 0 1.3.75l.39-.679c.414.192.847.35 1.294.471l-.136.77a.75.75 0 0 0 1.477.261l.137-.772a8.332 8.332 0 0 0 1.376 0l.136.772a.75.75 0 1 0 1.477-.26l-.136-.771a8.19 8.19 0 0 0 1.294-.47l.391.677a.75.75 0 0 0 1.3-.75l-.393-.679a8.29 8.29 0 0 0 1.054-.885l.601.504a.75.75 0 0 0 .964-1.15l-.6-.503c.261-.375.492-.774.69-1.191l.735.267a.75.75 0 1 0 .512-1.41l-.734-.267c.115-.439.195-.892.237-1.356h.784Zm-2.657-3.06a6.744 6.744 0 0 0-1.19-2.053 6.784 6.784 0 0 0-1.82-1.51A6.705 6.705 0 0 0 12 5.25a6.8 6.8 0 0 0-1.225.11 6.7 6.7 0 0 0-2.15.793 6.784 6.784 0 0 0-2.952 3.489.76.76 0 0 1-.036.098A6.74 6.74 0 0 0 5.251 12a6.74 6.74 0 0 0 3.366 5.842l.009.005a6.704 6.704 0 0 0 2.18.798l.022.003a6.792 6.792 0 0 0 2.368-.004 6.704 6.704 0 0 0 2.205-.811 6.785 6.785 0 0 0 1.762-1.484l.009-.01.009-.01a6.743 6.743 0 0 0 1.18-2.066c.253-.707.39-1.469.39-2.263a6.74 6.74 0 0 0-.408-2.309Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="font-medium text-sm">Pengaturan</span></a>
                                </li>
                                <li>
                                    <button @click="if (confirm('Anda yakin untuk logout?')) { $dispatch('logout') }" class="cursor-pointer w-full flex gap-3 items-center py-3 px-5 hover:bg-slate-100" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="size-6">
                                            <path fill-rule="evenodd"
                                                d="M14.47 2.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H9a5.25 5.25 0 1 0 0 10.5h3a.75.75 0 0 1 0 1.5H9a6.75 6.75 0 0 1 0-13.5h10.19l-4.72-4.72a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <span class="font-medium text-sm">Logout</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </x-card.body>
            </x-card>
            <section>
                {{ $slot }}
            </section>
        </main>

    </div>
    <x-alert />
    <livewire:auth.logout />
    <livewire:scripts />

    @stack('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
</head>

<body class="bg-slate-50 relative antialiased">
    {{-- Main content --}}
    <div class="wrapper">
        <x-navbar-exam />
        {{ $slot }}
    </div>
    {{-- <livewire:auth.logout /> --}}

    <livewire:scripts />

    @stack('scripts')
</body>

</html>

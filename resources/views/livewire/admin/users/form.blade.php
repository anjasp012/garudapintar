<div>
    <x-card>
        <x-card.body class="!pb-2">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Tambah User</h3>
                <div class="flex gap-3 items-center">
                    <a href="{{ route('admin.users.index') }}" wire:navigate
                        class="text-nowrap py-3 px-4 bg-red-600 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-red-200 focus:border-red-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-red-500 transition-all duration-300 ease">Kembali</a>
                </div>
            </div>
        </x-card.body>
        <x-card.body class="!pt-2">
            <form wire:submit="save">
                <div class="grid grid-cols-1 gap-4 mb-4">
                    <div>
                        <x-label for="name" label="Nama"/>
                        <x-input id="name" wire:model="name" placeholder="Masukan nama"/>
                    </div>
                    <div>
                        <x-label for="email" label="Email"/>
                        <x-input id="email" type="email" wire:model="email" placeholder="Masukan email"/>
                    </div>
                    <div>
                        <x-label for="password" label="Password"/>
                        <x-input id="password" type="password" wire:model="password" placeholder="Masukan password"/>
                    </div>
                </div>
                <button
                    class="cursor-pointer text-nowrap py-3 px-4 bg-linear-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease">Simpan</button>
            </form>
        </x-card.body>
    </x-card>
</div>

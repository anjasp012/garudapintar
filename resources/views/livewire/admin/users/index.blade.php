<div>
    <x-card>
        <x-card.body>
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold text-slate-800">Kelola User</h3>
                <div class="flex gap-3 items-center">
                    <x-input wire:model.live.debounce.150ms="search"/>
                    <a href="{{ route('admin.users.create') }}" wire:navigate
                        class="text-nowrap py-3 px-4 bg-linear-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease">Tambah</a>
                </div>
            </div>
        </x-card.body>
        <table class="min-w-full" wire:poll.15s>
            <tr class="border-b border-slate-50 text-left bg-slate-50">
                <th class="p-3 text-sm uppercase text-center">No</th>
                <th class="p-3 text-sm uppercase">Nama</th>
                <th class="p-3 text-sm uppercase">Email</th>
                <th class="p-3 text-sm uppercase">Role</th>
                <th class="p-3 text-sm uppercase">Aksi</th>
            </tr>
            @foreach ($users as $user)
                <tr class="border-b border-slate-50 text-left hover:bg-slate-50" wire:key="{{ $user->id }}">
                    <td class="px-3 py-6 text-sm text-center">
                        {{ $loop->index + $users->firstItem() }}
                    </td>
                    <td class="px-3 py-6 text-sm">
                        {{ $user->name }}
                    </td>
                    <td class="px-3 py-6 text-sm">
                        {{ $user->email }}
                    </td>
                    <td class="px-3 py-6 text-sm">
                        {{ $user->role }}
                    </td>
                    <td class="px-3 py-6 text-sm space-x-1 text-nowrap">
                        <div class="flex gap-1">
                            <a href="{{ route('admin.users.edit', $user) }}" wire:navigate
                                class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-yellow-400 bg-yellow-100 rounded-lg hover:bg-yellow-400 hover:text-white transition-all duration-300 ease">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>

                            </a>
                            <button type="button" wire:click="destroy({{ $user->id }})"
                                wire:confirm="Anda yakin menghapus pengguna ini?"
                                class="cursor-pointer p-2.5 [&>svg]:size-4.5 text-red-700 bg-red-100 rounded-lg hover:bg-red-700 hover:text-white transition-all duration-300 ease">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
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
        <x-card.body>
            {{ $users->links('livewire::tailwind') }}
        </x-card.body>
    </x-card>
</div>

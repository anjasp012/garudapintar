<div class="w-full max-w-3xl">
    <x-card class="!bg-gradient-to-b !from-indigo-50 !to-purple-50">
        <x-card.body class="sm:!p-7">
            <div
                class="flex flex-col items-center gap-3 sm:gap-2 p-2 rounded-xl sm:rounded-xl translate-all duration-300 ease mb-3 sm:mb-6">
                <div
                    class="flex text-xl sm:text-2xl size-10 sm:size-14 bg-gradient-to-b from-indigo-500 to-purple-500 rounded-lg sm:rounded-xl text-white font-black text-center items-center justify-center translate-all duration-300 ease">
                    GP
                </div>
                <div>
                    <div class="text-indigo-500 font-extrabold text-lg sm:text-xl">Garuda Pintar</div>
                </div>
            </div>

            <form wire:submit="store">
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <x-label for="name" label="Nama" />
                        <x-input type="text" id="name" wire:model="name" placeholder="Masukan Nama Lengkap" />
                    </div>
                    <div>
                        <x-label for="nik" label="NIK / No. Identitas" />
                        <x-input type="text" id="nik" wire:model="nik" placeholder="Masukan NIK/No. Identitas" />
                    </div>
                    <div class="col-span-2">
                        <x-label for="email" label="Email" />
                        <x-input type="email" id="email" wire:model="email" placeholder="exmpale@mail.com" />
                    </div>
                    <div>
                        <x-label for="telp" label="No. Telepon" />
                        <x-input type="text" id="telp" wire:model="telp" placeholder="08xxxxxxxxxx" />
                    </div>
                    <div>
                        <x-label for="birth" label="Tanggal Lahir" />
                        <x-input type="date" id="birth" wire:model="birth" placeholder="08xxxxxxxxxx" />
                    </div>
                    <div class="col-span-2">
                        <x-label for="gender" label="Jenis Kelamin" />
                        <x-select type="gender" id="gender" wire:model="password">
                            <option value="male">Laki laki</option>
                            <option value="female">Perempuan</option>
                        </x-select>
                    </div>
                    <div class="col-span-2">
                        <x-label for="address" label="Alamat" />
                        <x-input type="text" id="address" wire:model="address" />
                    </div>
                    <div>
                        <x-label for="password" label="Password" />
                        <x-input type="password" id="password" wire:model="password" />
                    </div>
                    <div>
                        <x-label for="password" label="Konfirmasi Password" />
                        <x-input type="password" id="password_confirmation" wire:model="password_confirmation" />
                    </div>
                    <div class="col-span-2">
                        <button type="submit"
                            class="cursor-pointer w-full text-nowrap py-3 px-4 bg-linear-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease"
                            wire:loading.attr="disabled" wire:target="store">
                            <span wire:loading wire:target="store">
                                Memproses...
                            </span>
                            <span wire:loading.remove wire:target="store">Register</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="relative my-5">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-border/50"></div>
                </div>
                <div class="relative flex justify-center text-xs uppercase"><span
                        class="bg-purple-50 px-2 text-slate-500">Atau
                        lanjutkan dengan</span></div>
            </div>
            <a
                class="cursor-pointer flex w-full [&>svg]:size-3.5 sm:[&>svg]:size-4.5 gap-2 items-center text-nowrap justify-center py-3 px-4 bg-white border border-slate-100 text-slate-700 font-medium rounded-md text-sm hover:shadow-xs hover:shadow-indigo-200 focus:border-indigo-200 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease">
                <svg viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z">
                    </path>
                    <path fill="currentColor"
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z">
                    </path>
                    <path fill="currentColor"
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z">
                    </path>
                    <path fill="currentColor"
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z">
                    </path>
                </svg>
                Daftar dengan Google
            </a>
            <p class="text-center text-sm text-slate-500 mt-3">
                Sudah punya akun?
                <a wire:navigate href="{{ route('login') }}"
                    class="text-indigo-600 font-medium hover:underline">
                    {{ ' ' }}Masuk sekarang
                </a>
            </p>
        </x-card.body>

    </x-card>
</div>

<nav x-data="{ open: false}"  class="bg-white shadow-xs">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <!-- Brand -->
            <div class="flex items-center">
                <div
                    class="flex items-center gap-3 sm:gap-4 p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-linear-to-b from-white/15 to-white/17 translate-all duration-300 ease">
                    <div
                        class="flex text-xl sm:text-2xl size-10 sm:size-12 bg-white/90 rounded-lg sm:rounded-xl text-indigo-500 font-black text-center items-center justify-center translate-all duration-300 ease">
                        GP
                    </div>
                    <div>
                        <div class="text-white font-extrabold text-lg sm:text-xl">Garuda Pintar</div>
                        <div class="text-white text-[10px] sm:text-[11px]">Admin Panel</div>
                    </div>
                </div>
            </div>

            <!-- Mobile button -->
            <div class="flex items-center lg:hidden">
                <button type="button" @click="open = !open"
                    class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex lg:items-center lg:space-x-6 w-full justify-between">
                <ul class="flex space-x-6">
                    <x-nav-link href="{{ route('home') }}">
                        Home
                    </x-nav-link>
                </ul>

                <ul class="flex items-center gap-6">
                    @auth
                        <div class="flex items-center gap-3 bg-red-200 px-4 py-2 rounded-xl shadow-red-100 shadow-xs">
                            <div class="[&_svg]:size-4.5 p-2 rounded-lg text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div x-data="timerNavbar()" x-init="listenExamTimer()">
                                <span class="text-xs font-semibold text-red-800 tracking-wider">WAKTU TERSISA</span>
                                <div class="font-bold text-xl text-red-600" x-text="formattedTime()">...</div>
                            </div>
                        </div>
                        <button x-data="{ loading: false }"
                            @click="
        if (confirm('Yakin ingin mengakhiri ujian?')) {
            loading = true;
            Livewire.dispatch('finished');
            setTimeout(() => loading = false, 3000);
        }
    "
                            :disabled="loading"
                            class="relative py-2.5 px-6 font-semibold bg-gradient-to-r from-green-500 via-green-600 to-green-600 text-white rounded-xl transition-all duration-300 ease shadow shadow-green-400 hover:-translate-y-1 disabled:opacity-60 disabled:cursor-not-allowed">
                            <template x-if="!loading">
                                <span>Submit & Selesai</span>
                            </template>
                            <template x-if="loading">
                                <div class="flex items-center gap-2">
                                    <svg class="animate-spin size-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                    </svg>
                                    <span>Processing...</span>
                                </div>
                            </template>
                        </button>
                    @else
                        <x-nav-link href="{{ route('login') }}">Login</x-nav-link>
                    @endauth
                </ul>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-transition class="lg:hidden mt-2 space-y-2">
            <ul class="space-y-2">
                <x-nav-link href="{{ route('home') }}">Home</x-nav-link>
            </ul>

            <ul class="border-t border-gray-200 pt-2 space-y-2 mt-2">
                @auth
                    <x-nav-link href="{{ route('participant.exams.index') }}">My Exams</x-nav-link>
                    <x-nav-link :wireNavigate='false' href="#logoutModal" data-modal-target="logoutModal">Logout</x-nav-link>
                @else
                    <x-nav-link href="{{ route('login') }}">Login</x-nav-link>
                @endauth
            </ul>
        </div>
    </div>
</nav>

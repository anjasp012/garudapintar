<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 gap-4">
            <!-- Brand -->
            <div class="flex items-center">
                <a href="#" class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors">
                    Navbar
                </a>
            </div>

            <!-- Mobile button -->
            <div class="flex items-center lg:hidden">
                <button
                    type="button"
                    @click="open = !open"
                    class="text-gray-700 hover:text-blue-600 focus:outline-none"
                    x-data="{ open: false }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
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

                <ul class="flex space-x-6">
                    @auth
                        <x-nav-link href="{{ route('participant.exams.index') }}">
                            My Exams
                        </x-nav-link>
                        <livewire:auth.logout/>
                    @else
                        <x-nav-link href="{{ route('login') }}">Login</x-nav-link>
                    @endauth
                </ul>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" class="lg:hidden mt-2 space-y-2" x-transition>
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

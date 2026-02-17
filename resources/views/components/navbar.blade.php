<nav x-data="{ mobileMenuOpen: false, profileMenuOpen: false }" class="bg-white/90 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                {{-- Logo --}}
                <div class="shrink-0 flex items-center">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=blue&shade=600" alt="Logo" class="size-8" />
                </div>

                {{-- Nav Links --}}
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                        <x-nav-link href="/posts" :active="request()->is('posts*')">Blog</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    </div>
                </div>
            </div>

            {{-- User Menu (Kanan) --}}
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="relative ml-3">
                        <div>
                            <button
                                @click="profileMenuOpen = !profileMenuOpen"
                                @click.outside="profileMenuOpen = false"
                                type="button"
                                class="relative flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all">
                                <span class="sr-only">Open user menu</span>
                                <img
                                    class="size-9 rounded-full border-2 border-white shadow-sm"
                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="User Profile" />
                            </button>
                        </div>

                        {{-- Dropdown (FIXED: Added High Z-Index & New Style) --}}
                        <div
                            x-show="profileMenuOpen"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 z-[100] mt-2 w-52 origin-top-right rounded-2xl bg-white dark:bg-gray-800 py-2 shadow-2xl ring-1 ring-black ring-opacity-5 border border-gray-100 dark:border-gray-700 focus:outline-none">
                            <div class="px-4 py-2 border-b border-gray-50 dark:border-gray-700">
                                <p class="text-xs text-gray-400">Signed in as</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white truncate">Ryn Dev</p>
                            </div>

                            <a href="#" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/30 hover:text-blue-600 transition-colors">
                                Your Profile
                            </a>
                            <a href="#" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/30 hover:text-blue-600 transition-colors">Settings</a>

                            <div class="border-t border-gray-50 dark:border-gray-700 mt-1">
                                <a href="#" class="block px-4 py-2.5 text-sm font-semibold text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 transition-all">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile Button --}}
            <div class="-mr-2 flex md:hidden">
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    type="button"
                    class="inline-flex items-center justify-center p-2 rounded-xl text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition-colors">
                    <svg :class="{'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen }" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen" class="md:hidden bg-white/95 border-b border-gray-100">
        <div class="space-y-1 px-4 pt-2 pb-6">
            <x-nav-link href="/" :active="request()->is('/')" class="block">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')" class="block">About</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts*')" class="block">Blog</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')" class="block">Contact</x-nav-link>
        </div>
    </div>
</nav>

<header class="bg-white/90 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 sticky top-0 z-40">
    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-1.5 h-8 bg-gradient-to-b from-blue-600 to-cyan-400 rounded-full"></div>
                <h1 class="text-xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-2xl">
                    {{ $slot }}
                </h1>
            </div>

            <nav class="hidden sm:flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center p-1 px-3 space-x-1 bg-gray-50/50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-700 rounded-full backdrop-blur-sm">
                    <li class="inline-flex items-center">
                        <a href="/" class="flex items-center text-xs font-medium text-gray-500 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-300 transition-all duration-300">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />
                        </svg>
                        <span class="ml-1 text-xs font-bold bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent px-1">
                            {{ $slot }}
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>
</header>

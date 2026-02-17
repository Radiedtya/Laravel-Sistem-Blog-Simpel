<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-12 px-4 mx-auto max-w-screen-xl lg:py-16">
        {{-- Main Card --}}
        <div class="p-8 md:p-12">
            
            <div class="grid gap-12 lg:grid-cols-2 items-center">
                {{-- Left Side: Text --}}
                <div class="space-y-6">
                    <div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                            Student & Developer
                        </span>
                        <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                            Hello, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Ryn</span>
                        </h1>
                    </div>

                    <p class="text-lg font-light text-gray-600 dark:text-gray-400 leading-relaxed">
                        Seorang siswa **SMK Rekayasa Perangkat Lunak** yang sedang jatuh cinta dengan ekosistem Laravel. Saya percaya bahwa kode yang rapi adalah awal dari aplikasi yang hebat. Blog ini bukan sekadar tugas, tapi jurnal digital saya dalam menaklukkan baris-baris PHP.
                    </p>

                    {{-- Action Buttons --}}
                    <div class="flex flex-wrap gap-4">
                        <a href="/posts" class="px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm transition-all duration-300 shadow-lg shadow-blue-500/30">
                            Lihat Karya Saya
                        </a>
                        <a href="https://github.com/Radiedtya" target="_blank" class="px-6 py-3 text-gray-900 bg-white border border-gray-200 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-2xl text-sm dark:bg-gray-700 dark:text-white dark:border-gray-600 transition-all duration-300">
                            GitHub Profile
                        </a>
                    </div>
                </div>

                {{-- Right Side: Visual --}}
                <div class="relative group">
                    {{-- Decorative Background --}}
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-400 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    
                    <div class="relative bg-white dark:bg-gray-900 rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Coding" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
                        
                        {{-- Floating Badge --}}
                        <div class="absolute bottom-4 right-4 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md p-4 rounded-2xl border border-white/20 shadow-xl">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="text-xs font-bold text-gray-800 dark:text-white">Currently Learning: Laravel 12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tech Stack Section --}}
            <div class="mt-16 pt-12 border-t border-gray-200 dark:border-gray-700">
                <p class="text-center text-sm font-medium text-gray-500 uppercase tracking-widest mb-8">My Tech Stack</p>
                <div class="flex flex-wrap justify-center gap-6">
                    @foreach(['Laravel', 'PHP', 'Tailwind', 'MySQL', 'JavaScript'] as $tech)
                        <div class="px-5 py-2 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl shadow-sm hover:shadow-md transition-shadow cursor-default">
                            <span class="text-gray-700 dark:text-gray-200 font-medium">{{ $tech }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
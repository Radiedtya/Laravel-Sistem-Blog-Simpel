<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <main class="pt-8 pb-16 lg:pt-12 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="px-4 mx-auto max-w-4xl">
            <nav class="mb-8">
                <a href="/posts" class="inline-flex items-center text-sm font-semibold text-blue-600 hover:text-blue-700 hover:underline transition-colors group">
                    <svg class="mr-2 w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke daftar artikel
                </a>
            </nav>

            <article class="format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-8">
                    {{-- Category Badge --}}
                    <div class="mb-4">
                        <a
                            href="/posts?category={{ $post->category->slug }}"
                            class="inline-block px-3 py-1 text-xs font-bold tracking-wider uppercase bg-blue-100 text-blue-600 rounded-lg dark:bg-blue-900/30 dark:text-blue-400 hover:bg-blue-200 transition">
                            {{ $post->category->name }}
                        </a>
                    </div>

                    {{-- Title --}}
                    <h1 class="text-3xl font-extrabold leading-tight text-gray-900 lg:text-5xl dark:text-white mb-6">
                        {{ $post->title }}
                    </h1>

                    {{-- Author Meta --}}
                    <div class="flex items-center space-x-4 not-italic">
                        <img
                            class="w-12 h-12 rounded-full border-2 border-gray-100 dark:border-gray-800"
                            src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=6366f1&color=fff"
                            alt="{{ $post->author->name }}" />
                        <div class="text-sm">
                            <a href="/posts?author={{ $post->author->username }}" class="text-lg font-bold text-gray-900 dark:text-white hover:underline">
                                {{ $post->author->name }}
                            </a>
                            <p class="text-gray-500 dark:text-gray-400">
                                Diterbitkan pada
                                <time datetime="{{ $post->created_at }}">{{ $post->created_at->format('j F Y') }}</time>
                            </p>
                        </div>
                    </div>
                </header>

                <div class="text-lg leading-relaxed text-gray-700 dark:text-gray-300 space-y-6">
                    {{-- Ini asumsi kita pakai nl2br supaya paragraf baru terbaca --}}
                    {!! nl2br(e($post->body)) !!}
                </div>

                <footer class="mt-12 py-6 border-y border-gray-100 dark:border-gray-800">
                    <p class="text-center text-gray-500 italic text-sm">"Terima kasih sudah membaca artikel ini. Semoga bermanfaat"</p>
                </footer>

                @if (session('success'))
                    <div
                        x-data="{ show: true }"
                        x-init="setTimeout(() => (show = false), 4000)"
                        x-show="show"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-[-20px] scale-95"
                        x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 transform translate-y-[-20px] scale-95"
                        class="fixed top-5 right-5 z-200 max-w-sm w-full shadow-2xl pointer-events-auto">
                        <div class="bg-white dark:bg-gray-800 border-l-4 border-green-500 rounded-2xl p-4 shadow-lg flex items-center space-x-4">
                            <div class="shrink-0 bg-green-100 dark:bg-green-900/30 p-2 rounded-full">
                                <svg class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>

                            <div class="flex-1">
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Berhasil!</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ session('success') }}</p>
                            </div>

                            <button @click="show = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endif

                <section class="mt-12">
                    <div class="flex items-center space-x-3 mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Diskusi</h2>
                        <span class="bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-sm font-bold px-3 py-1 rounded-full">
                            {{ $post->comments->count() }}
                        </span>
                    </div>

                    <div class="mb-12 bg-gray-50 dark:bg-gray-800/30 p-6 rounded-3xl">
                        <form action="/posts/{{ $post->slug }}/comments" method="POST" class="relative">
                            @csrf
                            <textarea
                                rows="3"
                                name="body"
                                class="w-full p-4 text-sm text-gray-900 bg-white dark:bg-gray-800 rounded-2xl border-none shadow-sm focus:ring-2 focus:ring-blue-500 transition-all dark:text-white outline-none"
                                placeholder="Apa pendapatmu tentang artikel ini?"
                                required></textarea>
                            <div class="flex justify-end mt-3">
                                <button
                                    type="submit"
                                    class="px-6 py-2.5 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 shadow-md hover:shadow-lg transition-all transform active:scale-95">
                                    Kirim Komentar
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="space-y-8">
                        @forelse ($post->comments->sortByDesc('created_at') as $comment)
                            <div class="flex group">
                                <div class="shrink-0 mr-4">
                                    <img
                                        class="size-10 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700"
                                        src="https://ui-avatars.com/api/?name={{ urlencode($comment->author->name) }}&background=6366f1&color=fff"
                                        alt="{{ $comment->author->name }}" />
                                </div>
                                <div
                                    class="flex-1 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 p-5 rounded-2xl shadow-sm group-hover:border-blue-200 dark:group-hover:border-blue-900 transition-colors">
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="text-sm font-black text-gray-900 dark:text-white italic">
                                            {{ $comment->author->name }}
                                        </h3>

                                        <div class="flex items-center space-x-3">
                                            <span class="text-[10px] text-gray-400 font-medium uppercase tracking-widest">
                                                {{ $comment->created_at->diffForHumans() }}
                                            </span>

                                            {{-- Form Hapus (Hanya muncul jika kamu ingin memberikan akses hapus) --}}
                                            <form action="/comments/{{ $comment->id }}" method="POST" onsubmit="return confirm('Yakin mau hapus komentar ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="group/btn p-1 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                    <svg class="size-4 text-gray-400 group-hover/btn:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                        {{ $comment->body }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-12 bg-gray-50 dark:bg-gray-800/20 rounded-3xl border-2 border-dashed border-gray-200 dark:border-gray-700">
                                <p class="text-gray-500 font-medium">Belum ada diskusi di sini. Mulai yuk!</p>
                            </div>
                        @endforelse
                    </div>
                </section>
            </article>
        </div>
    </main>
</x-layout>

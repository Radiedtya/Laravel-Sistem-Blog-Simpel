<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    {{-- Tombol Kembali --}}
                    <a href="/posts" class="inline-flex items-center font-medium text-sm text-blue-500 hover:underline mb-6">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                        Kembali ke daftar artikel
                    </a>

                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}&background=6366f1&color=fff" alt="{{ $post->author->name }}">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                    <time pubdate datetime="{{ $post->created_at }}" title="{{ $post->created_at->format('F jS, Y') }}">{{ $post->created_at->format('F j, Y') }}</time>
                                </p>
                                <a href="/categories/{{ $post->category->slug }}">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:bg-primary-200 transition">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>

                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
                </header>

                {{-- Isi Konten --}}
                <div class="text-lg leading-relaxed text-gray-800 dark:text-gray-300">
                    <p class="mb-4">{{ $post->content }}</p>
                </div>

                {{-- Footer Article (Optional) --}}
                <section class="mt-12 border-t border-gray-200 pt-8">
                    <p class="text-gray-500 italic">Terima kasih sudah membaca artikel ini. Bagikan jika menurutmu bermanfaat!</p>
                </section>
            </article>
        </div>
    </main>
</x-layout>
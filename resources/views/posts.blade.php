<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <form action="/posts" method="GET" class="max-w-2xl mx-auto py-6 mb-12 px-4">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}" />
        @endif

        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}" />
        @endif

        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-400 rounded-[2rem] blur opacity-20 group-focus-within:opacity-40 transition duration-500"></div>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </div>

                <input
                    type="search"
                    id="search"
                    name="search"
                    value="{{ request('search') }}"
                    class="block w-full p-4 ps-12 text-sm text-gray-900 border-none rounded-[1.5rem] bg-white dark:bg-gray-800 shadow-xl focus:ring-2 focus:ring-blue-500 transition-all duration-300 dark:text-white dark:placeholder-gray-400"
                    placeholder="Mau cari artikel apa hari ini, Ryn?..."
                    autocomplete="off" />

                {{-- Button --}}
                <button
                    type="submit"
                    class="absolute end-2.5 bottom-2.5 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-2xl text-sm px-6 py-2 transition-all duration-300 shadow-lg shadow-blue-500/30">
                    Search
                </button>
            </div>
        </div>

        {{-- Menampilkan info pencarian jika ada --}}
        @if (request('search'))
            <p class="mt-4 text-center text-sm text-gray-500">
                Menampilkan hasil pencarian untuk:
                <span class="font-semibold text-blue-600">"{{ request('search') }}"</span>
            </p>
        @endif
    </form>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $p)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/posts?category={{ $p->category->slug }}">
                                <span
                                    class="bg-indigo-100 text-indigo-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-indigo-200 dark:text-indigo-800 hover:bg-indigo-200 transition">
                                    {{ $p->category->name }}
                                </span>
                            </a>
                            <span class="text-sm">{{ $p->created_at->diffForHumans() }}</span>
                        </div>

                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="/posts/{{ $p->slug }}" class="hover:underline">{{ $p->title }}</a>
                        </h2>

                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                            {{ Str::limit($p->body ?? $p->content, 120) }}
                        </p>
                    </div>

                    <div class="flex justify-between items-center mt-auto">
                        <div class="flex items-center space-x-3">
                            <img class="w-7 h-7 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($p->author->name) }}&background=6366f1&color=fff" alt="{{ $p->author->name }}" />
                            <a href="/posts?author={{ $p->author->username }}" class="text-sm font-medium dark:text-white hover:underline">
                                {{ $p->author->name }}
                            </a>
                        </div>

                        <a href="/posts/{{ $p->slug }}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline text-sm">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-20">
                    <p class="text-xl text-gray-500 font-light">Belum ada artikel yang diterbitkan.</p>
                </div>
            @endforelse
        </div>
    </div>
    <div class="mt-10">
        {{ $posts->links() }}
    </div>
</x-layout>

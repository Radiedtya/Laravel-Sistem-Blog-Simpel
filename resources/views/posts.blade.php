<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $p)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/categories/{{ $p->category->slug }}">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-indigo-200 dark:text-indigo-800 hover:bg-indigo-200 transition">
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
                            <a href="/authors/{{ $p->author->username }}" class="text-sm font-medium dark:text-white hover:underline">
                                {{ $p->author->name }}
                            </a>
                        </div>
                        
                        <a href="/posts/{{ $p->slug }}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline text-sm">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Hero Section --}}
    <section class="px-4 py-20 md:px-0 ">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                {{-- Text Content --}}
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Beautiful Pages to</span>
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 xl:inline">Tell Your Story!</span>
                        </h1>
                        <p class="mx-auto text-base text-gray-500 dark:text-gray-400 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Belajar Laravel jadi lebih seru dengan tampilan yang memukau. Mari bangun website impianmu bersama Ryn!
                        </p>
                        <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                            <a
                                href="#"
                                class="flex items-center justify-center w-full px-8 py-4 mb-3 text-lg text-white bg-blue-600 rounded-2xl sm:mb-0 hover:bg-blue-700 sm:w-auto shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-1">
                                Get Started
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                            <a
                                href="/about"
                                class="flex items-center justify-center px-8 py-4 text-gray-500 bg-gray-100 rounded-2xl hover:bg-gray-200 hover:text-gray-600 transition-all duration-300 sm:w-auto">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Image Hero --}}
                <div class="w-full md:w-1/2">
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-400 rounded-3xl blur opacity-25"></div>
                        <div class="relative w-full h-auto overflow-hidden rounded-3xl shadow-2xl">
                            <img
                                src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80"
                                class="object-cover w-full h-full transform transition duration-700 group-hover:scale-105" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature/Experience Section --}}
    <section class="py-20 my-10 mx-4 md:mx-10">
        <div class="max-w-6xl px-10 mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="w-full md:w-1/2">
                    <h2 class="text-5xl font-extrabold text-black leading-tight">
                        Crafting
                        <br />
                        <span class="text-blue-600">Powerful</span>
                        <br />
                        Experiences
                    </h2>
                    <div class="w-20 h-2 bg-blue-600 mt-6 rounded-full"></div>
                </div>

                <div class="w-full md:w-1/2 relative">
                    <div class="relative z-10 p-6 bg-white dark:bg-gray-700 rounded-3xl shadow-xl">
                        <p class="text-gray-500 dark:text-gray-300 text-lg leading-relaxed">
                            "Building beautiful designs for your next project. We've unlocked the secret to converting visitors into customers. Let's create something amazing together."
                        </p>
                    </div>
                    {{-- Floating Abstract Image --}}
                    <div class="absolute -top-16 -right-8 hidden lg:block opacity-50">
                        <img src="https://cdn.devdojo.com/images/december2020/designs3d.png" class="h-64 animate-bounce-slow" style="animation-duration: 4s" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>

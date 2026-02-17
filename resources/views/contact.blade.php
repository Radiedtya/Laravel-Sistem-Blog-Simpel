<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Get in <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Touch</span></h2>
            <p class="mt-4 text-lg text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">Ada ide project atau sekadar mau menyapa? Pintu digital saya selalu terbuka untuk diskusi seru seputar RPL!</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <div class="lg:col-span-1 relative group">
                <div class="absolute -inset-1 bg-gradient-to-b from-blue-600 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                
                <div class="relative h-full bg-gray-900 rounded-3xl p-8 text-white flex flex-col shadow-2xl overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-500/20 rounded-full blur-3xl"></div>
                    
                    <div class="relative z-10 flex-grow">
                        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                        
                        <div class="space-y-8">
                            <div class="flex items-start space-x-4 group/item">
                                <div class="bg-blue-500/10 p-3 rounded-2xl group-hover/item:bg-blue-500 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-400 group-hover/item:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Email Me</p>
                                    <p class="font-medium text-blue-100">rdiettyyaprtma@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 group/item">
                                <div class="bg-blue-500/10 p-3 rounded-2xl group-hover/item:bg-blue-500 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-blue-400 group-hover/item:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Location</p>
                                    <p class="font-medium text-blue-100">Bandung, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative z-10 pt-10 mt-10 border-t border-gray-800">
                        <p class="text-sm text-gray-400 mb-4 font-semibold uppercase tracking-widest">Follow Me</p>
                        <div class="flex space-x-3">
                            <a href="#" class="w-12 h-12 flex items-center justify-center bg-gray-800 rounded-2xl hover:bg-blue-600 hover:scale-110 transition-all duration-300 shadow-lg">GH</a>
                            <a href="#" class="w-12 h-12 flex items-center justify-center bg-gray-800 rounded-2xl hover:bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-600 hover:scale-110 transition-all duration-300 shadow-lg">IG</a>
                            <a href="#" class="w-12 h-12 flex items-center justify-center bg-gray-800 rounded-2xl hover:bg-blue-400 hover:scale-110 transition-all duration-300 shadow-lg">TW</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-3xl p-8 md:p-12 shadow-xl border border-gray-100 dark:border-gray-700 relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-blue-50 dark:bg-blue-900/10 rounded-full blur-3xl"></div>

                <form action="#" method="POST" class="relative z-10 space-y-8">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="relative">
                            <label for="name" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-4 bg-gray-50 dark:bg-gray-900/50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all duration-300 placeholder:text-gray-400" placeholder="Masukkan namamu" required>
                        </div>
                        <div class="relative">
                            <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Alamat Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-4 bg-gray-50 dark:bg-gray-900/50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all duration-300 placeholder:text-gray-400" placeholder="nama@email.com" required>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <label for="subject" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Subjek Pesan</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-4 bg-gray-50 dark:bg-gray-900/50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all duration-300 placeholder:text-gray-400" placeholder="Ada yang bisa saya bantu?" required>
                    </div>

                    <div class="relative">
                        <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Pesan Anda</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-4 bg-gray-50 dark:bg-gray-900/50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 transition-all duration-300 placeholder:text-gray-400 resize-none" placeholder="Tuliskan detail pesanmu di sini..."></textarea>
                    </div>

                    <button type="submit" class="group relative w-full md:w-max px-10 py-4 text-white font-bold rounded-2xl overflow-hidden transition-all duration-300">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-cyan-500 group-hover:scale-105 transition-transform duration-300"></div>
                        <span class="relative flex items-center justify-center">
                            Kirim Pesan
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                    </button>
                </form>
            </div>

        </div>
    </section>
</x-layout>
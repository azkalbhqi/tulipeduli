<x-app-layout>
    <x-slot name="header">
        <h1 class="text-4xl font-bold">{{ __('Welcome to TuliPeduli') }}</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mt-10 mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl ">
                
                <!-- Hero Section -->
                <section class="text-center py-20 bg-gradient-to-br from-purple-900 via-blue-800 to-indigo-900 mb-52 rounded-lg text-white">
                    <h1 class="text-5xl font-extrabold">
                        Aksesibilitas untuk <span class="text-yellow-400">Semua</span>
                    </h1>
                    <p class="mt-4 text-xl">
                        Bersama, kita menciptakan dunia inklusif untuk komunitas Tuli.
                    </p>
                    <div class="mt-8 space-x-4 ">
                        <button class="px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-black font-semibold rounded-md transition duration-300">
                            Pelajari Lebih Lanjut
                        </button>
                        <button class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-black font-semibold rounded-md transition duration-300">
                            Mulai Sekarang
                        </button>
                    </div>
                </section>

                <!-- Feature Section -->
                <h2 class="text-center py-10 text-3xl font-bold text-gray-800 dark:text-white">
                    Layanan Kami
                </h2>
                <section class="grid grid-cols-3 gap-6 p-6 rounded-lg bg-gray-900">
                    <!-- Feature Cards -->
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-md shadow-md p-6">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-white">Layanan JBI</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">Akses layanan juru bahasa isyarat yang andal dan mudah.</p>
                    </div>
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-md shadow-md p-6">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-white">Komunitas Tuli</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">Bergabung dengan komunitas yang mendukung inklusivitas.</p>
                    </div>
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-md shadow-md p-6">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-white">Edukasi & Event</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">Ikuti pelatihan dan acara untuk meningkatkan kesadaran.</p>
                    </div>
                </section>

                <!-- Testimonials Section -->
                <section class="my-10 p-6">
                    <h2 class="text-center text-3xl font-bold text-gray-800 dark:text-white">
                        Apa Kata Mereka?
                    </h2>
                    <div class="grid grid-cols-3 gap-6 mt-6">
                        <div class="bg-white dark:bg-gray-700 rounded-md shadow-md p-4">
                            <p class="italic">"TuliPeduli sangat membantu saya dalam berkomunikasi di tempat kerja."</p>
                            <p class="mt-2 text-right font-semibold">- Maria</p>
                        </div>
                        <div class="bg-white dark:bg-gray-700 rounded-md shadow-md p-4">
                            <p class="italic">"Layanan JBI sangat cepat dan mudah diakses."</p>
                            <p class="mt-2 text-right font-semibold">- Budi</p>
                        </div>
                        <div class="bg-white dark:bg-gray-700 rounded-md shadow-md p-4">
                            <p class="italic">"Sangat senang bisa bergabung dengan komunitas yang suportif."</p>
                            <p class="mt-2 text-right font-semibold">- Ani</p>
                        </div>
                    </div>
                </section>

                
            </div>
        </div>
        <footer class="bg-slate-900 py-8 text-center">
            <p class="text-gray-400">© 2024 TuliPeduli. Semua Hak Dilindungi.</p>
            <div class="mt-4">
                <a href="#" class="text-purple-500 mx-2 hover:underline">Instagram</a>
                <a href="#" class="text-purple-500 mx-2 hover:underline">Facebook</a>
                <a href="#" class="text-purple-500 mx-2 hover:underline">Twitter</a>
            </div>
        </footer>
    </div>
</x-app-layout>

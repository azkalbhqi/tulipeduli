<x-layout>
    <x-slot:title> {{$title}} </x-slot:title>

    <div class="p-10 max-w-screen-md mx-auto text-center">
        <article class="mb-8 pb-8  mx-auto">
            <!-- Blog Title -->
            <h1 class="font-bold text-2xl mb-3 "> {{$blog['judul']}} </h1>

            <!-- Metadata (Author & Date) -->
            <div class="flex justify-center items-center text-sm space-x-4 mb-5 ">
                <p>✍️ Penulis: {{$blog['penulis']}}</p>
                <p>•</p>
                <p class="text-sm">{{$blog['created_at']}}</p>
            </div>

            <!-- Blog Content -->
            <div class="leading-relaxed mb-5 ">
                <p> {{ $blog['konten'] }} </p>
            </div>

            <!-- Back Button -->
            <a href="/blogs" class="text-blue-600 hover:text-blue-800 transition ease-in-out font-semibold">
                &laquo; Kembali ke Semua Blog
            </a>
        </article>
    </div>
</x-layout>

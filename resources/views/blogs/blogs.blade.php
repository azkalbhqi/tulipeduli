<x-layout>
    <x-slot:title> {{$title}} </x-slot:title>

    <div class="p-10 max-w-screen-lg mx-auto">
        @foreach ($blogs as $blog)
            <article class="mb-10 pb-6 border-b border-gray-300">
                <!-- Blog Title -->
                <h1 class="font-bold text-2xl  mb-2"> {{$blog['judul']}} </h1>

                <!-- Metadata (Author & Date) -->
                <div class="flex items-center text-sm  space-x-4 mb-4">
                    <p>✍️ Penulis: {{$blog['penulis']}}</p>
                    <p>•</p>
                    <p class="text-sm">{{$blog['created_at']}}</p>
                </div>

                <!-- Blog Summary -->
                <p class=" text-sm leading-relaxed mb-4"> 
                    {{ Str::limit($blog['konten'], 100) }} 
                </p>

                <!-- Read More Link -->
                <a href="/blogs/{{$blog['slug']}}" class="text-blue-600 hover:text-blue-800 transition ease-in-out font-semibold">
                    Read more &raquo;
                </a>
            </article>
        @endforeach
    </div>
</x-layout>

<x-layout>
    <x-slot:title> {{$title}} </x-slot:title>

    <h1 class="text-3xl font-bold text-center text-blue-600 my-8">{{ $modul->title }}</h1>
    <div class="flex justify-center">
        <div class="p-4 rounded-lg shadow-lg w-full max-w-screen-lg">
            <iframe class="w-full h-[80vh] rounded-md" 
                    src="https://www.youtube.com/embed/{{ $modul->links }}" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('moduls.index') }}" class="bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700 transition-all">
            Back to all moduls
        </a>
    </div>
</x-layout>

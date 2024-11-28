<x-layout-admin>
    <x-slot:title> {{$title}} </x-slot:title>

    <!-- Create Modul Form -->
    <div class="max-w-screen-lg mx-auto p-6">

        <!-- Form to Create Modul -->
        <form action="{{ route('admin.blogs.store') }}" method="POST">
            @csrf

            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-white">Judul Blog</label>
                <input type="text" name="judul" id="judul" class="mt-1 block w-full p-2 border rounded-md text-black" required>
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Link Field (YouTube video link) -->
            <div class="mb-4">
                <label for="link" class="block text-sm font-medium text-white">Konten</label>
                <textarea name="konten" id="konten" class="form-control text-black mt-2 p-2 border rounded-md w-full" rows="5" required></textarea>
                @error('link')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="link" class="block text-sm font-medium text-white">slug</label>
                <input type="text" name="slug" id="slug" class="mt-1 block w-full p-2 border rounded-md text-black" required>
                @error('link')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-md shadow-md hover:bg-blue-700">
                    Create Blog
                </button>
            </div>
        </form>
    </div>
</x-layout-admin>

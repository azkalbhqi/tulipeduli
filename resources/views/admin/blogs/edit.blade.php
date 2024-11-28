<x-layout-admin>
    <x-slot:title> {{$title}} </x-slot:title>

    <!-- Create Modul Form -->
    <div class="max-w-screen-lg mx-auto p-6">
        <h1>INII EDIIITTT</h1>
        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form to Edit Blog -->
        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST">
            @csrf
            @method('PUT')
    
            <!-- Judul Input -->
            <div class="form-group mb-4">
                <label for="judul" class="block text-lg font-medium">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control text-black  mt-2 p-2 border rounded-md w-full" value="{{ old('judul', $blog->judul) }}" required>
                @error('judul')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Konten Textarea -->
            <div class="form-group mb-4">
                <label for="konten" class="block text-lg font-medium">Konten</label>
                <textarea name="konten" id="konten" class="form-control text-black mt-2 p-2 border rounded-md w-full" rows="5" required>{{ old('konten', $blog->konten) }}</textarea>
                @error('konten')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Slug Input -->
            <div class="form-group mb-4">
                <label for="slug" class="block text-lg font-medium">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control text-black mt-2 p-2 border rounded-md w-full" value="{{ old('slug', $blog->slug) }}" required>
                @error('slug')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

    
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary bg-blue-500 text-white py-2 px-6 rounded-md mt-4">Update Blog</button>
        </form>
    </div>
</x-layout-admin>

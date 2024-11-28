<x-layout-admin>
    <x-slot:title> {{$title}} </x-slot:title>

    <!-- Create Modul Form -->
    <div class="max-w-screen-lg mx-auto p-6">

        <!-- Form to Create Modul -->
        <form action="{{ route('admin.jbis.store') }}" method="POST">
            @csrf

            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-white">Nama</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full p-2 border rounded-md text-black" required>
                @error('nama')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Link Field (YouTube video link) -->
            <div class="mb-4">
                <label for="link" class="block text-sm font-medium text-white">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="mt-1 block w-full p-2 border rounded-md text-black" required>
                @error('alamat')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="link" class="block text-sm font-medium text-white">No_telp</label>
                <input type="text" name="no_telp" id="no_telp" class="mt-1 block w-full p-2 border rounded-md text-black" required>
                @error('no_telp')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-md shadow-md hover:bg-blue-700">
                    Masukan JBI
                </button>
            </div>
        </form>
    </div>
</x-layout-admin>

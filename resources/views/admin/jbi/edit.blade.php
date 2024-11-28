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

        
        <form action="{{ route('admin.jbis.update', $jbi) }}" method="POST">
            @csrf
            @method('PUT')
    
            
            <div class="form-group mb-4">
                <label for="judul" class="block text-lg font-medium">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control text-black  mt-2 p-2 border rounded-md w-full" value="{{ old('nama', $jbi->nama) }}" required>
                @error('nama')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            
            <div class="form-group mb-4">
                <label for="konten" class="block text-lg font-medium">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control text-black  mt-2 p-2 border rounded-md w-full" value="{{ old('alamat', $jbi->alamat) }}" required>
                @error('alamat')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Slug Input -->
            <div class="form-group mb-4">
                <label for="slug" class="block text-lg font-medium">No Telepon</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control text-black mt-2 p-2 border rounded-md w-full" value="{{ old('no_telp', $jbi->no_telp) }}" required>
                @error('no_telp')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

    
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary bg-blue-500 text-white py-2 px-6 rounded-md mt-4">Update JBI</button>
        </form>
    </div>
</x-layout-admin>

<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>
    
    <div class=" min-h-screen flex flex-col items-center py-8">
        <!-- Title Section -->
        <h1 class="text-4xl font-extrabold text-blue-600 mb-6">{{ $jbi->title }}</h1>

        <!-- Card Section -->
        <div class="shadow-xl bg-slate-900 rounded-lg w-1/3 p-6">
            <div class="text-center">
                <h2 class="text-2xl font-semibold ">{{ $jbi->nama }}</h2>
                <p class="text-lg mt-2">Alamat: {{ $jbi->alamat }}</p>
                <p class="text-lg mt-1">+62{{ $jbi->no_telp }}</p>
            </div>

            <div class="mt-8 p-5 flex justify-between">
                <a href="{{ route('jbis.index') }}" 
                   class="bg-blue-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all ease-in-out">
                    Back to All Jbis
                </a>
    
                <a href="https://wa.me/+62{{$jbi->no_telp}}" 
                   class="bg-green-500 text-white py-3 px-6 rounded-lg shadow-md hover:bg-green-600 transition-all ease-in-out">
                    Hubungi JBI
                </a>
    
            </div>
        </div>

        
    </div>
</x-layout>

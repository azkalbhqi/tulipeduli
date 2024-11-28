<x-layout>
    <x-slot:title> {{$title}} </x-slot:title>
    
    <div class="p-10 flex flex-wrap justify-around max-w-screen-lg mx-auto gap-6">
        @foreach ($jbis as $jbi)
        <div class=" bg-slate-900 rounded-lg p-4 shadow-md hover:shadow-lg transition-all duration-300 max-w-xs hover:bg-slate-800">
            <a href="{{ route('admin.jbis.show', $jbi->id) }}">
                <h1 class="mt-4 text-center text-lg font-semibold text-gray-100">{{ $jbi->nama }}</h1>
                <h3 class="mt-4 text-center text-md text-gray-100">{{ $jbi->alamat }}</h3>
                <h3 class="mt-4 text-center text-md font-semibold text-gray-100">{{ $jbi->no_telp }}</h3>
                
            </a>
        </div>
        @endforeach
    </div>
</x-layout>

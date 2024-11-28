<x-layout-guest>
    <x-slot:title> {{$title}} </x-slot:title>
    <h1 class="text-3xl font-bold text-center text-blue-600 my-8">{{ $jbi->title }}</h1>
    <div class="flex justify-center">
        <div class="p-4 rounded-lg shadow-lg w-full max-w-screen-lg">
            <h1 class="mt-4 text-center text-lg font-semibold text-gray-100">{{ $jbi->nama }}</h1>
                <h3 class="mt-4 text-center text-lg font-semibold text-gray-100">{{ $jbi->alamat }}</h3>
                <h3 class="mt-4 text-center text-lg font-semibold text-gray-100">{{ $jbi->no_telp }}</h3>
        </div>
    </div>
    <div class="text-center m-8 p-4 flex justify-around">
        <a href="{{ route('admin.jbis.index') }}" class="bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700 transition-all">
            Back to all jbis
        </a>
</x-layout-guest>
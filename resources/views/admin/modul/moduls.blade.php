<x-layout-admin>
    <x-slot:title> {{$title}} </x-slot:title>
    <div class="p-10 flex flex-wrap justify-around max-w-screen-lg mx-auto gap-6">

        <button class="px-6 py-3 bg-gray-300 align-middle hover:bg-gray-400 text-black font-semibold rounded-md transition duration-300"
            onclick="window.location.href='/admin/moduls-create'">
        + Modul
        </button>
    </div>
    <div class="p-10 flex flex-wrap justify-around max-w-screen-lg mx-auto gap-6">
        @foreach ($moduls as $modul)
        <div class=" bg-slate-900 rounded-lg p-4 shadow-md hover:shadow-lg transition-all duration-300 max-w-xs hover:bg-slate-800">
            <a href="{{ route('admin.moduls.show', $modul->id) }}">
                <img class="max-w-full h-40 w-full object-cover rounded-md" src="https://img.youtube.com/vi/{{ $modul->links }}/hqdefault.jpg" alt="{{ $modul->title }}">
                <h3 class="mt-4 text-center text-lg font-semibold text-gray-100">{{ $modul->title }}</h3>
            </a>
        </div>
        @endforeach
    </div>
</x-layout-admin>

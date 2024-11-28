<nav class="flex items-center justify-between p-6">
    <div class="text-2xl font-bold text-yellow-400">TuliPeduli</div>
    <div class="flex space-x-6">
        <a href="/admin/dashboard" class="text-white">Dashboard</a>
        <a href="/admin/moduls" class="text-white">Learn BISINDO</a>
        <a href="/admin/jbis" class="text-white">JBI Indonesia</a>
        <a href="/admin/blogs" class="text-white">Komunitas</a>
        
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
    
</nav>
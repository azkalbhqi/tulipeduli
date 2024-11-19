<nav class="flex items-center justify-between p-6">
        <div class="text-2xl font-bold text-yellow-400">TuliPeduli</div>
        <div class="flex space-x-6">
            <a href="/dashboard" class="text-white">Dashboard</a>
            <a href="/moduls" class="text-white">Learn BISINDO</a>
            <a href="/jbi" class="text-white">JBI Indonesia</a>
            <a href="/blogs" class="text-white">Komunitas</a>
            
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link">Logout</button>
        </form>
        
    </nav>
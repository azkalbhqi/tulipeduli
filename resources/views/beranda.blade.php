<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuliPeduli Dashboardpage</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-950 text-white font-sans">
    <!-- Navbar -->
    <x-navbar-guest></x-navbar-guest>

    <!-- Hero Section -->
    <section class="text-center my-60">
        <h1 class="text-4xl font-bold text-white">
            Peduli <span class="text-purple-600">Bersama</span><br>
            Akses untuk <span class="text-yellow-400">Semua</span>
        </h1>
        <div class="mt-8 space-x-4">
            <button class="px-6 py-3 bg-purple-800 text-white rounded-md">Pesan JBI</button>
            <button class="px-6 py-3 bg-gray-300 text-black rounded-md">Lihat lebih</button>
        </div>
    </section>

    

</body>
</html>

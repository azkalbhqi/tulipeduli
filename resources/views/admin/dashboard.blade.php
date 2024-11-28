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
    <x-navbar-admin></x-navbar-admin>

    <!-- Hero Section -->
    <section class="text-center my-10">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white">
            Welcome Back, <span class="text-purple-600">{{ Auth::user()->name }}</span>!
        </h1>
        <div class="mt-6 space-x-4">
            <button class="px-6 py-3 bg-purple-700 hover:bg-purple-800 text-white font-semibold rounded-md transition duration-300"
            onclick="window.location.href='/admin/profile'">
                View Profile
            </button>
            <button class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-black font-semibold rounded-md transition duration-300"
            >
                Settings
            </button>
        </div>
    </section>

</body>
</html>

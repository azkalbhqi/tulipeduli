<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn SIBI - TuliPeduli</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-950 text-white font-sans">
    <!-- Navbar -->
    <x-navbar>  </x-navbar>
    <!-- Main Content -->
    <x-header>{{ $title}}</x-header>

    {{ $slot }}

</body>
</html>
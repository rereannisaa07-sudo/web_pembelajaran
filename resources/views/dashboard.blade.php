<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Web Pembelajaran</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100">
    <nav class="bg-white shadow">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
            <span class="font-bold text-slate-800">Web Pembelajaran</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm rounded-lg bg-red-500 px-3 py-1.5 text-white hover:bg-red-600">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto p-4">
        <div class="bg-white rounded-2xl shadow p-6">
            <h1 class="text-xl font-bold text-slate-800">Halo, {{ auth()->user()->name }}!</h1>
            <p class="text-slate-500 mt-1">Kamu berhasil login. Dashboard siap dikembangkan.</p>
        </div>
    </main>
</body>
</html>
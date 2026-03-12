<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SPMB Dummy Mode' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <header class="sticky top-0 z-20 border-b bg-white/95 backdrop-blur">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">
            <a href="/" class="font-bold text-blue-700">SPMB SMA/SMK</a>
            <nav class="flex gap-3 text-sm">
                <a class="rounded px-2 py-1 hover:bg-slate-100" href="/">Landing</a>
                <a class="rounded px-2 py-1 hover:bg-slate-100" href="/siswa/dashboard">Siswa</a>
                <a class="rounded px-2 py-1 hover:bg-slate-100" href="/admin/dashboard">Admin</a>
            </nav>
        </div>
    </header>

    <main class="mx-auto max-w-6xl px-4 py-6">
        @yield('content')
    </main>
</body>
</html>

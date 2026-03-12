@extends('layouts.app', ['title' => 'Landing SPMB'])

@section('content')
<section class="grid gap-4 lg:grid-cols-2">
    <div class="rounded-2xl bg-blue-700 p-6 text-white">
        <p class="text-xs uppercase tracking-widest">Mode Dummy</p>
        <h1 class="mt-2 text-2xl font-bold">SPMB SMA/SMK Mobile-First</h1>
        <p class="mt-3 text-blue-100">Frontend sudah siap untuk simulasi alur pendaftaran sebelum backend asli tersedia.</p>
        <div class="mt-5 flex flex-wrap gap-2">
            <a href="/siswa/dashboard" class="rounded bg-white px-3 py-2 text-sm font-medium text-blue-700">Masuk Dashboard Siswa</a>
            <a href="/admin/dashboard" class="rounded border border-white px-3 py-2 text-sm font-medium">Masuk Dashboard Admin</a>
        </div>
    </div>

    <div class="space-y-3 rounded-2xl border bg-white p-6">
        <h2 class="text-lg font-semibold">Ringkasan fase implementasi</h2>
        <ol class="list-decimal space-y-1 pl-5 text-sm">
            <li>Landing page publik</li>
            <li>Dashboard siswa untuk pendaftaran</li>
            <li>Dashboard admin sesuai RBAC</li>
            <li>Integrasi API asli (setelah dummy mode)</li>
        </ol>
        @include('partials.business-note', ['items' => $businessDecisions])
    </div>
</section>
@endsection

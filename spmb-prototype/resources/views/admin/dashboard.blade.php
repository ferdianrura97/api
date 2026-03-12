@extends('layouts.app', ['title' => 'Dashboard Admin'])

@section('content')
<section class="space-y-4" x-data="{ role: '{{ $activeRole }}' }">
    <div class="rounded-2xl border bg-white p-4">
        <p class="text-xs uppercase text-slate-500">Dashboard Admin</p>
        <h1 class="text-xl font-bold">Kelola SPMB berdasarkan RBAC</h1>
        <p class="text-sm text-slate-600">Pilih role untuk simulasi menu dummy.</p>

        <div class="mt-3 flex flex-wrap gap-2 text-sm">
            @foreach ($roles as $role)
                <a href="/admin/dashboard?role={{ $role }}" class="rounded px-3 py-1 {{ $activeRole === $role ? 'bg-blue-700 text-white' : 'bg-slate-100' }}">{{ $role }}</a>
            @endforeach
        </div>
    </div>

    <div class="rounded-2xl border bg-white p-4">
        <h2 class="font-semibold">Menu role: {{ $activeRole }}</h2>
        <div class="mt-3 grid grid-cols-1 gap-2 sm:grid-cols-2">
            @foreach ($menus as $menu)
                <div class="rounded border p-3 text-sm">{{ $menu }}</div>
            @endforeach
        </div>
    </div>

    @include('partials.business-note', ['items' => $businessDecisions])
</section>
@endsection

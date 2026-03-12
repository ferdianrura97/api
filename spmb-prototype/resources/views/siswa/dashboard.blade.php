@extends('layouts.app', ['title' => 'Dashboard Siswa'])

@section('content')
<div x-data="{ tab: 'profil' }" class="space-y-4">
    <section class="rounded-2xl border bg-white p-4">
        <p class="text-xs uppercase text-slate-500">Dashboard Siswa</p>
        <h1 class="text-xl font-bold">Halo, {{ $student['name'] }}</h1>
        <p class="text-sm text-slate-600">NISN {{ $student['nisn'] }} • Asal sekolah {{ $student['school_origin'] }}</p>
    </section>

    <section class="rounded-2xl border bg-white p-4">
        <div class="mb-3 flex gap-2 text-sm">
            <button @click="tab='profil'" :class="tab==='profil' ? 'bg-blue-700 text-white' : 'bg-slate-100'" class="rounded px-3 py-1">Profil</button>
            <button @click="tab='berkas'" :class="tab==='berkas' ? 'bg-blue-700 text-white' : 'bg-slate-100'" class="rounded px-3 py-1">Berkas</button>
            <button @click="tab='pilihan'" :class="tab==='pilihan' ? 'bg-blue-700 text-white' : 'bg-slate-100'" class="rounded px-3 py-1">Pilihan Jurusan</button>
        </div>

        <div x-show="tab==='profil'" class="text-sm">
            <p>Status pendaftaran: <span class="font-semibold">{{ $student['registration_status'] }}</span></p>
        </div>

        <div x-show="tab==='berkas'" class="space-y-2 text-sm">
            @foreach ($student['documents'] as $doc)
                <div class="flex items-center justify-between rounded border p-2">
                    <span>{{ $doc['name'] }}</span>
                    <span class="font-medium">{{ $doc['status'] }}</span>
                </div>
            @endforeach
        </div>

        <div x-show="tab==='pilihan'" class="text-sm">
            <ul class="list-disc pl-5">
                @foreach ($student['major_choices'] as $major)
                    <li>{{ $major }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    @include('partials.business-note', ['items' => $businessDecisions])
</div>
@endsection

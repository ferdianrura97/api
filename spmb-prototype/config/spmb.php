<?php

return [
    'dummy_mode' => true,
    'business_decisions_required' => [
        'Aturan pembobotan seleksi final per jalur belum ditemukan pada dokumen sumber.',
        'Status transisi pendaftaran (draft, submit, verifikasi, banding) perlu keputusan bisnis.',
        'Detail izin RBAC per menu admin masih perlu keputusan bisnis.',
    ],
    'dummy' => [
        'student' => [
            'name' => 'Alya Putri',
            'nisn' => '0061234567',
            'school_origin' => 'SMPN 1 Serang',
            'major_choices' => ['Teknik Komputer dan Jaringan', 'Akuntansi'],
            'documents' => [
                ['name' => 'Kartu Keluarga', 'status' => 'Lengkap'],
                ['name' => 'Rapor Semester 1-5', 'status' => 'Lengkap'],
                ['name' => 'Akta Kelahiran', 'status' => 'Perlu unggah ulang'],
            ],
            'registration_status' => 'Draft',
        ],
        'admin_menus' => [
            'super_admin' => ['Dashboard', 'Gelombang', 'Kuota', 'Pendaftar', 'Seleksi', 'Pengumuman', 'Audit Log'],
            'operator_sekolah' => ['Dashboard', 'Pendaftar Sekolah', 'Verifikasi Berkas', 'Laporan'],
            'verifikator' => ['Dashboard', 'Antrian Verifikasi', 'Riwayat Verifikasi'],
        ],
    ],
];

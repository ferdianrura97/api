<?php

namespace App\Http\Controllers;

use App\Support\ApiHelper;

class DummySpmbController
{
    public function landing(): array
    {
        return ApiHelper::response([
            'title' => 'SPMB SMA/SMK Provinsi',
            'subtitle' => 'Mode dummy aktif, backend belum terhubung.',
        ]);
    }

    public function siswa(array $config): array
    {
        return ApiHelper::response([
            'student' => $config['dummy']['student'] ?? [],
            'business_notes' => ApiHelper::needsBusinessDecision($config['business_decisions_required'] ?? []),
        ]);
    }

    public function admin(array $config, string $role = 'operator_sekolah'): array
    {
        return ApiHelper::response([
            'role' => $role,
            'menus' => $config['dummy']['admin_menus'][$role] ?? [],
            'business_notes' => ApiHelper::needsBusinessDecision($config['business_decisions_required'] ?? []),
        ]);
    }
}

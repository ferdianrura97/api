<?php

use App\Http\Controllers\DummySpmbController;

/*
|--------------------------------------------------------------------------
| Dummy routes reference (Laravel style)
|--------------------------------------------------------------------------
| Route::get('/', fn () => view('landing.index'));
| Route::get('/siswa/dashboard', fn () => view('siswa.dashboard'));
| Route::get('/admin/dashboard', fn () => view('admin.dashboard'));
|
| Catatan:
| - Seluruh data diambil dari config/spmb.php (dummy mode).
| - Endpoint API asli belum diintegrasikan.
*/

$controller = new DummySpmbController();
$config = require __DIR__ . '/../config/spmb.php';

return [
    'landing' => $controller->landing(),
    'siswa_dashboard' => $controller->siswa($config),
    'admin_dashboard' => $controller->admin($config, 'operator_sekolah'),
];

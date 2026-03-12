# SPMB Prototype (Dummy Mode)

Prototype frontend **Laravel-style** (Blade + Tailwind + Alpine) untuk SPMB SMA/SMK dengan data dummy.

## Catatan penting
- Dokumen sumber kebenaran yang diminta (`README_Codex.md` dan `docs/01..06`) **tidak ditemukan** pada repository ini.
- Seluruh aturan yang belum jelas ditandai sebagai **"perlu keputusan bisnis"** pada konfigurasi dummy.

## Struktur
- `config/spmb.php`: konfigurasi dummy mode + data simulasi.
- `app/Support/ApiHelper.php`: helper respon standar untuk mode dummy.
- `resources/views/*`: landing, dashboard siswa, dashboard admin (RBAC simulasi).
- `routes/web.php`: contoh route Laravel-style.

## Next step
Saat backend tersedia, ganti sumber data dari config dummy ke service API nyata tanpa mengubah kontrak tampilan.

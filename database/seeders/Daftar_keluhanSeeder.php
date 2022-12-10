<?php

namespace Database\Seeders;

use App\Models\Daftar_keluhan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Daftar_keluhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Daftar_keluhan::create([
            'keluhan' => 'Benjolan dipayudara/ketiak',
        ]);
        Daftar_keluhan::create([
            'keluhan' => 'Keluar cairan dari puting',
        ]);
        Daftar_keluhan::create([
            'keluhan' => 'Penarikan kulit pada payudara',
        ]);
        Daftar_keluhan::create([
            'keluhan' => 'Kedua payudara simetris (jarak kedua puting susu ke garis tengah tubuh sama kiri dan kanan)',
        ]);
        Daftar_keluhan::create([
            'keluhan' => 'Perubahan warna kulit payudara',
        ]);
        Daftar_keluhan::create([
            'keluhan' => 'Cekukan atau kulit seperti kulit jeruk di payudara',
        ]);
        Daftar_keluhan::create([
            'keluhan' => 'Tidak Ada',
        ]);
    }
}

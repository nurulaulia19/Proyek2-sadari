<?php

namespace Database\Seeders;

use App\Models\PuskesmasDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuskesmasDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuskesmasDetails::create([
            'status' => 'admin',
            'user_id' => 1,
            'puskesmas_id' => 1
            
        ]);

        PuskesmasDetails::create([
            'status' => 'admin',
            'user_id' => 2,
            'puskesmas_id' => 9
            
        ]);

        PuskesmasDetails::create([
            'status' => 'pasien',
            'user_id' => 3,
            'puskesmas_id' => 1
            
        ]);
    }
}

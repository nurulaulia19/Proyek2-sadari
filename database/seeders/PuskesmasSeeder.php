<?php


namespace Database\Seeders;

use App\Models\Puskesmas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Puskesmas::create([
            'nama' => 'Puskesmas Sukagumiwang',
            'alamat' => 'Sukagumiwang',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Sidamulya',
            'alamat' => 'Jl raya krasak Sidamulya kecamatan bongas kabupaten Indramayu',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Anjatan',
            'alamat' => 'Jl raya anjatan no 3 desa Anjatan Utara kecamatan anjatan',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Balongan',
            'alamat' => 'Jalan Raya Balongan No 20 Kec.Balongan Kab.Indramayu',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas kertawinangu',
            'alamat' => 'Desa eretan kulon _kandanghaur
            ',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Patrol',
            'alamat' => 'Jl lapang bola patrol puskesmas patrol kec patrol kabupaten indramayu',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Tugu',
            'alamat' => 'Jl raya tugu Lelea',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Kandanghaur',
            'alamat' => 'Ds Curug rt.04/07.Kandanghaur',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Bongas',
            'alamat' => 'Desa Margamulya kec bongas kab indramayu',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Drunten Wetan',
            'alamat' => 'Drunten Wetan',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Temiyang',
            'alamat' => 'Desa Temiyangsari Kec.Kroya',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Tambi',
            'alamat' => 'Jln raya kr.ampel-jatibarang desa tambi lor',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Jatisawit',
            'alamat' => 'Jln. Raya Jatisawit Lor Kec. Jatibarang',
            
        ]);
    }
}

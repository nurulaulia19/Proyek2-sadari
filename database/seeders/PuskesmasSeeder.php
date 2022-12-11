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
            'alamat' => 'sukagumiwang',
            'kecamatan' => 'sukagumiwang',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Sidamulya',
            'alamat' => 'll raya krasak sidamulya kecamatan bongas kabupaten indramayu',
            'kecamatan' => 'sidamulya',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Anjatan',
            'alamat' => 'jl raya anjatan no 3 desa anjatan utara kecamatan anjatan',
            'kecamatan' => 'anjatan',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Balongan',
            'alamat' => 'jalan raya balongan No 20 Kec.balongan kab.indramayu',
            'kecamatan' => 'balongan',
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas kertawinangu',
            'alamat' => 'desa eretan kulon kandanghaur',
            'kecamatan' => 'kandanghaur',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Patrol',
            'alamat' => 'jl lapang bola patrol puskesmas patrol kec patrol kabupaten indramayu',
            'kecamatan' => 'patrol',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Tugu',
            'alamat' => 'jl raya tugu lelea',
            'kecamatan' => 'lelea',
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Kandanghaur',
            'alamat' => 'ds curug rt.04/07.kandanghaur',
            'kecamatan' => 'kandanghaur',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Bongas',
            'alamat' => 'desa margamulya kec bongas kab indramayu',
            'kecamatan' => 'bongas',
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Drunten Wetan',
            'alamat' => 'drunten wetan',
            'kecamatan' => 'gabuswetan',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Temiyang',
            'alamat' => 'desa temiyangsari kec.kroya',
            'kecamatan' => 'kroya',
            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Tambi',
            'alamat' => 'jln raya karangampel jatibarang desa tambi lor',
            'kecamatan' => 'sliyeg',
            

            
        ]);
        Puskesmas::create([
            'nama' => 'Puskesmas Jatisawit',
            'alamat' => 'jln. Raya Jatisawit Lor Kec. Jatibarang',
            'kecamatan' => 'jatibarang',
        ]);
    }
}

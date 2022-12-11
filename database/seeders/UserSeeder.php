<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@sadari.test',
            'kecamatan' => 'sukagumiwang',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $adminbongas = User::create([
            'name' => 'Admin Bongas',
            'email' => 'bongas@sadari.test',
            'kecamatan' => 'bongas',
            'password' => bcrypt('12345678'),
        ]);

        $adminbongas->assignRole('admin');

        $user = User::create([
            'nik' => '12345678',
            'name' => 'User Role',
            'no_hp' => '0895333448202',
            'pendidikan' => 'S1',
            'alamat' => 'Jl Suryanegara no 1',
            'email' => 'user@sadari.test',
            'kecamatan' => 'sukagumiwang',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');

        
        $superadmin = User::create([
            'name' => 'Super Admin Role',
            'email' => 'superadmin@sadari.test',
            'password' => bcrypt('12345678'),
        ]);

        $superadmin->assignRole('superadmin');
    }
}

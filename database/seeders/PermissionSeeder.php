<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->generateFor('puskesmas', 'web');
        $this->generateFor('user', 'web');
    }
    public function generateFor($name, $guard)
    {
        Permission::create(['name' => 'read_' . $name, 'guard_name' => $guard,]);
        Permission::create(['name' => 'create_' . $name, 'guard_name' => $guard,]);
        Permission::create(['name' => 'update_' . $name, 'guard_name' => $guard,]);
        Permission::create(['name' => 'delete_' . $name, 'guard_name' => $guard,]);
        
    }
}

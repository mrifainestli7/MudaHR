<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create(['name' => 'admin_sistem']);
        Role::create(['name' => 'admin_sekolah']);
        Role::create(['name' => 'kepala_sekolah']);
        Role::create(['name' => 'staff_guru']);
        Role::create(['name' => 'staff_dikdasmen']);
        Role::create(['name' => 'pimpinanan_dikdasmen']);

        // Permission::create(['name' => 'transactions.index']);
        // Permission::create(['name' => 'transactions.store']);

        // $user->givePermissionTo([
        //     'transactions.index',
        //     'transactions.store'
        // ]);
    }
}
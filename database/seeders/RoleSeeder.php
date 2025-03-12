<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['id' => Str::uuid(), 'name' => 'admin_sistem']);
        Role::create(['id' => Str::uuid(), 'name' => 'admin_sekolah']);
        Role::create(['id' => Str::uuid(), 'name' => 'kepala_sekolah']);
        Role::create(['id' => Str::uuid(), 'name' => 'staff_guru']);
        Role::create(['id' => Str::uuid(), 'name' => 'staff_dikdasmen']);
        Role::create(['id' => Str::uuid(), 'name' => 'pimpinanan_dikdasmen']);

        // update cache to know about the newly created permissions (required if using WithoutModelEvents in seeders)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permission::create(['name' => 'transactions.index']);
        // Permission::create(['name' => 'transactions.store']);

        // $user->givePermissionTo([
        //     'transactions.index',
        //     'transactions.store'
        // ]);
    }
}
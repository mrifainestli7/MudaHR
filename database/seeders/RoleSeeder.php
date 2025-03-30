<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
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
        Permission::create(['name' => 'create kegiatan']);
        Permission::create(['name' => 'read kegiatan']);
        Permission::create(['name' => 'update kegiatan']);
        Permission::create(['name' => 'delete kegiatan']);

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['id' => Str::uuid(), 'name' => 'admin_sistem']);
        Role::create(['id' => Str::uuid(), 'name' => 'admin_sekolah']);
        Role::create(['id' => Str::uuid(), 'name' => 'kepala_sekolah'])->givePermissionTo([
            'create kegiatan',
            'read kegiatan',
            'update kegiatan',
            'delete kegiatan'
        ]);
        Role::create(['id' => Str::uuid(), 'name' => 'staff_guru']);
        Role::create(['id' => Str::uuid(), 'name' => 'staff_dikdasmen'])->givePermissionTo([
            'create kegiatan',
            'read kegiatan',
            'update kegiatan',
            'delete kegiatan'
        ]);
        Role::create(['id' => Str::uuid(), 'name' => 'pimpinanan_dikdasmen']);

        // update cache to know about the newly created permissions (required if using WithoutModelEvents in seeders)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    }
}
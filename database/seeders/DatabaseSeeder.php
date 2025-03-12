<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $usersData = [
            [
                'name' => 'adminsistem',
                'email' => 'adminsistem@mail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'adminsekolah',
                'email' => 'adminsekolah@mail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'kepalasekolah',
                'email' => 'kepalasekolah@mail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'staffguru',
                'email' => 'staffguru@mail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'staffdikdasmen',
                'email' => 'staffdikdasmen@mail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'pimpinandikdasmen',
                'email' => 'pimpinandikdasmen@mail.com',
                'password' => bcrypt('password')
            ],
        ];
        $roles = ['admin_sistem', 'admin_sekolah', 'kepala_sekolah', 'staff_guru', 'staff_dikdasmen', 'pimpinanan_dikdasmen'];
        $this->call([RoleSeeder::class]);
        foreach ($usersData as $index => $user) {
            $createdUser = User::factory()->create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt('password'),
            ]);
            $createdUser->assignRole($roles[$index]);
        }
    }
}
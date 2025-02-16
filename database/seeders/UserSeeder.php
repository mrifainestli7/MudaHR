<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('user1')
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('user2')
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'password' => bcrypt('user3')
            ],
            [
                'name' => 'user4',
                'email' => 'user4@gmail.com',
                'password' => bcrypt('user4')
            ],
        ];

        foreach ($usersData as $key => $val) {
            User::create($val);
        }
        $admin = User::find(2);
        $admin->assignRole('admin_sistem');
        $user = User::find(3);
        $user->assignRole('admin_sekolah');
        $user = User::find(4);
        $user->assignRole('kepala_sekolah');
        $user = User::find(5);
        $user->assignRole('staff_guru');
        $user = User::find(6);
        $user->assignRole('staff_dikdasmen');
    }
}
<?php

namespace App\Policies;

use App\Models\User;

class KegiatanPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $user)
    {
        return $user->hasPermissionTo('read kegiatan');
    }
    public function create(User $user)
    {
        return $user->hasPermissionTo('create kegiatan');
    }
    public function update(User $user)
    {
        return $user->hasPermissionTo('update kegiatan');
    }
    public function delete(User $user)
    {
        return $user->hasPermissionTo('delete kegiatan');
    }
}
<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;

class UsersObserver
{
    public function creating(User $user)
    {
        $user->uuid = Str::uuid();
    }
}

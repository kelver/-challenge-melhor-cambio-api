<?php

namespace App\Observers;

use App\Models\Repos;
use Illuminate\Support\Str;

class ReposObserver
{
    public function creating(Repos $user)
    {
        $user->uuid = Str::uuid();
    }
}

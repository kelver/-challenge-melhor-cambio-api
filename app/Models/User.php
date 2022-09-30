<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'avatar_url',
        'about',
        'user_id',
        'user_created_at',
        'repos_count',
    ];

    public function repos(): HasMany
    {
        return $this->hasMany(Repos::class);
    }
}

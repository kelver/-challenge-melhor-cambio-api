<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getUsers(): Collection|array
    {
        return $this->model->with('repos')->get();
    }

    public function storeNewUser(array $data): User
    {
        return $this->model->create($data);
    }
}

<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getUsers()
    {
        return $this->model->with('typeInterest')->where('user_id', auth()->id())->paginate(10);
    }

    public function storeNewUser(array $data)
    {
        return $this->model->create($data);
    }
}

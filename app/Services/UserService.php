<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected UserRepository $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    public function getUsers()
    {
        return $this->repository->getUsers();
    }

    public function storeNewUser(array $data)
    {
        return $this->repository->storeNewUser($data);
    }
}

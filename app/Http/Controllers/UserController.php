<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserController extends Controller
{
    protected UserService $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function index(): AnonymousResourceCollection
    {
        $users = $this->service->getUsers();
        return UserResource::collection($users);
    }

    public function store(Request $request): UserResource
    {
        $user = $this->service->storeNewUser($request->all());
        return new UserResource($user);
    }
}

<?php
namespace App\Repositories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;

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
        $userData = $this->getUserGithub($data['login']);
        $repos = collect($this->getReposGithub($data['login']));
        $user = $this->model->create([
            'name' => $userData['name'],
            'username' => $userData['login'],
            'avatar_url' => $userData['avatar_url'],
            'about' => $userData['bio'] ?? 'Sem bio',
            'user_id' => $userData['id'],
            'user_created_at' => Carbon::parse($userData['created_at'])->format('Y-m-d'),
            'repos_count' => $userData['public_repos'],
        ]);

        $repos->each(function ($repo) use ($user) {
            $user->repos()->create([
                'name' => $repo['name'],
                'url' => $repo['html_url'],
                'user_id' => $user->id,
            ]);
        });

        return $user;
    }

    public function getUserGithub (string $login)
    {
        return Http::withoutVerifying()
                ->withOptions(["verify"=>false])
                ->get('https://api.github.com/users/' . $login)
                ->json();
    }

    public function getReposGithub (string $login)
    {
        return Http::withoutVerifying()
                ->withOptions(["verify"=>false])
                ->get("https://api.github.com/users/{$login}/repos?per_page=100")
                ->json();
    }
}

<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'identify' => $this->uuid,
            'id' => $this->user_id,
            'name' => $this->name,
            'username' => $this->username,
            'avatar' => $this->avatar_url,
            'about' => $this->about,
            'repos_count' => $this->repos_count,
            'user_created_at' => Carbon::parse($this->user_created_at)->format('d/m/Y'),
            'created_at_br' => Carbon::parse($this->created_at)->format('d/m/Y \à\s H:i:s'),
            'repos' => ReposResource::collection($this->repos),
        ];
    }
}

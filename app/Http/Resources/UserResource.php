<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

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
            "id" => $this->id,
            "name" => $this->name,
            "roll_number" => $this->roll_number,
            "email" => $this->email,
            "phone" => $this->phone,
            "role" => $this->role,
            "profile_picture" => asset(Storage::url($this->profile_picture)),
        ];
    }
}

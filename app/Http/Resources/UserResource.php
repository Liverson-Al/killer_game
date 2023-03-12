<?php

namespace App\Http\Resources;

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
        $user = $this->resource;
        return [
            'id'                => $user->id,
            'name'              => $user->name,
            'year'              => $user->year,
            'email'             => $user->email,
            'uid'               => $user->uid,
            'status'            => $user->status,
            'status_photo'      => $user->status_photo,
            'photo'             => $user->photo,
            'victim'            => $user->victim,
            'date'              => $user->date,
            'message'           => $user->message,
            'count_kill'        => $user->count_kill,
            'visits'            => $user->visits,
            'count_attempts'    => $user->count_attempts,
        ];
    }
}

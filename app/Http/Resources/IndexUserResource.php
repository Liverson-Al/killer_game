<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IndexUserResource extends JsonResource
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
            'id'            => $user->id,
            'name'          => $user->name,
            'year'          => $user->year,
            'status'        => $user->status,
            'email'         => $user->email,
        ];
    }
}

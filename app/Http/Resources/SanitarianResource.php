<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SanitarianResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
                'especialidad' => $this->especialidad,
                'localizacion' => $this->localizacion,
                'user_id' => $this->user_id,
                'user' => new UserResource($this->user),
            ]
        ];
    }
}

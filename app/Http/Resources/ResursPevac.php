<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursPevac extends JsonResource
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
            'IME: '  => $this->resource->ime,
            'PREZIME: ' => $this->resource->prezime,
            'GODINE: ' => $this->resource->godine,
            'INSTAGRAM: ' => $this->resource->instagram
        ];
    }
}

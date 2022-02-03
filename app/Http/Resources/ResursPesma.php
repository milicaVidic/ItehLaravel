<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Pevac;
use App\Models\Tekstopisac;

class ResursPesma extends JsonResource
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
            'NAZIV: '  => $this->resource->naziv,
            'GODINA: ' => $this->resource->godina,
            'PEVAČ: ' => Pevac::factory(),
            'TEKSTOPISAC: ' => Tekstopisac::factory()
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursTekstopisac extends JsonResource
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
            'IME: ' => $this->resource->ime,
            'PREZIME: '  => $this->resource->prezime,
            'BROJ PESAMA: ' => $this->resource->broj_pesama,
        ];
    }
}

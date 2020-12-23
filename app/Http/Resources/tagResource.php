<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class tagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'tag_id'=>$this->id,
            'tag'=>$this->tag,
            'tag_product'=>productRecource::collection($this->products),

        ];
    }
}

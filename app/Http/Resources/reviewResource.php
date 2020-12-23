<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class reviewResource extends JsonResource
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
            'review_id'=>$this->id,
            'review_id'=>$this->id,
            'review_stars'=>$this->stars,
            'review'=>$this->review,
            'review_user'=>new userResource($this->customer),
            'review_product'=>new productRecource($this->product),

        ];
    }
}

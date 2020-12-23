<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class productRecource extends JsonResource
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
            'product_id' => $this->id,
            'product_title' => $this->title,
            'product_total' => $this->total,
            'product_image' => $this->url,
            'product_image' => $this->url,
            'product_price' => $this->price,
            'category_id' => new categoryResource($this->category) ,
            'product_description' => $this->description,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_category' => $this->id_category,
            'id_sub_category' => $this->id_sub_category,
            'desc' => $this->desc,
            'photo' => $this->image,
            'data_user' => $this->whenLoaded('rCategory', 'rSubCategory'),

        ];
    }
}

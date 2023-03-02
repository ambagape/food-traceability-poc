<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'lot_number' => $this->lot_number,

            'knowledgeArticles' => ProductResource::collection($this->whenLoaded('knowledgeArticles')),
        ];
    }
}

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
            'knowledgeArticles' => KnowledgeArticleResource::collection($this->whenLoaded('knowledgeArticles')),
        ];
    }
}
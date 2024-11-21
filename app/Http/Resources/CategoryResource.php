<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => 'categoty',
            'attributes' => [
                'name' => $this->name,
            ],
            'relationships' =>[
                
                'recipes' => [
                    'total' => count($this->recipes),
                    'data' => RecipeResource::collection($this->recipes),
                ],
            ]
        ];
    }
}

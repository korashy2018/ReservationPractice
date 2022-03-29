<?php

namespace App\Http\Resources;

use App\Models\Car;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CarCollection extends ResourceCollection
{
    public $collects = CarResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}

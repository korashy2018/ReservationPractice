<?php

namespace App\Http\Resources;

use App\Reservation\Enums\BookableResourcesTypesEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class MiniHouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                   => $this->id,
            'area'                 => $this->area,
            'number_of_rooms'      => $this->number_of_rooms,
            'number_of_bath_rooms' => $this->number_of_bath_rooms,
            'has_parking'          => $this->has_parking,
            'has_internet'         => $this->has_internet,
            'resource_type'        => BookableResourcesTypesEnum::MINI_HOUSE
        ];
    }
}

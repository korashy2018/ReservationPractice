<?php

namespace App\Http\Resources;

use App\Reservation\Enums\BookableResourcesTypesEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
          'id' => $this->id,
          'type'=>$this->type,
          'model'=>$this->model,
          'year'=>$this->year->year,
          'color'=>$this->color,
          'number_of_passengers'=>$this->number_of_passengers,
          'resource_type' => BookableResourcesTypesEnum::CAR
        ];
    }
}

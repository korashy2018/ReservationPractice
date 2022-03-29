<?php

namespace App\Reservation\Factory;

use App\Reservation\Contracts\BookableInterface;
use App\Reservation\Enums\BookableResourcesTypesEnum;
use App\Reservation\Repository\CarBookingRepository;
use App\Reservation\Repository\MiniHouseBookingRepository;

class BookableResourceFactory implements BookableResourceFactoryInterface
{

    public function getResource($type) :BookableInterface
    {
       switch ($type){
           case BookableResourcesTypesEnum::MINI_HOUSE :
               return new MiniHouseBookingRepository();
           case BookableResourcesTypesEnum::CAR :
               return new CarBookingRepository();
       }
    }
}

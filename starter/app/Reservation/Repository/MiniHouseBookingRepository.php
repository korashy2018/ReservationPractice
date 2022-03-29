<?php

namespace App\Reservation\Repository;

use App\Models\CarBooking;
use App\Models\MiniHouseBooking;
use App\Reservation\Contracts\BookableInterface;

class MiniHouseBookingRepository implements BookableInterface,RepositoryInterface
{
    public function model(): MiniHouseBooking
    {
        return new MiniHouseBooking();
    }
    public function book($resourceId,$packageId)
    {
        $booking = $this->model()->create([
        'mini_house_id'=>$resourceId,
        'package_id'=>$packageId
        ]);
        return $booking;
    }
}

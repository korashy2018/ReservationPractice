<?php

namespace App\Reservation\Repository;

use App\Models\CarBooking;
use App\Reservation\Contracts\BookableInterface;

class CarBookingRepository implements BookableInterface,RepositoryInterface
{
    public function model(): CarBooking
    {
        return new CarBooking();
    }
    public function book($resourceId,$packageId)
    {
        $booking = $this->model()->create([
          'car_id'=>$resourceId,
          'package_id'=>$packageId
        ]);
        return $booking;
    }
}

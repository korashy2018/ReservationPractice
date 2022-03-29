<?php

namespace App\Reservation\Contracts;

interface BookableInterface
{
    public function book($resourceId,$packageId);
}

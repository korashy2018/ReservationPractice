<?php

namespace App\Reservation\Factory;

use App\Reservation\Contracts\BookableInterface;

interface BookableResourceFactoryInterface
{
        public function getResource($type):BookableInterface;
}

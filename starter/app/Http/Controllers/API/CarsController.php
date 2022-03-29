<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarCollection;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(5);
        return new CarCollection($cars);
    }
}

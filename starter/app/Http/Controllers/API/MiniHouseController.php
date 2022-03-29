<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MiniHouseCollection;
use App\Models\MiniHouse;

class MiniHouseController extends Controller
{
    public function index()
    {
        $miniHouses = MiniHouse::paginate(5);
        return new MiniHouseCollection($miniHouses);
    }
}

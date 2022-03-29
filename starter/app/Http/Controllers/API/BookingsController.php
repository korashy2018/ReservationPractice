<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Car;
use App\Models\MiniHouse;
use App\Reservation\Enums\BookableResourcesTypesEnum;
use App\Reservation\Factory\BookableResourceFactory;

class BookingsController extends Controller
{
    public function book(BookRequest $request)
    {
        $resourceType = $request->resource_type;
        $resourceId = $request->resource_id;
        $packageId = $request->package_id;
        $resourceValid = $this->TypeResourceValidation(
            $resourceType,
            $resourceId
        );
        if ($resourceValid) {
            $bookingResourceFactory = (new BookableResourceFactory(
            ))->getResource(
                $resourceType
            );
            $book = $bookingResourceFactory->book($resourceId, $packageId);
            if ($book) {
                return response()->json([
                    'message' => 'resource Booked Successfully'
                ]);
            } else {
                return response()->json([
                    'error' => 'error processing your book'
                ], 400);
            }
        } else {
            return response()->json([
                'error' => 'resource id and type mismatch'
            ], 422);
        }
    }

    private function TypeResourceValidation($resourceType, $resourceId)
    {
        switch ($resourceType) {
            case BookableResourcesTypesEnum::CAR :
                return Car::find($resourceId);
            case BookableResourcesTypesEnum::MINI_HOUSE :
                return MiniHouse::find($resourceId);
        }
    }

}

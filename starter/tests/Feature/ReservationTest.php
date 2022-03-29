<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\MiniHouse;
use App\Models\Package;
use App\Reservation\Enums\BookableResourcesTypesEnum;
use App\Reservation\Factory\BookableResourceFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * @test
     */
    public function it_can_book_mini_house()
    {
        $this->withoutExceptionHandling();
        $bookingType = BookableResourcesTypesEnum::MINI_HOUSE;
        $bookingResourceFactory = (new BookableResourceFactory())->getResource(
            $bookingType
        );
        $resourceId = MiniHouse::factory()->create()->id;
        $packageId = Package::factory()->create()->id;
        $book = $bookingResourceFactory->book($resourceId, $packageId);
        $this->assertEquals($book->mini_house_id, $resourceId);
    }

    /**
     * @test
     */
    public function it_can_book_car()
    {
        $this->withoutExceptionHandling();

        $bookingType = BookableResourcesTypesEnum::CAR;
        $bookingResourceFactory = (new BookableResourceFactory())->getResource(
            $bookingType
        );
        $resourceId = Car::factory()->create()->id;
        $packageId = Package::factory()->create()->id;
        $book = $bookingResourceFactory->book($resourceId, $packageId);
        $this->assertEquals($book->car_id, $resourceId);
    }

    /**
     * @test
     */

    public function it_can_book_car_throughApi()
    {
        $this->withoutExceptionHandling();
        $data = [
            'resource_id'   => Car::factory()->create()->id,
            'resource_type' => BookableResourcesTypesEnum::CAR,
            'package_id'    => Package::factory()->create()->id
        ];
        $response = $this->post('/api/book', $data);
        $response->assertStatus(200);
    }

    /**
     * @test
     */

    public function it_can_book_mini_house_throughApi()
    {
        $this->withoutExceptionHandling();
        $data = [
            'resource_id'   => MiniHouse::factory()->create()->id,
            'resource_type' => BookableResourcesTypesEnum::MINI_HOUSE,
            'package_id'    => Package::factory()->create()->id
        ];
        $response = $this->post('/api/book', $data);
        $response->assertStatus(200);
    }


}


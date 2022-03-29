<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\MiniHouse;
use App\Models\Package;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResourceTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * @test
     */
    public function it_can_list_cars()
    {
        $this->withoutExceptionHandling();

        $cars = Car::factory(10)->create();
        $response = $this->get('api/cars');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data"  => [
                [
                    "id",
                    "type",
                    "model",
                    "year",
                    "color",
                    "number_of_passengers",
                    "resource_type"

                ]
            ],
            "links" => [
                "first",
                "last",
                "prev",
                "next"
            ],
            "meta"  => [
                "current_page",
                "from",
                "last_page",
                "links" => [
                    [
                        "url",
                        "label",
                        "active"
                    ],
                    [
                        "url",
                        "label",
                        "active"
                    ],
                    [
                        "url",
                        "label",
                        "active"
                    ]
                ],
                "path",
                "per_page",
                "to",
                "total"
            ]
        ]);
    }

    /**
     * @test
     */
    public function it_can_list_mini_houses()
    {
        $this->withoutExceptionHandling();

        $miniHouses = MiniHouse::factory(10)->create();
        $response = $this->get('api/mini_houses');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data"  => [
                [
                    'id',
                    'area',
                    'number_of_rooms',
                    'number_of_bath_rooms',
                    'has_internet',
                    'has_parking'
                ]
            ],
            "links" => [
                "first",
                "last",
                "prev",
                "next"
            ],
            "meta"  => [
                "current_page",
                "from",
                "last_page",
                "links" => [
                    [
                        "url",
                        "label",
                        "active"
                    ],
                    [
                        "url",
                        "label",
                        "active"
                    ],
                    [
                        "url",
                        "label",
                        "active"
                    ]
                ],
                "path",
                "per_page",
                "to",
                "total"
            ]
        ]);
    }

    /**
     * @test
     */
    public function it_can_lookup_package()
    {
        $this->withoutExceptionHandling();

        $packages = Package::factory(3)->create();
        $response = $this->get('api/lookup/packages');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data"  => [
                [
                    'id',
                    'name',
                    'days'
                ]
            ],
            "links" => [
                "first",
                "last",
                "prev",
                "next"
            ],
            "meta"  => [
                "current_page",
                "from",
                "last_page",
                "links" => [
                    [
                        "url",
                        "label",
                        "active"
                    ],
                    [
                        "url",
                        "label",
                        "active"
                    ],
                    [
                        "url",
                        "label",
                        "active"
                    ]
                ],
                "path",
                "per_page",
                "to",
                "total"
            ]
        ]);
    }
}

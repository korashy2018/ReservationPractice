<?php

namespace App\Http\Requests;

use App\Reservation\Enums\BookableResourcesTypesEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookRequest extends FormRequest
{
    public $types
        = [
            BookableResourcesTypesEnum::CAR,
            BookableResourcesTypesEnum::MINI_HOUSE
        ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'resource_type' => [
                'required',
                Rule::In($this->types)
            ],
            'resource_id'   => [
                'required'
            ],
            'package_id'    => [
                'required',
                'exists:packages,id'
            ]
        ];
    }
}

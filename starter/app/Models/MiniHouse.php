<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiniHouse extends Model
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'area',
        'number_of_rooms',
        'number_of_bath_rooms',
        'has_internet',
        'has_parking'
    ];


}

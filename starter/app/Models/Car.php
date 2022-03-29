<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use  HasFactory;

    protected $table = 'cars';
    protected $dates =[
        'year'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'model',
        'year',
        'color',
        'number_of_passengers'
    ];

    public function setYearAttribute($value)
    {
        $this->attributes['year'] = Carbon::createFromFormat('Y',$value);
    }

}

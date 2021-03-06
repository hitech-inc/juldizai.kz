<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models
 * @version April 24, 2018, 5:12 am UTC
 *
 * @property string Tel
 * @property string mobile
 * @property string address
 * @property string longitude
 * @property string latitude
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Tel',
        'mobile',
        'address',
        'longitude',
        'latitude',
        'email',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Tel' => 'string',
        'mobile' => 'string',
        'address' => 'string',
        'longitude' => 'string',
        'latitude' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'address' => 'required',
        'lang' => 'required'
    ];

    public static function getCoords()
    {
        $maps = Contact::where('longitude', '!=', null)->get();
        $coords = [];
        foreach( $maps as $map )
        {
            $longitude = $map->longitude;
            $latitude = $map->latitude;
            $coords = [
              'longitude' => $longitude,
              'latitude' => $latitude
            ];
        }
        //dd($coords);
        return $coords;
    }
}

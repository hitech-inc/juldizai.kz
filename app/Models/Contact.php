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
        'email'
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
        'latitude' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'address' => 'required'
    ];

    
}

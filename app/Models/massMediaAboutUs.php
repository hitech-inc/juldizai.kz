<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class massMediaAboutUs
 * @package App\Models
 * @version April 25, 2018, 11:06 am UTC
 *
 * @property string title
 * @property string img
 * @property string link
 */
class massMediaAboutUs extends Model
{
    use SoftDeletes;

    public $table = 'mass_media_aboutuses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'img',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'img' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'link' => 'required'
    ];

    
}

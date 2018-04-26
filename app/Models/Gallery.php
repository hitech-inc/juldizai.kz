<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gallery
 * @package App\Models
 * @version April 25, 2018, 10:47 am UTC
 *
 * @property string title
 * @property string img
 * @property string slug
 */
class Gallery extends Model
{
    use SoftDeletes;

    public $table = 'galleries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'img',
        'slug',
        'photos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'img' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'img' => 'required'
    ];

    
}

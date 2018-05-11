<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class allNew
 * @package App\Models
 * @version April 25, 2018, 5:35 am UTC
 *
 * @property string title
 * @property string slug
 * @property string text
 * @property string img
 */
class allNew extends Model
{
    use SoftDeletes;

    public $table = 'all_news';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'text',
        'img',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'text' => 'string',
        'img' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'text' => 'required',
        'img' => 'required',
        'lang' => 'required'
    ];

    
}

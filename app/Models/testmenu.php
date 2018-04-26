<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class testmenu
 * @package App\Models
 * @version April 25, 2018, 5:37 pm UTC
 *
 * @property string title
 * @property string path
 * @property string parent_id
 */
class testmenu extends Model
{
    use SoftDeletes;

    public $table = 'testmenus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'path',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'path' => 'string',
        'parent_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

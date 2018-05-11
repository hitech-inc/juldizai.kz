<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Menu
 * @package App\Models
 * @version April 24, 2018, 8:52 am UTC
 *
 * @property string title
 * @property string alias
 */
class Menu extends Model
{
    use SoftDeletes;

    public $table = 'menus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'alias',
        'lang',
        'parentId'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'alias' => 'string',
        'lang' => 'string',
        'parentId' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'alias' => 'required',
        'lang' => 'required'
    ];

    public function getMenu()
    {
        $menus = self::all();
        dd($menus);
    }

}

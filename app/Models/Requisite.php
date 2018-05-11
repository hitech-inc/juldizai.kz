<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Requisite
 * @package App\Models
 * @version April 24, 2018, 11:08 am UTC
 *
 * @property string title
 * @property string payment_via
 * @property string webmonney
 * @property string qiwi_wallet
 * @property string yandex_money
 * @property string rnn
 * @property account checking
 * @property string bank
 * @property string mfo
 * @property string bin
 */
class Requisite extends Model
{
    use SoftDeletes;

    public $table = 'requisites';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'payment_via',
        'webmonney',
        'qiwi_wallet',
        'yandex_money',
        'rnn',
        'checking_account',
        'bank',
        'mfo',
        'bin',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'payment_via' => 'string',
        'webmonney' => 'string',
        'qiwi_wallet' => 'string',
        'yandex_money' => 'string',
        'rnn' => 'string',
        'bank' => 'string',
        'mfo' => 'string',
        'bin' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lang' => 'required'
    ];

   public static function getRequisites()
    {
        $lang = session('lang');
        $requisites = self::where('lang',$lang)->get();
        return $requisites;
    }
}

<?php

namespace App\Repositories;

use App\Models\Requisite;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RequisiteRepository
 * @package App\Repositories
 * @version April 24, 2018, 11:08 am UTC
 *
 * @method Requisite findWithoutFail($id, $columns = ['*'])
 * @method Requisite find($id, $columns = ['*'])
 * @method Requisite first($columns = ['*'])
*/
class RequisiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'payment_via',
        'webmonney',
        'qiwi_wallet',
        'yandex_money',
        'rnn',
        'checking',
        'bank',
        'mfo',
        'bin',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Requisite::class;
    }
}

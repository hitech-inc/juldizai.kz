<?php

namespace App\Repositories;

use App\Models\allNew;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class allNewRepository
 * @package App\Repositories
 * @version April 25, 2018, 5:35 am UTC
 *
 * @method allNew findWithoutFail($id, $columns = ['*'])
 * @method allNew find($id, $columns = ['*'])
 * @method allNew first($columns = ['*'])
*/
class allNewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'text',
        'img',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return allNew::class;
    }
}

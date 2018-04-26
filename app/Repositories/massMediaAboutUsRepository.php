<?php

namespace App\Repositories;

use App\Models\massMediaAboutUs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class massMediaAboutUsRepository
 * @package App\Repositories
 * @version April 25, 2018, 11:06 am UTC
 *
 * @method massMediaAboutUs findWithoutFail($id, $columns = ['*'])
 * @method massMediaAboutUs find($id, $columns = ['*'])
 * @method massMediaAboutUs first($columns = ['*'])
*/
class massMediaAboutUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'img',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return massMediaAboutUs::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\testmenu;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class testmenuRepository
 * @package App\Repositories
 * @version April 25, 2018, 5:37 pm UTC
 *
 * @method testmenu findWithoutFail($id, $columns = ['*'])
 * @method testmenu find($id, $columns = ['*'])
 * @method testmenu first($columns = ['*'])
*/
class testmenuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'path',
        'parent_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return testmenu::class;
    }
}

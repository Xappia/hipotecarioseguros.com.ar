<?php

namespace App\Repositories;

use App\Models\tpropectsquiestions;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tpropectsquiestionsRepository
 * @package App\Repositories
 * @version December 11, 2017, 7:43 pm UTC
 *
 * @method tpropectsquiestions findWithoutFail($id, $columns = ['*'])
 * @method tpropectsquiestions find($id, $columns = ['*'])
 * @method tpropectsquiestions first($columns = ['*'])
*/
class tpropectsquiestionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idprospect',
        'idquestion',
        'optionquestion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tpropectsquiestions::class;
    }
}

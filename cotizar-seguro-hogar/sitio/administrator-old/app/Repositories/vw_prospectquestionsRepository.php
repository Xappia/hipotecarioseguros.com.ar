<?php

namespace App\Repositories;

use App\Models\vw_prospectquestions;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vw_prospectquestionsRepository
 * @package App\Repositories
 * @version December 20, 2017, 1:14 am UTC
 *
 * @method vw_prospectquestions findWithoutFail($id, $columns = ['*'])
 * @method vw_prospectquestions find($id, $columns = ['*'])
 * @method vw_prospectquestions first($columns = ['*'])
*/
class vw_prospectquestionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'question',
        'ntimes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vw_prospectquestions::class;
    }
}

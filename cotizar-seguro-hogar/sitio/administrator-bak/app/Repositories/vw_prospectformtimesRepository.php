<?php

namespace App\Repositories;

use App\Models\vw_prospectformtimes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vw_prospectformtimesRepository
 * @package App\Repositories
 * @version December 19, 2017, 10:57 pm UTC
 *
 * @method vw_prospectformtimes findWithoutFail($id, $columns = ['*'])
 * @method vw_prospectformtimes find($id, $columns = ['*'])
 * @method vw_prospectformtimes first($columns = ['*'])
*/
class vw_prospectformtimesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'formtype',
        'ntimes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vw_prospectformtimes::class;
    }
}

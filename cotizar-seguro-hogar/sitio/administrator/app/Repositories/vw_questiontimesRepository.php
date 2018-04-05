<?php

namespace App\Repositories;

use App\Models\vw_questiontimes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vw_questiontimesRepository
 * @package App\Repositories
 * @version December 19, 2017, 10:39 pm UTC
 *
 * @method vw_questiontimes findWithoutFail($id, $columns = ['*'])
 * @method vw_questiontimes find($id, $columns = ['*'])
 * @method vw_questiontimes first($columns = ['*'])
*/
class vw_questiontimesRepository extends BaseRepository
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
        return vw_questiontimes::class;
    }
}

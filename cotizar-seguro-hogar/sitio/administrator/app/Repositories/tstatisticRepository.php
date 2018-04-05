<?php

namespace App\Repositories;

use App\Models\tstatistic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tstatisticRepository
 * @package App\Repositories
 * @version November 27, 2017, 3:52 pm UTC
 *
 * @method tstatistic findWithoutFail($id, $columns = ['*'])
 * @method tstatistic find($id, $columns = ['*'])
 * @method tstatistic first($columns = ['*'])
*/
class tstatisticRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jsonscore',
        'answerdate'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tstatistic::class;
    }
}

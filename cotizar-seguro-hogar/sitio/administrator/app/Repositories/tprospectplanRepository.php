<?php

namespace App\Repositories;

use App\Models\tprospectplan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tprospectplanRepository
 * @package App\Repositories
 * @version November 27, 2017, 3:51 pm UTC
 *
 * @method tprospectplan findWithoutFail($id, $columns = ['*'])
 * @method tprospectplan find($id, $columns = ['*'])
 * @method tprospectplan first($columns = ['*'])
*/
class tprospectplanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idplan',
        'jsonscore',
        'score',
        'answerdate',
        'amount1',
        'amount2',
        'amount3',
        'amount4',
        'coverage1',
        'coverage2',
        'coverage3',
        'coverage4'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tprospectplan::class;
    }
}

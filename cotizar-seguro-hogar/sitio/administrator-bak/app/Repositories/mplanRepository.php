<?php

namespace App\Repositories;

use App\Models\mplan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mplanRepository
 * @package App\Repositories
 * @version November 27, 2017, 3:39 pm UTC
 *
 * @method mplan findWithoutFail($id, $columns = ['*'])
 * @method mplan find($id, $columns = ['*'])
 * @method mplan first($columns = ['*'])
*/
class mplanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'initscore',
        'finalscore',
        'plan',
        'image',
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
        return mplan::class;
    }
}

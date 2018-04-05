<?php

namespace App\Repositories;

use App\Models\tcoveragesplan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tcoveragesplanRepository
 * @package App\Repositories
 * @version December 11, 2017, 6:51 pm UTC
 *
 * @method tcoveragesplan findWithoutFail($id, $columns = ['*'])
 * @method tcoveragesplan find($id, $columns = ['*'])
 * @method tcoveragesplan first($columns = ['*'])
*/
class tcoveragesplanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'planid',
        'name',
        'amount'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tcoveragesplan::class;
    }
}

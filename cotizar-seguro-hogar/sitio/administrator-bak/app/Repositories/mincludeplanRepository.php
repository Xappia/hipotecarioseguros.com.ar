<?php

namespace App\Repositories;

use App\Models\mincludeplan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mincludeplanRepository
 * @package App\Repositories
 * @version November 27, 2017, 3:40 pm UTC
 *
 * @method mincludeplan findWithoutFail($id, $columns = ['*'])
 * @method mincludeplan find($id, $columns = ['*'])
 * @method mincludeplan first($columns = ['*'])
*/
class mincludeplanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idplan',
        'coverage',
        'amount'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mincludeplan::class;
    }
}

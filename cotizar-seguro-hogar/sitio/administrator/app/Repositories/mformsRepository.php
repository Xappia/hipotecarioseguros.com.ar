<?php

namespace App\Repositories;

use App\Models\mforms;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mformsRepository
 * @package App\Repositories
 * @version January 10, 2018, 8:24 pm UTC
 *
 * @method mforms findWithoutFail($id, $columns = ['*'])
 * @method mforms find($id, $columns = ['*'])
 * @method mforms first($columns = ['*'])
*/
class mformsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'formtype',
        'nshow',
        'nfilled'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mforms::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\vw_prospectsplans;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vw_prospectsplansRepository
 * @package App\Repositories
 * @version December 19, 2017, 6:34 pm UTC
 *
 * @method vw_prospectsplans findWithoutFail($id, $columns = ['*'])
 * @method vw_prospectsplans find($id, $columns = ['*'])
 * @method vw_prospectsplans first($columns = ['*'])
*/
class vw_prospectsplansRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'lastname',
        'type',
        'vw_prospectsplanscol',
        'amountplan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vw_prospectsplans::class;
    }
}

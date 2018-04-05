<?php

namespace App\Repositories;

use App\Models\mplanperformance;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mplanperformanceRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:16 am UTC
 *
 * @method mplanperformance findWithoutFail($id, $columns = ['*'])
 * @method mplanperformance find($id, $columns = ['*'])
 * @method mplanperformance first($columns = ['*'])
*/
class mplanperformanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'plan',
        'planlabel',
        'image',
        'amountplan',
        'costdaylabel',
        'costday',
        'coverage1label1',
        'coverage1',
        'coverage1label2',
        'amount1',
        'coverage2label1',
        'coverage2',
        'coverage2label2',
        'amount2',
        'randombutton',
        'buttonlabel',
        'buttonlabel2',
        'buttonlabel3',
        'footlabel',
        'coveragepdf',
        'ntimes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mplanperformance::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\mplannew;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mplannewRepository
 * @package App\Repositories
 * @version December 11, 2017, 7:23 pm UTC
 *
 * @method mplannew findWithoutFail($id, $columns = ['*'])
 * @method mplannew find($id, $columns = ['*'])
 * @method mplannew first($columns = ['*'])
*/
class mplannewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'plan',
        'planlabel',
        'image',
        'costdaylabel', 
        'coverage1label1', 
        'coverage1', 
        'coverage1label2', 
        'coverage2label1', 
        'coverage2', 
        'coverage2label2', 
        'buttonlabel', 
        'buttonlabel2', 
        'buttonlabel3', 
        'footlabel',
        'coveragepdf'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mplannew::class;
    }
}

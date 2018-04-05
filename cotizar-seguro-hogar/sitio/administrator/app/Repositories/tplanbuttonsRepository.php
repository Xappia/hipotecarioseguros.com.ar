<?php

namespace App\Repositories;

use App\Models\tplanbuttons;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tplanbuttonsRepository
 * @package App\Repositories
 * @version January 21, 2018, 12:53 am UTC
 *
 * @method tplanbuttons findWithoutFail($id, $columns = ['*'])
 * @method tplanbuttons find($id, $columns = ['*'])
 * @method tplanbuttons first($columns = ['*'])
*/
class tplanbuttonsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idplan',
        'btn1v',
        'btn1c',
        'btn2v',
        'btn2c',
        'btn3v',
        'btn3c'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tplanbuttons::class;
    }
}

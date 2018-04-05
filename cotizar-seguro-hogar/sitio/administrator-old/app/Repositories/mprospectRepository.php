<?php

namespace App\Repositories;

use App\Models\mprospect;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mprospectRepository
 * @package App\Repositories
 * @version November 27, 2017, 3:50 pm UTC
 *
 * @method mprospect findWithoutFail($id, $columns = ['*'])
 * @method mprospect find($id, $columns = ['*'])
 * @method mprospect first($columns = ['*'])
*/
class mprospectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'lastname',
        'dni',
        'gender',
        'timezone',
        'idcard',
        'phonetype',
        'phonecode',
        'phonenumber',
        'email',
        'formtype',
        'fillingdate'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mprospect::class;
    }
}

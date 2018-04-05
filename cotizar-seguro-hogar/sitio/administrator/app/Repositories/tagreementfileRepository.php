<?php

namespace App\Repositories;

use App\Models\tagreementfile;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tagreementfileRepository
 * @package App\Repositories
 * @version December 19, 2017, 9:05 pm UTC
 *
 * @method tagreementfile findWithoutFail($id, $columns = ['*'])
 * @method tagreementfile find($id, $columns = ['*'])
 * @method tagreementfile first($columns = ['*'])
*/
class tagreementfileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path',
        'filename'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tagreementfile::class;
    }
}

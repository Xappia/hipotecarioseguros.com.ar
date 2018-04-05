<?php

namespace App\Repositories;

use App\Models\tscoring;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tscoringRepository
 * @package App\Repositories
 * @version December 17, 2017, 6:36 pm UTC
 *
 * @method tscoring findWithoutFail($id, $columns = ['*'])
 * @method tscoring find($id, $columns = ['*'])
 * @method tscoring first($columns = ['*'])
*/
class tscoringRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idquestion',
        'optionquestion',
        'descriptionquestion',
        'rccscore',
        'rcmscore',
        'rcbscore',
        'trecscore',
        'tremscore',
        'trebscore',
        'ntimes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tscoring::class;
    }
}

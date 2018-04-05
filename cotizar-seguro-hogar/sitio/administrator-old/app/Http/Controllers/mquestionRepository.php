<?php

namespace App\Repositories;

use App\Models\mquestion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mquestionRepository
 * @package App\Repositories
 * @version November 27, 2017, 3:09 pm UTC
 *
 * @method mquestion findWithoutFail($id, $columns = ['*'])
 * @method mquestion find($id, $columns = ['*'])
 * @method mquestion first($columns = ['*'])
*/
class mquestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'description',
        'type',
        'phpfile',
        'score',
        'jsonscore',
        'highlight',
        'dependentquestion',
        'dependentanswer',
        'category'

    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mquestion::class;
    }
}

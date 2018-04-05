<?php

namespace App\Repositories;

use App\Models\vw_question;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vw_questionRepository
 * @package App\Repositories
 * @version December 19, 2017, 10:14 pm UTC
 *
 * @method vw_question findWithoutFail($id, $columns = ['*'])
 * @method vw_question find($id, $columns = ['*'])
 * @method vw_question first($columns = ['*'])
*/
class vw_questionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'question',
        'descriptionquestion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vw_question::class;
    }
}

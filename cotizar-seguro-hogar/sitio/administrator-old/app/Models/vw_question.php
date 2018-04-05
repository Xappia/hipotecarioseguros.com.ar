<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vw_question
 * @package App\Models
 * @version December 19, 2017, 10:14 pm UTC
 *
 * @property integer id
 * @property string question
 * @property string descriptionquestion
 */
class vw_question extends Model
{
    use SoftDeletes;

    public $table = 'vw_question';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'idprospect',
        'question',
        'descriptionquestion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idprospect' => 'integer',
        'question' => 'string',
        'descriptionquestion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

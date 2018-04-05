<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mquestion
 * @package App\Models
 * @version November 27, 2017, 3:09 pm UTC
 *
 * @property string question
 * @property string description
 * @property integer type
 * @property string phpfile
 * @property integer score
 * @property string jsonscore
 * @property integer highlight
 * @property integer dependentquestion
 * @property integer dependentanswer
 * @property integer category
 */
class mquestion extends Model
{
    use SoftDeletes;

    public $table = 'mquestion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
        'description' => 'string',
        'type' => 'integer',
        'phpfile' => 'string',
        'score' => 'integer',
        'jsonscore' => 'string',
        'highlight' => 'integer',
        'dependentquestion' => 'integer',
        'dependentanswer' => 'string',
        'category' => 'integer'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

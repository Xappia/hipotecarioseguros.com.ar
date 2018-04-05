<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vw_prospectquestions
 * @package App\Models
 * @version December 20, 2017, 1:14 am UTC
 *
 * @property integer id
 * @property string question
 * @property integer ntimes
 */
class vw_prospectquestions extends Model
{
    use SoftDeletes;

    public $table = 'vw_prospectquestions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'question',
        'ntimes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
        'ntimes' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

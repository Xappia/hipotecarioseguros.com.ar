<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tpropectsquiestions
 * @package App\Models
 * @version December 11, 2017, 7:43 pm UTC
 *
 * @property integer idprospect
 * @property integer idquestion
 * @property string optionquestion
 */
class tpropectsquiestions extends Model
{
    use SoftDeletes;

    public $table = 'tpropectsquiestions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idprospect',
        'idquestion',
        'optionquestion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idprospect' => 'integer',
        'idquestion' => 'integer',
        'optionquestion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
